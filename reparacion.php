<?php
// Permitir solicitudes CORS si tu frontend está en otro dominio o puerto
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Manejo preventivo para peticiones tipo OPTIONS (CORS preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

class RepairController {
    private $pdo;

    public function __construct() {
        $this->conectarBD();
    }

    // Método privado para establecer la conexión usando tu configuración
    private function conectarBD() {
        // Detecta si la petición viene del servidor local
        $isLocal = ($_SERVER['SERVER_NAME'] === 'localhost' OR $_SERVER['SERVER_NAME'] === '127.0.0.1');

        if ($isLocal) {
            // Configuración para entorno LOCAL
            $host     = 'localhost';
            $dbname   = 'Fix';
            $user     = 'root';
            $password = '123321';
            $port     = '3306';
        } else {
            // Configuración para PRODUCCIÓN (InfinityFree)
            $host     = 'sql110.infinityfree.com';
            $dbname   = 'if0_43117011_Fix';
            $user     = 'if0_43117011';
            $password = 'I53mhYIVc0Uo';
            $port     = '3306';
        }

        try {
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $this->pdo = new PDO($dsn,$user, $password,$options);
        } catch (PDOException $e) {
            echo json_encode(["success" => false, "message" => "Error en la conexión: " . $e->getMessage()]);
            exit();
        }
    }

    // Método para guardar los datos recibidos mediante POST/JSON
    public function store() {
        // Obtenemos los datos enviados en formato JSON desde JavaScript
        $inputData = json_decode(file_get_contents("php://input"), true);

        if (empty($inputData)) {
            echo json_encode(["success" => false, "message" => "No se recibieron datos."]);
            return;
        }

        // Si viene formato tipo "DD/MM/YYYY" de toLocaleDateString(), lo ideal es adaptarlo a formato SQL (YYYY-MM-DD) si tu columna es tipo DATE
        $rawDate     =$inputData['date'] ?? date('Y-m-d');
        
        // Transformación opcional si la fecha viene en formato local español (ej. "12/10/2026")
        $repair_date =$rawDate;
        if (strpos($rawDate, '/') !== false) {
            $parts = explode('/',$rawDate);
            if (count($parts) === 3) {
                $repair_date = "{$parts[2]}-{$parts[1]}-{$parts[0]}";
            }
        }

        $client_name = $inputData['clientName'] ?? '';$phone       = $inputData['phone'] ?? '';$device_type = $inputData['type'] ?? '';$model       = $inputData['model'] ?? '';$issue       = $inputData['issue'] ?? '';$price       = isset($inputData['price']) ? floatval($inputData['price']) : 0.00;
        $status      =$inputData['status'] ?? 'pending';

        if (empty($client_name)) {
            echo json_encode(["success" => false, "message" => "Faltan campos obligatorios (ID o Nombre del cliente)."]);
            return;
        }

        try {
            $query = "INSERT INTO repairs (repair_date, client_name, phone, device_type, model, issue, price, status) 
                      VALUES (:repair_date, :client_name, :phone, :device_type, :model, :issue, :price, :status)";
            
            $stmt = $this->pdo->prepare($query);
            
            $executed =$stmt->execute([
                ':repair_date' => $repair_date,
                ':client_name' => $client_name,
                ':phone'       => $phone,
                ':device_type' => $device_type,
                ':model'       => $model,
                ':issue'       => $issue,
                ':price'       => $price,
                ':status'      => $status
            ]);

            if ($executed) {
                echo json_encode(["success" => true, "message" => "Reparación guardada correctamente en la base de datos."]);
            } else {
                echo json_encode(["success" => false, "message" => "No se pudo registrar la reparación."]);
            }

        } catch (PDOException $e) {
            echo json_encode(["success" => false, "message" => "Error en la Base de Datos: " . $e->getMessage()]);
        }
    }
    public function cycleStatus($id) {
        try {
            // 1. Consultar el estado actual del registro
            $stmt = $this->pdo->prepare("SELECT status FROM repairs WHERE id = :id");
            $stmt->execute([':id' => $id]);
            $repair = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$repair) {
                echo json_encode(["success" => false, "message" => "Reparación no encontrada."]);
                return;
            }

            $currentStatus = strtolower(trim($repair['status']));

            // 2. BLOQUEO TOTAL si ya está completado (Evita que vuelva a pending)
            if ($currentStatus === 'completed' || $currentStatus === 'completado') {
                echo json_encode([
                    "success" => false, 
                    "message" => "La reparación ya finalizó y no se puede modificar su estado."
                ]);
                return;
            }

            // 3. Determinar el siguiente estado de manera estricta
            $nextStatus = '';
            switch ($currentStatus) {
                case 'pending':
                case 'pendiente':
                    $nextStatus = 'progress'; // o 'en_progreso' según prefieras
                    break;
                case 'progress':
                case 'en_progreso':
                    $nextStatus = 'completed'; // o 'completado'
                    break;
                default:
                    // Si el estado en la BD está corrupto o vacío, lo mandamos a pendiente de forma segura
                    $nextStatus = 'pending';
                    break;
            }

            // 4. Actualizar al nuevo estado en la base de datos
            $updateStmt = $this->pdo->prepare("UPDATE repairs SET status = :status WHERE id = :id");
            $executed = $updateStmt->execute([
                ':status' => $nextStatus,
                ':id'     => $id
            ]);

            if ($executed) {
                echo json_encode([
                    "success" => true, 
                    "message" => "Estado actualizado con éxito.", 
                    "newStatus" => $nextStatus
                ]);
            } else {
                echo json_encode(["success" => false, "message" => "No se pudo actualizar el estado."]);
            }

        } catch (PDOException $e) {
            echo json_encode(["success" => false, "message" => "Error en la Base de Datos: " . $e->getMessage()]);
        }
    }

    public function handleRequest() {
        $method = $_SERVER['REQUEST_METHOD'];
        $inputData = json_decode(file_get_contents("php://input"), true);

        if ($method === 'GET') {
            $this->index(); // Método para listar todas las reparaciones
        } elseif ($method === 'POST') {
            // Verificamos si la petición viene con la acción específica para cambiar el estado
            if (isset($inputData['action']) && $inputData['action'] === 'cycleStatus' && isset($inputData['id'])) {
                $this->cycleStatus($inputData['id']);
            } else {
                $this->store(); // De lo contrario, guarda un nuevo registro
            }
        }
    }

    public function index() {
        try {
            $stmt = $this->pdo->query("SELECT * FROM repairs");
            $repairs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($repairs);
        } catch (PDOException $e) {
            echo json_encode(["success" => false, "message" => "Error al obtener datos: " . $e->getMessage()]);
        }
    }
}

// Inicializamos el controlador y ejecutamos el método de guardado automáticamente al recibir la petición
$controller = new RepairController();
$controller->handleRequest();
?>