<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow animate__animated animate__fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Cotizador</h1>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow animate__animated animate__fadeIn" data-wow-delay="0.1s"
            style="max-width: 600px;">
            <h1 class="display-6 mb-3">Cotiza tu servicio con nosotros</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <div class="col-lg-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                <form id="formCotizador" method="post" class="needs-validation" novalidate>
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Su Nombre"
                                    required>
                                <label for="name">Su Nombre <span class="text-danger">*</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" name="phone" id="phone" required
                                    placeholder="Su Teléfono">
                                <label for="phone">Su Teléfono <span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" required
                                    placeholder="Su Email">
                                <label for="email">Su Email <span class="text-danger">*</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" id="service" name="service" required>
                                    <option value="" selected disabled>Seleccione un Servicio</option>
                                    <?php foreach ($tipos as $tipo): ?>
                                        <option value="<?php echo $tipo->id; ?>"><?php echo $tipo->nombre; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="service">Tipo de Servicio <span class="text-danger">*</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="datetime-local" class="form-control" name="datetime" id="datetime" required
                                    placeholder="Su Email">
                                <label for="datetime">Fecha y Hora <span class="text-danger">*</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Introduzca su mensaje aqui"
                                    name="observations" id="observations" style="height: 200px"></textarea>
                                <label for="observations">Observaciones</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <label for="imagenes">Imagenes de referencia</label>
                        <input id="imagenes" type="file" name="imagenes[]" multiple accept="image/*">

                    </div>
                    <div class="row justify-content-center text-center mt-3 p-auto mb-3">
                        <div id="captcha" class="col">
                            <div class="g-recaptcha w-100" data-sitekey="<?php echo $_ENV['RECAPTCHA_SITE_KEY']; ?>"
                                data-size="normal" data-callback="verificar" data-expired-callback="expirado"
                                data-error-callback="error"></div>

                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary py-3 px-5 w-100" type="submit" id="btnEnviar">Cotizar <span
                                id="spanLoader" class="spinner-border spinner-border-sm ms-2"
                                aria-hidden="true"></span></button>
                    </div>
            </div>
            </form>
        </div>

    </div>
</div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="./build/js/pages/cotizador.js"></script>