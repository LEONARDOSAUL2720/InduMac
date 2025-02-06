<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InduMac</title>
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/welcome.css">
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

    <div class="carousel-container">
        <div id="catalogCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <img src="img/Panasonic.jpg" class="d-block carousel-img" alt="Panasonic">
                        <img src="img/Universal.jpg" class="d-block carousel-img" alt="Universal">
                        <img src="img/Fuji.jpg" class="d-block carousel-img" alt="Fuji">
                    </div>
                </div>
                <!-- Más elementos del carrusel si es necesario -->
            </div>
            <a class="carousel-control-prev" href="#catalogCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#catalogCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carouselImages = document.querySelectorAll('.carousel-img');

            carouselImages.forEach(img => {
                img.addEventListener('click', function() {
                    const brand = img.alt;
                    const infoDisplay = document.getElementById('infoDisplay');
                    let infoContent = '';

                    switch (brand) {
                        case 'Panasonic':
                            infoContent = `
                                <h2>Modelos de máquinas industriales Panasonic:</h2>
                                <ul>
                                    <li><strong>Panasonic NPM-W2:</strong> <a href="https://connect.na.panasonic.com/smart-factory/electronics-assembly/smt/npm-w2-versatile-platform">Ver más detalles</a></li>
                                    <li><strong>Panasonic NPM-D3:</strong> <a href="https://industrial.panasonic.com/kr/products/pt/mounting-related/npm-d3">Ver más detalles</a></li>
                                    <li><strong>Panasonic CM602:</strong> <a href="https://cnsmtline.com/products/panasonic-cm602-smd-machine/">Ver más detalles</a></li>
                                </ul>
                            `;
                            break;
                        case 'Universal':
                            infoContent = `
                                <h2>Modelos de máquinas industriales Universal:</h2>
                                <ul>
                                    <li><strong>Universal Genesis GX-11S</strong></li>
                                    <li><strong>Universal Advantis AC-30L</strong></li>
                                    <li><strong>Universal Fuzion SC-2</strong></li>
                                </ul>
                            `;
                            break;
                        case 'Fuji':
                            infoContent = `
                                <h2>Modelos de máquinas industriales Fuji:</h2>
                                <ul>
                                    <li><strong>Fuji NXT III:</strong> <a href="https://www.fuji.co.jp/en/products/lineup/smt/nxt3/">Ver más detalles</a></li>
                                    <li><strong>Fuji AIMEX III:</strong> <a href="https://www.fuji.co.jp/en/products/lineup/smt/aimex3/">Ver más detalles</a></li>
                                    <li><strong>Fuji XPF-W:</strong> <a href="https://www.fuji.co.jp/en/products/lineup/smt/xpfw/">Ver más detalles</a></li>
                                </ul>
                            `;
                            break;
                        default:
                            infoContent = '<p>No hay información disponible para esta marca.</p>';
                            break;
                    }

                    infoDisplay.innerHTML = infoContent;
                });
            });
        });
    </script>

</body>
</html>
