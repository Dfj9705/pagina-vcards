<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow animate__animated animate__fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Galeria</h1>
    </div>
</div>
<!-- Page Header End -->
<div class="container-fluid container-service py-5">
    <div class="container py-5">
        <div class="row">
            <?php foreach ($montajes as $montaje): ?>
                <div class="col-md-4">
                    <div class="card wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                        <div id="carouselExampleIndicators<?= $montaje->id ?>" class="carousel slide"
                            data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <?php foreach ($montaje->fotos as $key => $foto): ?>
                                    <button type="button" data-bs-target="#carouselExampleIndicators<?= $montaje->id ?>"
                                        data-bs-slide-to="<?= $key ?>" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php foreach ($montaje->fotos as $key => $foto): ?>
                                    <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
                                        <img src="<?= $_ENV['MONTAJES_URL'] . $foto ?>" class="d-block w-100" alt="...">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators<?= $montaje->id ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators<?= $montaje->id ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $montaje->titulo ?>
                            </h5>
                            <p><span class="badge bg-primary"><?= $montaje->tipo_servicio->nombre ?></span></p>
                            <p class="card-text">
                                <?= $montaje->descripcion ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>