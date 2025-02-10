<div class="carousel-container">
    <div id="catalogCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <img src="img/Panasonic.jpg" class="d-block carousel-img" alt="Panasonic">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="img/Universal.jpg" class="d-block carousel-img" alt="Universal">
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="img/Fuji/Fuji.png" class="d-block carousel-img" alt="Fuji">
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
