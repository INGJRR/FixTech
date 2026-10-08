<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiTech - Servicio Técnico y Soporte Especializado</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        // Configuración personalizada de Tailwind
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        },
                        tech: {
                            dark: '#0f172a',
                            card: '#1e293b',
                            accent: '#06b6d4'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Estilos personalizados adicionales */
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
        }
        .dark .glass-nav {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(12px);
        }
        .gradient-text {
            background: linear-gradient(135deg, #2563eb 0%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-slate-900 dark:text-gray-100 font-sans antialiased transition-colors duration-300">

    <!-- Header / Navegación -->
    <header class="fixed top-0 left-0 w-full z-50 glass-nav border-b border-gray-200 dark:border-slate-800 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <a href="#" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-brand-600 flex items-center justify-center text-white shadow-lg shadow-brand-500/30 group-hover:scale-105 transition-transform">
                        <i class="fa-solid fa-microchip text-xl"></i>
                    </div>
                    <div>
                        <span class="text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Servi<span class="text-brand-600 dark:text-brand-500">Tech</span></span>
                        <span class="block text-[10px] uppercase tracking-widest text-gray-500 dark:text-gray-400 font-bold -mt-1">Servicio Técnico</span>
                    </div>
                </a>

                <!-- Navegación de Escritorio -->
                <nav class="hidden md:flex items-center gap-8 font-medium text-sm">
                    <a href="#inicio" class="text-gray-700 dark:text-gray-200 hover:text-brand-600 dark:hover:text-brand-400 transition">Inicio</a>
                    <a href="#servicios" class="text-gray-700 dark:text-gray-200 hover:text-brand-600 dark:hover:text-brand-400 transition">Servicios</a>
                    <a href="#rastreo" class="text-gray-700 dark:text-gray-200 hover:text-brand-600 dark:hover:text-brand-400 transition flex items-center gap-1.5">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        Rastrear Estado
                    </a>
                    <a href="#cotizador" class="text-gray-700 dark:text-gray-200 hover:text-brand-600 dark:hover:text-brand-400 transition">Cotizador</a>
                    <a href="#contacto" class="text-gray-700 dark:text-gray-200 hover:text-brand-600 dark:hover:text-brand-400 transition">Contacto</a>
                </nav>

                <!-- Acciones (Dark Mode y Botón de Reserva) -->
                <div class="hidden md:flex items-center gap-4">
                    <button id="themeToggle" class="p-2.5 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-slate-800 rounded-xl transition" title="Cambiar tema">
                        <i class="fa-solid fa-moon dark:hidden text-lg"></i>
                        <i class="fa-solid fa-sun hidden dark:block text-lg text-amber-400"></i>
                    </button>
                    <a href="#reservar" class="bg-brand-600 hover:bg-brand-700 text-white font-semibold px-5 py-2.5 rounded-xl shadow-md hover:shadow-brand-500/20 transition flex items-center gap-2 text-sm">
                        <i class="fa-solid fa-calendar-check"></i> Agendar Cita
                    </a>
                </div>

                <!-- Botón de Menú Móvil -->
                <div class="flex items-center gap-2 md:hidden">
                    <button id="themeToggleMobile" class="p-2 text-gray-600 dark:text-gray-300 rounded-lg">
                        <i class="fa-solid fa-moon dark:hidden"></i>
                        <i class="fa-solid fa-sun hidden dark:block text-amber-400"></i>
                    </button>
                    <button id="mobileMenuBtn" class="p-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-slate-800 rounded-lg focus:outline-none">
                        <i class="fa-solid fa-bars text-xl" id="menuIcon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú Móvil Desplegable -->
        <div id="mobileMenu" class="hidden md:hidden border-b border-gray-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-4 pt-2 pb-6 space-y-3">
            <a href="#inicio" class="block py-2 text-gray-700 dark:text-gray-200 font-medium hover:text-brand-600">Inicio</a>
            <a href="#servicios" class="block py-2 text-gray-700 dark:text-gray-200 font-medium hover:text-brand-600">Servicios</a>
            <a href="#rastreo" class="block py-2 text-brand-600 dark:text-brand-400 font-medium">Estado de Reparación</a>
            <a href="#cotizador" class="block py-2 text-gray-700 dark:text-gray-200 font-medium hover:text-brand-600">Cotizador</a>
            <a href="#contacto" class="block py-2 text-gray-700 dark:text-gray-200 font-medium hover:text-brand-600">Contacto</a>
            <a href="#reservar" class="block text-center bg-brand-600 text-white font-semibold py-3 rounded-xl mt-4">Agendar Cita</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="pt-32 pb-20 md:pt-40 md:pb-28 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                
                <!-- Columna Texto -->
                <div class="lg:col-span-7 text-center lg:text-left space-y-6">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 dark:bg-slate-800 border border-brand-200 dark:border-slate-700 text-brand-600 dark:text-brand-400 text-xs font-semibold uppercase tracking-wider">
                        <i class="fa-solid fa-shield-halved"></i> Servicio Técnico Certificado & Garantizado
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-gray-900 dark:text-white leading-tight">
                        Soluciones tecnológicas <span class="gradient-text">rápidas y confiables</span> para tus equipos
                    </h1>
                    
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto lg:mx-0">
                        Reparación de computadoras, laptops, smartphones y redes. Diagnóstico exprés con repuestos 100% originales y garantía por escrito en cada servicio.
                    </p>

                    <!-- Acciones Rápidas -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                        <a href="#reservar" class="bg-brand-600 hover:bg-brand-700 text-white font-bold px-7 py-3.5 rounded-xl shadow-lg shadow-brand-500/25 hover:shadow-brand-500/40 transition transform hover:-translate-y-0.5 text-center">
                            <i class="fa-solid fa-wrench mr-2"></i> Solicitar Reparación
                        </a>
                        <a href="#cotizador" class="bg-white dark:bg-slate-800 text-gray-800 dark:text-white border border-gray-200 dark:border-slate-700 hover:bg-gray-50 dark:hover:bg-slate-700 font-bold px-7 py-3.5 rounded-xl transition text-center shadow-sm">
                            <i class="fa-solid fa-calculator mr-2 text-brand-500"></i> Cotizar en Línea
                        </a>
                    </div>

                    <!-- Métricas / Confianza -->
                    <div class="grid grid-cols-3 gap-4 pt-8 border-t border-gray-200 dark:border-slate-800 max-w-lg mx-auto lg:mx-0 text-center lg:text-left">
                        <div>
                            <p class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white">+5,000</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Equipos Reparados</p>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white">24h</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Diagnóstico Medio</p>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white">99%</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Clientes Satisfechos</p>
                        </div>
                    </div>
                </div>

                <!-- Columna Ilustración / Tarjeta Interactiva -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Tarjeta Principal Hero -->
                        <div class="bg-white dark:bg-slate-800 p-6 sm:p-8 rounded-3xl shadow-2xl border border-gray-100 dark:border-slate-700 relative z-10 space-y-6">
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl">
                                        <i class="fa-solid fa-laptop-medical"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 dark:text-white">Soporte Express</h3>
                                        <p class="text-xs text-emerald-600 dark:text-emerald-400 font-medium">Técnicos Disponibles Hoy</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 rounded-full text-xs font-bold">Activo</span>
                            </div>

                            <div class="space-y-3 bg-gray-50 dark:bg-slate-900/60 p-4 rounded-2xl border border-gray-100 dark:border-slate-800 text-sm">
                                <div class="flex justify-between items-center text-xs text-gray-500 dark:text-gray-400">
                                    <span>Servicios más solicitados</span>
                                    <span>Garantía mínima 90 días</span>
                                </div>
                                <div class="flex items-center gap-3 font-semibold text-gray-700 dark:text-gray-200">
                                    <i class="fa-solid fa-circle-check text-brand-500"></i> Cambio de Pantallas / Baterías
                                </div>
                                <div class="flex items-center gap-3 font-semibold text-gray-700 dark:text-gray-200">
                                    <i class="fa-solid fa-circle-check text-brand-500"></i> Limpieza y Cambio de Pasta Térmica
                                </div>
                                <div class="flex items-center gap-3 font-semibold text-gray-700 dark:text-gray-200">
                                    <i class="fa-solid fa-circle-check text-brand-500"></i> Recuperación de Datos Eliminados
                                </div>
                            </div>

                            <a href="#rastreo" class="block text-center w-full py-3 bg-slate-900 dark:bg-slate-700 text-white rounded-xl font-medium text-sm hover:bg-slate-800 transition">
                                <i class="fa-solid fa-magnifying-glass mr-2"></i> Consulta el Estado de tu Equipo
                            </a>
                        </div>

                        <!-- Decoración de fondo -->
                        <div class="absolute -top-6 -right-6 w-72 h-72 bg-brand-500/20 rounded-full blur-3xl -z-10"></div>
                        <div class="absolute -bottom-6 -left-6 w-72 h-72 bg-tech-accent/20 rounded-full blur-3xl -z-10"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios" class="py-20 bg-white dark:bg-slate-900/50 border-y border-gray-200/60 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-400">Nuestras Especialidades</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-gray-900 dark:text-white">Servicios técnicos integrales para personas y empresas</p>
                <p class="text-gray-600 dark:text-gray-300">Ofrecemos soluciones eficientes con diagnósticos detallados antes de realizar cualquier intervención.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Tarjeta Servicio 1 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-8 rounded-3xl border border-gray-200/80 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-2xl bg-blue-100 dark:bg-blue-900/40 text-brand-600 dark:text-brand-400 flex items-center justify-center text-2xl group-hover:bg-brand-600 group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-laptop"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Reparación de PCs y Laptops</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            Mantenimiento preventivo, corrección de sobrecalentamiento, reemplazo de componentes (RAM, SSD, pantallas, bisagras) y optimización general.
                        </p>
                    </div>
                    <ul class="mt-6 space-y-2 text-xs font-medium text-gray-500 dark:text-gray-400 border-t border-gray-200 dark:border-slate-700 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-500"></i> Windows y macOS</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-brand-500"></i> Repuestos certificados</li>
                    </ul>
                </div>

                <!-- Tarjeta Servicio 2 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-8 rounded-3xl border border-gray-200/80 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-2xl bg-cyan-100 dark:bg-cyan-900/40 text-cyan-600 dark:text-cyan-400 flex items-center justify-center text-2xl group-hover:bg-cyan-600 group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Smartphones y Tablets</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            Cambio de pantallas rotas, sustitución de baterías agotadas, pin de carga, daños por líquidos y reparación de placa base a nivel SMD.
                        </p>
                    </div>
                    <ul class="mt-6 space-y-2 text-xs font-medium text-gray-500 dark:text-gray-400 border-t border-gray-200 dark:border-slate-700 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-500"></i> iPhone, Samsung, Xiaomi, iPad</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-cyan-500"></i> Servicio exprés en 1 hora</li>
                    </ul>
                </div>

                <!-- Tarjeta Servicio 3 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-8 rounded-3xl border border-gray-200/80 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-2xl bg-purple-100 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 flex items-center justify-center text-2xl group-hover:bg-purple-600 group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Recuperación de Datos</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            Recuperación técnica de archivos perdidos en discos duros (HDD), SSDs, memorias USB o tarjetas SD dañadas por fallo lógico o físico.
                        </p>
                    </div>
                    <ul class="mt-6 space-y-2 text-xs font-medium text-gray-500 dark:text-gray-400 border-t border-gray-200 dark:border-slate-700 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-purple-500"></i> Confidencialidad garantizada</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-purple-500"></i> Evaluación de viabilidad gratis</li>
                    </ul>
                </div>

                <!-- Tarjeta Servicio 4 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-8 rounded-3xl border border-gray-200/80 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-2xl group-hover:bg-emerald-600 group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Redes y Wi-Fi Empresarial</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            Instalación y configuración de redes estructuradas, routers, puntos de acceso mesh, cableado UTP/Fibra y mejora de cobertura Wi-Fi.
                        </p>
                    </div>
                    <ul class="mt-6 space-y-2 text-xs font-medium text-gray-500 dark:text-gray-400 border-t border-gray-200 dark:border-slate-700 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> Para oficinas y hogares grandes</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500"></i> Auditoría de seguridad de red</li>
                    </ul>
                </div>

                <!-- Tarjeta Servicio 5 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-8 rounded-3xl border border-gray-200/80 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-2xl bg-amber-100 dark:bg-amber-900/40 text-amber-600 dark:text-amber-400 flex items-center justify-center text-2xl group-hover:bg-amber-600 group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-shield-virus"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Eliminación de Malware y Software</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            Limpieza profunda de virus, spyware, ransomware. Reinstalación limpia de sistemas operativos manteniendo la seguridad de sus archivos.
                        </p>
                    </div>
                    <ul class="mt-6 space-y-2 text-xs font-medium text-gray-500 dark:text-gray-400 border-t border-gray-200 dark:border-slate-700 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-amber-500"></i> Instalación de Antivirus Licenciado</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-amber-500"></i> Respaldos automáticos</li>
                    </ul>
                </div>

                <!-- Tarjeta Servicio 6 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-8 rounded-3xl border border-gray-200/80 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-14 h-14 rounded-2xl bg-rose-100 dark:bg-rose-900/40 text-rose-600 dark:text-rose-400 flex items-center justify-center text-2xl group-hover:bg-rose-600 group-hover:text-white transition duration-300">
                            <i class="fa-solid fa-building flex items-center justify-center"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Mantenimiento Corporativo</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                            Planes de póliza mensual para pymes. Soporte presencial y remoto continuo para garantizar cero interrupciones en el flujo de trabajo.
                        </p>
                    </div>
                    <ul class="mt-6 space-y-2 text-xs font-medium text-gray-500 dark:text-gray-400 border-t border-gray-200 dark:border-slate-700 pt-4">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-rose-500"></i> Respuesta prioritaria en < 2h</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-rose-500"></i> Asesoría TI y servidores</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección Rastreo de Reparación -->
    <section id="rastreo" class="py-20 bg-slate-900 text-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/20 text-brand-400 border border-brand-500/30 text-xs font-semibold mb-4">
                <i class="fa-solid fa-clock-rotate-left"></i> Rastreo en Tiempo Real
            </div>

            <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">¿Ya dejaste tu equipo en nuestro taller?</h2>
            <p class="text-slate-300 mb-8 max-w-xl mx-auto">
                Introduce el código de orden indicado en tu comprobante de recepción para conocer el estado actualizado del servicio.
            </p>

            <!-- Formulario de Búsqueda de Orden -->
            <form id="trackerForm" class="flex flex-col sm:flex-row gap-3 max-w-xl mx-auto mb-8">
                <input 
                    type="text" 
                    id="orderInput" 
                    placeholder="Ej: ST-2026-894" 
                    required 
                    class="flex-1 px-5 py-3.5 rounded-xl bg-slate-800 border border-slate-700 text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-brand-500 uppercase tracking-wider text-sm font-mono"
                >
                <button type="submit" class="bg-brand-600 hover:bg-brand-500 text-white font-bold px-7 py-3.5 rounded-xl transition flex items-center justify-center gap-2 text-sm shadow-lg shadow-brand-600/30">
                    <i class="fa-solid fa-magnifying-glass"></i> Consultar Estado
                </button>
            </form>

            <p class="text-xs text-slate-400 mb-6">Nota de prueba: Puedes probar introduciendo <button type="button" onclick="setDemoCode('ST-2026-894')" class="text-brand-400 underline hover:text-brand-300">ST-2026-894</button> o <button type="button" onclick="setDemoCode('ST-2026-102')" class="text-brand-400 underline hover:text-brand-300">ST-2026-102</button></p>

            <!-- Resultado de la Búsqueda (Oculto por defecto) -->
            <div id="trackerResult" class="hidden bg-slate-800/90 border border-slate-700 rounded-3xl p-6 sm:p-8 text-left transition-all duration-300">
                <div class="flex flex-wrap items-center justify-between gap-4 border-b border-slate-700 pb-4 mb-6">
                    <div>
                        <span class="text-xs text-slate-400 uppercase font-mono block">Orden ID</span>
                        <span id="resultId" class="text-xl font-bold font-mono text-brand-400">ST-2026-894</span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 uppercase block">Equipo / Modelo</span>
                        <span id="resultDevice" class="font-semibold text-slate-200">Laptop Asus ZenBook UX425</span>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 uppercase block">Fecha Recepción</span>
                        <span id="resultDate" class="text-sm text-slate-300">06 Oct, 2026</span>
                    </div>
                </div>

                <!-- Barra de Progreso del Estado -->
                <div class="space-y-6">
                    <div class="flex items-center justify-between text-xs font-semibold text-slate-300">
                        <span>Llegada / Diagnóstico</span>
                        <span>Reparación en Proceso</span>
                        <span>Pruebas de Calidad</span>
                        <span>Listo para Entrega</span>
                    </div>

                    <!-- Steps Visual Bar -->
                    <div class="relative flex items-center justify-between">
                        <!-- Line BG -->
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-1 bg-slate-700 -z-0"></div>
                        <!-- Line Fill -->
                        <div id="statusProgressLine" class="absolute left-0 top-1/2 -translate-y-1/2 h-1 bg-brand-500 transition-all duration-500 -z-0" style="width: 66%;"></div>

                        <!-- Step 1 -->
                        <div class="relative z-10 w-8 h-8 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold shadow-md">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <!-- Step 2 -->
                        <div class="relative z-10 w-8 h-8 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold shadow-md">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <!-- Step 3 -->
                        <div id="step3Circle" class="relative z-10 w-8 h-8 rounded-full bg-brand-500 text-white flex items-center justify-center text-xs font-bold shadow-md animate-pulse">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <!-- Step 4 -->
                        <div id="step4Circle" class="relative z-10 w-8 h-8 rounded-full bg-slate-700 text-slate-400 flex items-center justify-center text-xs font-bold shadow-md">
                            <i class="fa-solid fa-box-archive"></i>
                        </div>
                    </div>

                    <!-- Detalles del Estado -->
                    <div class="bg-slate-900/80 p-4 rounded-xl border border-slate-700/60 mt-4 flex items-start gap-3">
                        <i class="fa-solid fa-circle-info text-brand-400 mt-1"></i>
                        <div>
                            <p id="resultStatusDetail" class="text-sm text-slate-200 font-medium">
                                Estado Actual: <span class="text-emerald-400 font-semibold">En Proceso de Reparación</span>.
                            </p>
                            <p id="resultComment" class="text-xs text-slate-400 mt-1">
                                Se ha realizado el cambio de pasta térmica y sustitución del módulo de batería. Actualmente ejecutando test de estrés continuo de temperatura.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Cotizador Interactivo -->
    <section id="cotizador" class="py-20 bg-gray-50 dark:bg-slate-900">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-3">
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-400">Presupuesto Estimado</h2>
                <p class="text-3xl font-extrabold text-gray-900 dark:text-white">Calcula el costo aproximado de tu servicio</p>
                <p class="text-gray-600 dark:text-gray-400 text-sm">Selecciona tu equipo y el problema principal para obtener una cotización estimada al instante.</p>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-3xl shadow-xl border border-gray-200/80 dark:border-slate-700 p-6 sm:p-10 grid md:grid-cols-12 gap-8 items-center">
                
                <!-- Opciones -->
                <div class="md:col-span-7 space-y-6">
                    
                    <!-- Tipo de Dispositivo -->
                    <div>
                        <label class="block text-sm font-bold text-gray-800 dark:text-gray-200 mb-2">1. Selecciona tu Dispositivo</label>
                        <div class="grid grid-cols-3 gap-3" id="deviceGroup">
                            <button type="button" data-device="laptop" onclick="selectDevice(this)" class="calc-device p-3 rounded-2xl border-2 border-brand-500 bg-brand-50/50 dark:bg-brand-900/20 text-brand-600 dark:text-brand-400 flex flex-col items-center gap-2 transition">
                                <i class="fa-solid fa-laptop text-2xl"></i>
                                <span class="text-xs font-bold">Laptop</span>
                            </button>
                            <button type="button" data-device="pc" onclick="selectDevice(this)" class="calc-device p-3 rounded-2xl border-2 border-gray-200 dark:border-slate-700 text-gray-600 dark:text-gray-300 flex flex-col items-center gap-2 hover:border-brand-300 transition">
                                <i class="fa-solid fa-desktop text-2xl"></i>
                                <span class="text-xs font-bold">PC Escritorio</span>
                            </button>
                            <button type="button" data-device="phone" onclick="selectDevice(this)" class="calc-device p-3 rounded-2xl border-2 border-gray-200 dark:border-slate-700 text-gray-600 dark:text-gray-300 flex flex-col items-center gap-2 hover:border-brand-300 transition">
                                <i class="fa-solid fa-mobile-screen text-2xl"></i>
                                <span class="text-xs font-bold">Celular / Tablet</span>
                            </button>
                        </div>
                    </div>

                    <!-- Tipo de Reparación -->
                    <div>
                        <label for="issueSelect" class="block text-sm font-bold text-gray-800 dark:text-gray-200 mb-2">2. Problema / Servicio Requerido</label>
                        <select id="issueSelect" onchange="calculateQuote()" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-slate-700 bg-gray-50 dark:bg-slate-900 text-gray-800 dark:text-gray-200 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                            <option value="40">Mantenimiento Preventivo y Limpieza ($40)</option>
                            <option value="65">Formateo e Instalación de S.O. + Drivers ($65)</option>
                            <option value="90">Cambio de Batería / Teclado / Pieza genérica ($90)</option>
                            <option value="130">Cambio de Pantalla o Display ($130)</option>
                            <option value="110">Recuperación de Datos Básica ($110)</option>
                            <option value="180">Reparación Electrónica / Tarjeta Madre ($180)</option>
                        </select>
                    </div>

                    <!-- Modalidad de Servicio -->
                    <div>
                        <label class="block text-sm font-bold text-gray-800 dark:text-gray-200 mb-2">3. Modalidad de Atención</label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="flex items-center gap-3 p-3 rounded-xl border border-gray-200 dark:border-slate-700 cursor-pointer hover:bg-gray-50 dark:hover:bg-slate-700/50">
                                <input type="radio" name="serviceType" value="0" checked onchange="calculateQuote()" class="text-brand-600 focus:ring-brand-500">
                                <div>
                                    <span class="block text-xs font-bold text-gray-800 dark:text-white">En Taller</span>
                                    <span class="block text-[11px] text-gray-500 dark:text-gray-400">Sin costo de traslado</span>
                                </div>
                            </label>
                            <label class="flex items-center gap-3 p-3 rounded-xl border border-gray-200 dark:border-slate-700 cursor-pointer hover:bg-gray-50 dark:hover:bg-slate-700/50">
                                <input type="radio" name="serviceType" value="25" onchange="calculateQuote()" class="text-brand-600 focus:ring-brand-500">
                                <div>
                                    <span class="block text-xs font-bold text-gray-800 dark:text-white">A Domicilio</span>
                                    <span class="block text-[11px] text-gray-500 dark:text-gray-400">+$25 visita técnica</span>
                                </div>
                            </label>
                        </div>
                    </div>

                </div>

                <!-- Resultado de la Cotización -->
                <div class="md:col-span-5 bg-gradient-to-br from-brand-600 to-brand-800 text-white p-6 sm:p-8 rounded-2xl shadow-xl flex flex-col justify-between h-full space-y-6">
                    <div>
                        <span class="text-xs uppercase tracking-widest text-brand-200 font-bold block mb-1">Total Estimado</span>
                        <div class="flex items-baseline gap-2">
                            <span id="estimatedCost" class="text-5xl font-extrabold tracking-tight">$40</span>
                            <span class="text-xs text-brand-200">USD approx.</span>
                        </div>
                        <p class="text-xs text-brand-100 mt-3 leading-relaxed">
                            Incluye revisión inicial, mano de obra y garantía por escrito de 90 días.
                        </p>
                    </div>

                    <div class="space-y-3 pt-4 border-t border-brand-500/50">
                        <div class="flex justify-between text-xs text-brand-100">
                            <span>Tiempo de entrega aprox:</span>
                            <span id="estimatedTime" class="font-bold text-white">24 a 48 Horas</span>
                        </div>
                        <div class="flex justify-between text-xs text-brand-100">
                            <span>Diagnóstico:</span>
                            <span class="font-bold text-white">GRATIS con reparación</span>
                        </div>
                    </div>

                    <a href="#reservar" class="w-full py-3 bg-white text-brand-700 hover:bg-brand-50 font-extrabold text-sm rounded-xl transition text-center shadow-md">
                        Agendar con este presupuesto
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Proceso de Trabajo (4 Pasos) -->
    <section class="py-20 bg-white dark:bg-slate-900/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-400">Paso a Paso</h2>
                <p class="text-3xl font-extrabold text-gray-900 dark:text-white">¿Cómo funciona nuestro servicio?</p>
                <p class="text-gray-600 dark:text-gray-300 text-sm">Garantizamos transparencia completa en todo el proceso de reparación.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                
                <!-- Paso 1 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-6 rounded-2xl border border-gray-200/70 dark:border-slate-700 relative">
                    <span class="w-10 h-10 rounded-xl bg-brand-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-md">1</span>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Recepción o Cita</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-xs leading-relaxed">
                        Trae tu equipo a nuestro taller o solicita visita a domicilio en la fecha que prefieras.
                    </p>
                </div>

                <!-- Paso 2 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-6 rounded-2xl border border-gray-200/70 dark:border-slate-700 relative">
                    <span class="w-10 h-10 rounded-xl bg-brand-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-md">2</span>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Diagnóstico Gratis</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-xs leading-relaxed">
                        Nuestros expertos revisan la falla e informan la causa exacta con presupuesto final cerrado.
                    </p>
                </div>

                <!-- Paso 3 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-6 rounded-2xl border border-gray-200/70 dark:border-slate-700 relative">
                    <span class="w-10 h-10 rounded-xl bg-brand-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-md">3</span>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Reparación Técnica</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-xs leading-relaxed">
                        Sustituimos piezas defectuosas con repuestos originales y realizamos pruebas de control.
                    </p>
                </div>

                <!-- Paso 4 -->
                <div class="bg-gray-50 dark:bg-slate-800 p-6 rounded-2xl border border-gray-200/70 dark:border-slate-700 relative">
                    <span class="w-10 h-10 rounded-xl bg-brand-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-md">4</span>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Entrega y Garantía</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-xs leading-relaxed">
                        Recibes tu dispositivo como nuevo junto con tu documento de garantía por escrito de 90 días.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonios de Clientes -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900 border-t border-gray-200/60 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-400">Opiniones Reales</h2>
                <p class="text-3xl font-extrabold text-gray-900 dark:text-white">Lo que dicen nuestros clientes</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <!-- Testimonio 1 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-200 dark:border-slate-700 shadow-sm flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex text-amber-400 gap-1 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 text-sm italic">
                            "Llevé mi Macbook que no encendía por un derrame de café. En 24 horas identificaron la falla en la tarjeta madre y la repararon por un costo súper justo."
                        </p>
                    </div>
                    <div class="mt-6 flex items-center gap-3 pt-4 border-t border-gray-100 dark:border-slate-700">
                        <div class="w-10 h-10 rounded-full bg-brand-100 dark:bg-brand-900 text-brand-600 dark:text-brand-300 flex items-center justify-center font-bold text-sm">
                            CR
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900 dark:text-white">Carlos Ramírez</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Diseñador Gráfico</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-200 dark:border-slate-700 shadow-sm flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex text-amber-400 gap-1 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 text-sm italic">
                            "Contratamos la póliza de soporte empresarial para nuestra oficina de 15 computadoras. Excelente tiempo de respuesta y atención profesional siempre."
                        </p>
                    </div>
                    <div class="mt-6 flex items-center gap-3 pt-4 border-t border-gray-100 dark:border-slate-700">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-600 dark:text-emerald-300 flex items-center justify-center font-bold text-sm">
                            MA
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900 dark:text-white">María Alvarado</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Directora de Operaciones</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl border border-gray-200 dark:border-slate-700 shadow-sm flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex text-amber-400 gap-1 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 text-sm italic">
                            "El módulo de seguimiento de estado en la web es brillante. Pude ver exactamente cuándo terminaron las pruebas de mi celular. 100% recomendados."
                        </p>
                    </div>
                    <div class="mt-6 flex items-center gap-3 pt-4 border-t border-gray-100 dark:border-slate-700">
                        <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 flex items-center justify-center font-bold text-sm">
                            JS
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900 dark:text-white">Javier Sánchez</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Cliente Particular</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Formulario de Agendamiento y Contacto -->
    <section id="reservar" class="py-20 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-start">
                
                <!-- Info de Contacto -->
                <div class="lg:col-span-5 space-y-8">
                    <div>
                        <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-400 mb-2">Atención Inmediata</h2>
                        <h3 class="text-3xl font-extrabold text-gray-900 dark:text-white">Agenda tu servicio o visita hoy mismo</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mt-3">
                            Completa el formulario y uno de nuestros técnicos se pondrá en contacto contigo en menos de 30 minutos para confirmar la hora.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-slate-800 text-brand-600 dark:text-brand-400 flex items-center justify-center text-lg shrink-0">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white text-sm">Ubicación del Taller</h4>
                                <p class="text-xs text-gray-600 dark:text-gray-400">Av. Principal de la Tecnología #450, Centro Tech</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-slate-800 text-brand-600 dark:text-brand-400 flex items-center justify-center text-lg shrink-0">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white text-sm">Teléfono / WhatsApp</h4>
                                <p class="text-xs text-gray-600 dark:text-gray-400">+58 (412) 555-0199 / +58 (295) 200-1122</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-2xl bg-brand-50 dark:bg-slate-800 text-brand-600 dark:text-brand-400 flex items-center justify-center text-lg shrink-0">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 dark:text-white text-sm">Horarios de Atención</h4>
                                <p class="text-xs text-gray-600 dark:text-gray-400">Lunes a Viernes: 8:00 AM - 6:00 PM</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">Sábados: 9:00 AM - 2:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulario -->
                <div id="contacto" class="lg:col-span-7 bg-gray-50 dark:bg-slate-800 p-6 sm:p-10 rounded-3xl border border-gray-200/80 dark:border-slate-700 shadow-xl">
                    <form id="bookingForm" onsubmit="handleBooking(event)" class="space-y-6">
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="clientName" class="block text-xs font-bold uppercase text-gray-700 dark:text-gray-300 mb-2">Nombre Completo *</label>
                                <input type="text" id="clientName" required placeholder="Ej: Juan Pérez" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-gray-800 dark:text-gray-100 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                            </div>
                            <div>
                                <label for="clientPhone" class="block text-xs font-bold uppercase text-gray-700 dark:text-gray-300 mb-2">Teléfono de Contacto *</label>
                                <input type="tel" id="clientPhone" required placeholder="Ej: +58 412 1234567" class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-gray-800 dark:text-gray-100 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="deviceType" class="block text-xs font-bold uppercase text-gray-700 dark:text-gray-300 mb-2">Tipo de Equipo *</label>
                                <select id="deviceType" required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-gray-800 dark:text-gray-100 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                                    <option value="">Selecciona una opción</option>
                                    <option value="laptop">Laptop / Portátil</option>
                                    <option value="desktop">PC de Escritorio / Gaming</option>
                                    <option value="smartphone">Teléfono Móvil</option>
                                    <option value="tablet">Tablet / iPad</option>
                                    <option value="redes">Redes / Empresa</option>
                                </select>
                            </div>
                            <div>
                                <label for="preferredDate" class="block text-xs font-bold uppercase text-gray-700 dark:text-gray-300 mb-2">Fecha Estimada de Atención *</label>
                                <input type="date" id="preferredDate" required class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-gray-800 dark:text-gray-100 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label for="issueDescription" class="block text-xs font-bold uppercase text-gray-700 dark:text-gray-300 mb-2">Descripción del Problema o Fallo *</label>
                            <textarea id="issueDescription" rows="4" required placeholder="Describe brevemente la falla (ej: no enciende la pantalla, hace ruido extraño, virus)..." class="w-full px-4 py-3 rounded-xl border border-gray-300 dark:border-slate-700 bg-white dark:bg-slate-900 text-gray-800 dark:text-gray-100 text-sm focus:ring-2 focus:ring-brand-500 focus:outline-none"></textarea>
                        </div>

                        <button type="submit" class="w-full py-4 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-xl transition shadow-lg shadow-brand-500/30 flex items-center justify-center gap-2 text-sm">
                            <i class="fa-solid fa-paper-plane"></i> Enviar Solicitud de Cita
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Preguntas Frecuentes (FAQ Accordion) -->
    <section class="py-20 bg-gray-50 dark:bg-slate-900/50 border-t border-gray-200/60 dark:border-slate-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12 space-y-3">
                <h2 class="text-xs font-bold uppercase tracking-widest text-brand-600 dark:text-brand-400">Resuelve tus Dudas</h2>
                <p class="text-3xl font-extrabold text-gray-900 dark:text-white">Preguntas Frecuentes</p>
            </div>

            <div class="space-y-4" id="faqContainer">
                
                <!-- FAQ Item 1 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl border border-gray-200 dark:border-slate-700 overflow-hidden">
                    <button type="button" onclick="toggleFaq(this)" class="w-full p-5 text-left font-bold text-gray-900 dark:text-white flex justify-between items-center text-sm sm:text-base">
                        <span>¿Cuánto tiempo tarda el diagnóstico del equipo?</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <div class="hidden p-5 pt-0 text-gray-600 dark:text-gray-300 text-sm border-t border-gray-100 dark:border-slate-700/50 mt-2">
                        El diagnóstico express tarda entre 2 a 6 horas. Para fallas electrónicas complejas o daños por líquido, el tiempo estimado de diagnóstico detallado es de 24 horas laborables.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl border border-gray-200 dark:border-slate-700 overflow-hidden">
                    <button type="button" onclick="toggleFaq(this)" class="w-full p-5 text-left font-bold text-gray-900 dark:text-white flex justify-between items-center text-sm sm:text-base">
                        <span>¿Los repuestos utilizados son originales y garantizados?</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <div class="hidden p-5 pt-0 text-gray-600 dark:text-gray-300 text-sm border-t border-gray-100 dark:border-slate-700/50 mt-2">
                        Sí. Solo trabajamos con repuestos originales o de calidad AAA certificada por fabricantes. Todas nuestras piezas y mano de obra cuentan con garantía mínima por escrito de 90 días.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl border border-gray-200 dark:border-slate-700 overflow-hidden">
                    <button type="button" onclick="toggleFaq(this)" class="w-full p-5 text-left font-bold text-gray-900 dark:text-white flex justify-between items-center text-sm sm:text-base">
                        <span>¿Qué sucede con mis archivos e información personal?</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <div class="hidden p-5 pt-0 text-gray-600 dark:text-gray-300 text-sm border-t border-gray-100 dark:border-slate-700/50 mt-2">
                        Respetamos rigurosamente tu privacidad bajo nuestro protocolo de confidencialidad de datos. No formateamos ni manipulamos tus archivos personales sin previa autorización explícita.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl border border-gray-200 dark:border-slate-700 overflow-hidden">
                    <button type="button" onclick="toggleFaq(this)" class="w-full p-5 text-left font-bold text-gray-900 dark:text-white flex justify-between items-center text-sm sm:text-base">
                        <span>¿Tienen servicio de retiro y entrega a domicilio?</span>
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                    </button>
                    <div class="hidden p-5 pt-0 text-gray-600 dark:text-gray-300 text-sm border-t border-gray-100 dark:border-slate-700/50 mt-2">
                        Sí, contamos con mensajería técnica especializada para la recogida segura y devolución de tu equipo en la comodidad de tu hogar u oficina.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer / Pie de Página -->
    <footer class="bg-slate-950 text-slate-400 py-12 border-t border-slate-800 text-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                
                <div class="space-y-4 md:col-span-1">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-brand-600 flex items-center justify-center text-white font-bold">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <span class="text-xl font-extrabold text-white">ServiTech</span>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Líderes en servicio técnico especializado, reparación de hardware y mantenimiento de sistemas para hogares y corporativos.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-4 text-xs uppercase tracking-wider">Servicios</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#servicios" class="hover:text-brand-400 transition">Reparación de Laptop</a></li>
                        <li><a href="#servicios" class="hover:text-brand-400 transition">Cambio de Pantallas</a></li>
                        <li><a href="#servicios" class="hover:text-brand-400 transition">Mantenimiento Térmico</a></li>
                        <li><a href="#servicios" class="hover:text-brand-400 transition">Redes e Infraestructura</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-4 text-xs uppercase tracking-wider">Enlaces Rápidos</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#inicio" class="hover:text-brand-400 transition">Inicio</a></li>
                        <li><a href="#rastreo" class="hover:text-brand-400 transition">Consulta Tu Orden</a></li>
                        <li><a href="#cotizador" class="hover:text-brand-400 transition">Cotizador en Línea</a></li>
                        <li><a href="#reservar" class="hover:text-brand-400 transition">Agendar Cita</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-4 text-xs uppercase tracking-wider">Síguenos</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-brand-400 hover:border-brand-500 transition">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-brand-400 hover:border-brand-500 transition">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-brand-400 hover:border-brand-500 transition">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="pt-8 border-t border-slate-800 text-center text-xs text-slate-500 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>&copy; 2026 ServiTech Inc. Todos los derechos reservados.</p>
                <p class="flex gap-4">
                    <a href="#" class="hover:underline">Política de Privacidad</a>
                    <a href="#" class="hover:underline">Términos del Servicio</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Modal de Notificación Personalizado (Reemplazo seguro de alert) -->
    <div id="customModal" class="fixed inset-0 bg-slate-950/70 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 sm:p-8 max-w-md w-full border border-gray-200 dark:border-slate-700 shadow-2xl text-center space-y-4 transform transition-all scale-95 opacity-0" id="modalCard">
            <div id="modalIcon" class="w-16 h-16 rounded-2xl bg-emerald-100 text-emerald-600 dark:bg-emerald-950/60 dark:text-emerald-400 flex items-center justify-center text-3xl mx-auto">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <h3 id="modalTitle" class="text-xl font-extrabold text-gray-900 dark:text-white">¡Solicitud Enviada!</h3>
            <p id="modalMessage" class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                Hemos recibido tu solicitud de cita. Nuestro equipo técnico se comunicará contigo pronto.
            </p>
            <button onclick="closeModal()" class="w-full py-3 bg-brand-600 text-white font-bold rounded-xl hover:bg-brand-700 transition text-sm">
                Aceptar
            </button>
        </div>
    </div>

    <!-- Script principal de comportamiento -->
    <script>
        // 1. Alternancia de Modo Oscuro (Dark Mode)
        const themeToggleBtn = document.getElementById('themeToggle');
        const themeToggleMobileBtn = document.getElementById('themeToggleMobile');

        function toggleDarkMode() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }

        // Cargar preferencia del sistema o localStorage
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        themeToggleBtn.addEventListener('click', toggleDarkMode);
        themeToggleMobileBtn.addEventListener('click', toggleDarkMode);

        // 2. Menú Móvil
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // 3. Rastreador de Ordenes (Simulador de Estado)
        const orderDatabase = {
            'ST-2026-894': {
                device: 'Laptop Asus ZenBook UX425',
                date: '06 Oct, 2026',
                step: 3, // 1 to 4
                statusText: 'En Proceso de Reparación',
                statusColor: 'text-emerald-400',
                progressWidth: '66%',
                comment: 'Se realizó sustitución de módulo de batería y mantenimiento del disipador térmico. Ejecutando tests de estabilidad.'
            },
            'ST-2026-102': {
                device: 'iPhone 13 Pro 128GB',
                date: '07 Oct, 2026',
                step: 4,
                statusText: 'Listo para Entrega',
                statusColor: 'text-brand-400',
                progressWidth: '100%',
                comment: 'Reemplazo de pantalla Super Retina OLED finalizado con éxito. Listo para retiro en caja principal.'
            }
        };

        function setDemoCode(code) {
            document.getElementById('orderInput').value = code;
            searchOrder(code);
        }

        document.getElementById('trackerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const code = document.getElementById('orderInput').value.trim().toUpperCase();
            searchOrder(code);
        });

        function searchOrder(code) {
            const trackerResult = document.getElementById('trackerResult');
            const data = orderDatabase[code];

            trackerResult.classList.remove('hidden');

            if (data) {
                document.getElementById('resultId').textContent = code;
                document.getElementById('resultDevice').textContent = data.device;
                document.getElementById('resultDate').textContent = data.date;
                document.getElementById('resultStatusDetail').innerHTML = `Estado Actual: <span class="${data.statusColor} font-semibold">${data.statusText}</span>`;
                document.getElementById('resultComment').textContent = data.comment;
                document.getElementById('statusProgressLine').style.width = data.progressWidth;
            } else {
                // Caso cuando la orden es ficticia
                document.getElementById('resultId').textContent = code;
                document.getElementById('resultDevice').textContent = 'Equipo en Diagnóstico';
                document.getElementById('resultDate').textContent = 'Hoy';
                document.getElementById('resultStatusDetail').innerHTML = `Estado Actual: <span class="text-amber-400 font-semibold">En Inspección Inicial</span>`;
                document.getElementById('resultComment').textContent = 'El equipo ha sido recepcionado en taller. El técnico asignado iniciará las pruebas de voltajes e inspección física pronto.';
                document.getElementById('statusProgressLine').style.width = '25%';
            }
        }

        // 4. Cotizador Interactivo
        let selectedDeviceFactor = 1.0;

        function selectDevice(buttonEl) {
            document.querySelectorAll('.calc-device').forEach(btn => {
                btn.className = 'calc-device p-3 rounded-2xl border-2 border-gray-200 dark:border-slate-700 text-gray-600 dark:text-gray-300 flex flex-col items-center gap-2 hover:border-brand-300 transition';
            });
            buttonEl.className = 'calc-device p-3 rounded-2xl border-2 border-brand-500 bg-brand-50/50 dark:bg-brand-900/20 text-brand-600 dark:text-brand-400 flex flex-col items-center gap-2 transition';

            const dev = buttonEl.getAttribute('data-device');
            if (dev === 'laptop') selectedDeviceFactor = 1.0;
            if (dev === 'pc') selectedDeviceFactor = 0.9;
            if (dev === 'phone') selectedDeviceFactor = 0.85;

            calculateQuote();
        }

        function calculateQuote() {
            const baseIssuePrice = parseFloat(document.getElementById('issueSelect').value);
            const selectedServiceRadio = document.querySelector('input[name="serviceType"]:checked');
            const extraDelivery = selectedServiceRadio ? parseFloat(selectedServiceRadio.value) : 0;

            const finalPrice = Math.round((baseIssuePrice * selectedDeviceFactor) + extraDelivery);
            document.getElementById('estimatedCost').textContent = `$${finalPrice}`;

            if (baseIssuePrice > 120) {
                document.getElementById('estimatedTime').textContent = '48 a 72 Horas';
            } else {
                document.getElementById('estimatedTime').textContent = '24 a 48 Horas';
            }
        }

        // 5. Acordeón de FAQ
        function toggleFaq(btn) {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('i');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // 6. Manejo del Formulario de Reserva (Modal)
        function handleBooking(event) {
            event.preventDefault();
            const name = document.getElementById('clientName').value;
            
            showModal(
                '¡Cita Registrada!',
                `Gracias ${name}, hemos guardado tu solicitud. Nos comunicaremos contigo en breve para confirmar el horario.`,
                'success'
            );
            document.getElementById('bookingForm').reset();
        }

        function showModal(title, message, type) {
            const modal = document.getElementById('customModal');
            const modalCard = document.getElementById('modalCard');
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalMessage').textContent = message;

            modal.classList.remove('hidden');
            setTimeout(() => {
                modalCard.classList.remove('scale-95', 'opacity-0');
                modalCard.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById('customModal');
            const modalCard = document.getElementById('modalCard');
            modalCard.classList.remove('scale-100', 'opacity-100');
            modalCard.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 200);
        }

        // Establecer fecha mínima por defecto en el calendario (hoy)
        const dateInput = document.getElementById('preferredDate');
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.min = today;
            dateInput.value = today;
        }
    </script>
</body>
</html>