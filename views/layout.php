<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Procode Innovations</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="Sitio web de Procode Innovations GT">
        <meta name="keywords" content="tecnologia, programacion, paginas, web, aplicaciones">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="https://vcardsgt.com">

        <meta property="og:title" content="Procode Innovations">
        <meta property="og:description" content="Sitio web de Procode Innovations GT">
        <meta property="og:image" content="https://vcardsgt.com/images/v_logo.jpeg">
        <meta property="og:url" content="https://vcardsgt.com">
        <meta property="og:type" content="website">
        <meta property="og:image:width" content="600">
        <meta property="og:image:height" content="315">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Procode Innovations">
        <meta name="twitter:description" content="Sitio web de Procode Innovations GT">
        <meta name="twitter:image" content="https://vcardsgt.com/images/v_logo.jpeg">
        <meta name="twitter:url" content="https://vcardsgt.com">

        <meta http-equiv="Content-Language" content="es">

        <meta content="" name="description">

        <meta name="author" content="Abner Daniel Fuentes Juárez">


        <!-- Favicon -->
        <link href="images/v_logo.jpeg" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="stylesheet" href="<?= asset('build/css/styles.css') ?>">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex flex-column align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
            <p>Procode Innovations</p>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid py-2 d-none d-lg-flex">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div>
                        <small class="me-3"><i class="fa fa-clock me-2"></i><span id="time"></span></small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Brand Start -->
        <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
            <div class="container pb-2">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex">
                        <i class="bi bi-whatsapp fs-2 me-2"></i>
                        <i class="bi bi-telephone-inbound fs-2"></i>
                        <div class="ms-3">
                            <h5 class="text-white mb-0">Llamanos o escribenos</h5>
                            <span>+502 5589 5941</span>
                        </div>
                    </div>

                    <a href="/" class="h1 text-white text-decoration-none mb-0"><img src="/images/v_logo.jpeg" alt=""
                            width="65px">Procode
                        Innovations</a>
                    <div class="d-flex">
                        <i class="bi bi-envelope fs-2"></i>
                        <div class="ms-3">
                            <h5 class="text-white mb-0">Escribenos</h5>
                            <span>web@vcardsgt.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->


        <!-- Navbar Start -->
        <div class="container-fluid sticky-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                    <a href="/" class="navbar-brand d-lg-none d-flex">
                        <img src="/images/v_logo.jpeg" alt="" width="35px" class="me-2">
                        <h1 class="text-primary m-0">Procode</h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="/" class="nav-item nav-link">Inicio</a>
                            <a href="/mision-vision" class="nav-item nav-link">Misión y Visión</a>
                            <a href="/quienes-somos" class="nav-item nav-link">Quienes somos</a>
                            <a href="/servicios" class="nav-item nav-link">Servicios</a>
                            <a href="/contacto" class="nav-item nav-link">Contáctenos</a>
                        </div>
                        <div class="ms-auto d-none d-lg-flex">
                            <!-- <a class="btn btn-sm-square btn-primary ms-2" target="_blank" aria-label="Enlace a Facebook"
                                href="https://www.facebook.com/profile.php?id=100069030525794"><i
                                    class="fab fa-facebook-f"></i><span class="d-none">Enlace a Facebook</span></a> -->
                            <!-- <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <?= $contenido ?>

        <!-- Footer Start -->
        <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow animate__animated animate__fadeIn"
            data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5 py-5">
                    <div class="col-lg-12 pe-lg-5">
                        <a href="/" class="navbar-brand">
                            <h1 class="h1 text-white mb-0">Procode Innovations</h1>
                        </a>
                        <p class="fs-5 mb-4">Conectamos tus ideas al mundo digital</p>

                        <p><a class="text-decoration-none text-white-50" href="tel:+50255895941"><i
                                    class="fa fa-phone-alt me-2"></i>+502 55895941</p></a>
                        <p><a class="text-decoration-none text-white-50"
                                href="https://wa.me/50255895941?text=Hola,%20quiero%20más%20información"><i
                                    class="fa fa-whatsapp me-2"></i>+502 55895941</p></a>
                        <p><a class="text-decoration-none text-white-50" href="mailto:web@vcardsgt.com"><i
                                    class="fa fa-envelope me-2"></i>web@vcardsgt.com</p></a>
                        <div class="d-flex mt-4">
                            <!-- <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a> -->
                            <!-- <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a> -->
                            <!-- <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark text-white-50 py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-0 text-center">&copy; Procode Innovations GT <?= date('Y') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top d-flex align-items-center"
            aria-label="Subir en la página"><i class="fas fa-arrow-up"></i><span class="d-none">Subir</span></a>


        <!-- JavaScript Libraries -->
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script defer src="https://kit.fontawesome.com/0ac58cc75c.js"></script>
        <!-- Template Javascript -->
        <script src="<?= asset('./build/js/app.js') ?>"></script>
        <script src="<?= asset('./build/js/main.js') ?>"></script>
    </body>

</html>