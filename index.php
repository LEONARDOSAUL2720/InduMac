<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InduMac</title>
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/welcome.css">
    <link rel="stylesheet" href="assets/css/carrusel.css"> <!-- Importar el nuevo CSS -->
    <!-- Font Awesome CSS desde CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="py-">
        <div class="header-container">
            <div class="header-left">
                <h1>InduMac</h1>
                <a href="login.php" class="btn btn-dark-custom">Iniciar Sesión</a>
            </div>
            <div class="welcome-text">Bienvenido a InduMac, tu solución integral en maquinaria industrial.</div>
            <div class="header-right">
                <img src="img/icono.jpg" class="img-header" alt="Icono">
            </div>
        </div>
    </header>
    <!-- Informacion de los primeros contenedores -->
    <div class="row info-container">
        <!-- Contenedor 1: Servicios de mantenimiento para maquinaria Panasonic -->
        <div class="col-md-10 mb-4">
            <div class="p-4 bg-light border rounded">
                <h2>Servicios de Mantenimiento para Maquinaria Panasonic</h2>
                <p>Ofrecemos servicios especializados en mantenimiento y reparación de maquinaria industrial Panasonic.
                    Con un equipo capacitado, aseguramos la prolongación de la vida útil de tus equipos y su rendimiento
                    óptimo.</p>
                <ul>
                    <li><strong>Reparación de Equipos:</strong> Diagnóstico y reparación de equipos defectuosos o
                        dañados.</li>
                    <li><strong>Mantenimiento Preventivo:</strong> Programas de mantenimiento preventivo para evitar
                        fallos imprevistos.</li>
                    <li><strong>Consultoría Técnica:</strong> Asesoría experta para optimizar el funcionamiento de tus
                        máquinas Panasonic.</li>
                </ul>
                <p><strong>Contáctanos para más detalles sobre nuestros servicios.</strong></p>
            </div>
        </div>

        <!-- Contenedor 2: Servicios de mantenimiento para maquinaria Universal -->
        <div class="col-md-5">
            <div class="p-4 bg-light border rounded">
                <h2>Servicios de Mantenimiento para Maquinaria Universal</h2>
                <p>Garantizamos el buen funcionamiento de tu maquinaria Universal a través de un mantenimiento integral,
                    incluyendo reparación, calibración y optimización de rendimiento.</p>
                <ul>
                    <li><strong>Reparaciones Especializadas:</strong> Técnicos certificados para reparaciones de equipos
                        Universal.</li>
                    <li><strong>Mantenimiento Correctivo:</strong> Identificación y solución de fallos mecánicos y
                        electrónicos.</li>
                    <li><strong>Recambios Originales:</strong> Uso exclusivo de repuestos originales para mantener la
                        calidad de tus equipos.</li>
                </ul>
                <p><strong>¡Asegura el máximo rendimiento de tu maquinaria Universal con nuestros servicios!</strong>
                </p>
            </div>
        </div>

        <!-- Contenedor 3: Servicios de mantenimiento para maquinaria Fuji -->
        <div class="col-md-5">
            <div class="p-4 bg-light border rounded">
                <h2>Servicios de Mantenimiento para Maquinaria Fuji</h2>
                <p>Los equipos Fuji son conocidos por su fiabilidad. Ofrecemos mantenimiento preventivo y correctivo
                    para asegurar que operen con la máxima eficiencia y sin interrupciones.</p>
                <ul>
                    <li><strong>Inspección y Diagnóstico:</strong> Análisis detallado de tus equipos Fuji para detectar
                        posibles fallos.</li>
                    <li><strong>Calibración de Máquinas:</strong> Ajustes y calibración para mejorar la precisión y
                        eficiencia.</li>
                    <li><strong>Servicios de Emergencia:</strong> Asistencia rápida para situaciones críticas de
                        maquinaria.</li>
                </ul>

                <p><strong>¡Mantén tus equipos Fuji en óptimas condiciones con nuestros servicios expertos!</strong></p>
            </div>
        </div>
    </div>

    <div class="text-center my-4">
        <h3>Selecciona una marca</h3>
    </div>

    <?php include 'carrusel.php'; ?> <!-- Incluir el nuevo archivo PHP -->

    <div id="infoDisplay" class="info-display container">
        <!-- Aquí se mostrará la información seleccionada -->
    </div>

    <footer class="py-4">
        <a href="https://wa.me/4191171675" target="_blank"><i class="fab fa-whatsapp"></i> 419-117-1675</a>
        <div>
            <a href="https://facebook.com/indumac" class="text-white">Facebook</a> |
            <a href="https://twitter.com/indumac" class="text-white">Twitter</a>
        </div>
    </footer>

    <!-- Bootstrap JS y dependencias desde CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
