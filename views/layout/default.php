<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="https://kit.fontawesome.com/811c866c3a.js" crossorigin="anonymous"></script>
    <script defer src="../../assets/js/script.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg z-index-2 position-absolute w-100">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                    aria-controls="offcanvasDarkNavbar" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close">
                        </button>
                    </div>
                    <div class="offcanvas-body align-items-center justify-content-between text-uppercase">
                        <a class="navbar-brand" href="/"><img class="img-logo" src="../../assets/img/logo.png" alt="logo"></a>
                        <ul class="navbar-nav text-white">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">l'équipe</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">les activités</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/presentation/cycling">le cycling</a></li>
                                    <li><a class="dropdown-item" href="/presentation/fonctionnalTraining">le training fonctionnel</a></li>
                                    <li><a class="dropdown-item" href="/presentation/crossfit">le crossfit</a></li>
                                    <li><a class="dropdown-item" href="/presentation/personnalTraining">personnal training - coach personnel</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">nos offres</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">planning</a></li>
                            <li class="nav-item"><a class="nav-link" href="/articles">le blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="/main/contact">contact</a></li>
                        </ul>
                        <div>
                            <a class="nav-link" href=""><i class="fa-solid fa-mobile-screen-button"></i>05 59 47 84 18</a>
                        </div>
                        
                        <ul class="navbar-nav justify-content-center flex-row">
                            <li class="nav-item p-2"><a class="nav-link" href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li class="nav-item p-2"><a class="nav-link" href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="nav-item p-2"><a class="nav-link" href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <?php if(strpos($_SERVER['REQUEST_URI'], 'contact')) : ?>
            <div>
                <img src="../../assets/img/visuel/visuel_2.jpg" class="w-100" alt="">
            </div>
        <?php elseif(strpos($_SERVER['SCRIPT_FILENAME'], 'presentation')) : ?>
            <div>
                <img src="../../assets/img/visuel/visuel_3.jpg" class="w-100" alt="">
            </div>
        <?php else : ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators mt-5 z-index-1">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active"> 
                            <img src="../../assets/img/slider/slide_1.jpg" class="img-slider" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="mb-sm-02 mb-lg-6">2 inscriptions simultanées = un 3<span class="align-text-top fs-sm-8 fs-lg-6">ème</span> abonnement de 6 mois
                                    offert !</p>
                                    <a class="btn btn-outline-light fs-sm-8 fs-lg-6" href="#">plus d'info</a>
                            </div>
                            <!-- <div class="text-uppercase text-light position-absolute w-100 text-center top-50 start-50 translate-middle-x fs-sm-7 fs-lg-4">
                                <p class="mb-sm-02 mb-lg-6">2 inscriptions simultanées = un 3<span class="align-text-top fs-sm-8 fs-lg-6">ème</span> abonnement de 6 mois
                                    offert !</p>
                                <a class="btn btn-outline-light fs-sm-8 fs-lg-6" href="#">plus d'info</a>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/img/slider/slide_2.jpg" class="img-slider" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/img/slider/slide_3.jpg" class="img-slider" alt="...">
                        </div>
                    </div>
                </div>
        <?php endif; ?>
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer class="bg-dark">
        <div class="container-fluid g-0">
            <div class="row row-col-3 row-cols-sm-3 row-cols-lg-6 g-0 position-relative">
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="../../assets/img/coach/coach_1.jpg" class="w-100" alt="">
                    <div class="position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="../../assets/img/coach/coach_2.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="../../assets/img/coach/coach_3.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="../../assets/img/coach/coach_1.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="../../assets/img/coach/coach_2.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="../../assets/img/coach/coach_3.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-5 position-absolute top-50 start-50 translate-middle text-center social-link">
                    <a href="" class="btn btn-light rounded-0 text-uppercase fw-bold">@studiobiarritz</a>
                </div>
            </div>
        </div>
        <div class="container pt-5 pb-5">
            <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 align-items-center">
                <div class="col-3 col-sm-3 col-lg-3 text-light">
                    <img src="../../assets/img/logo_footer.png" class="d-inline-block me-4" alt="">
                    <h5 class="d-inline-block text-uppercase fw-bolder">à propos</h5>
                    <p class="m-0">2018 Studio Sport Biarritz</p>
                    <p class="m-0">Salle de sport, de fitness et de crossfit à biarritz Pays basques.</p>
                    <p class="m-0">RCS : 000 000 000</p>
                    <a class="text-decoration-underline text-white" href="#">Mentions légales</a>
                </div>
                <div class="col-3 col-sm-3 col-lg-3 text-light fw-bolder">
                    <h5 class="text-uppercase fw-bolder">studio sport corporate</h5>
                    <a class="d-block footer-link" href="">Studio Center : créez votre studio</a>
                    <a class="d-block footer-link" href="">Offres Spéciales C.E.</a>
                    <a class="d-block footer-link" href="">Devenir partenaire</a>
                </div>
                <div class="col-6 col-sm-6 col-lg-6 text-light fw-bolder">
                    <h5 class="text-uppercase fw-bolder">fitness, crossfit et training au pays basque</h5>
                    <a class="footer-link" href="#">Coach personnel de sport à Biarritz</a>,
                    <a class="footer-link" href="#">Coach personnel de sport à Anglet</a>,
                    <a class="footer-link" href="#">Salle de sport BAB</a>,
                    <a class="footer-link" href="#">Fitness à Biarritz</a>,
                    <a class="footer-link" href="#">Sessions de fitness à Anglet</a>,
                    <a class="footer-link" href="#">Fitness sur le BAB</a>,
                    <a class="footer-link" href="#">Autre mot-clé+ville</a>,
                    <a class="footer-link" href="#">Autre mot-clé+ville</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-black text-light p-4 d-flex justify-content-center align-items-center">
            <p class="mw-lg-10 text-end mb-0 me-2">Un site créé par <span class="text-uppercase fw-bold">l'agence 364 com'</span></p>
            <img src="../../assets/img/364.png" alt="">
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>