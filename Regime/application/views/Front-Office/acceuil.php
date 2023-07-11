<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CakeZone - Cake Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/css/acceuil.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>andrianirinawilly@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white"><i class="far fa-calendar-alt  fs-1 text-dark me-3"></i>Meal Plan</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>032 80 361 12</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="<?php echo site_url('Front-Office/AccueilController/show_accueil') ?>" class="nav-item nav-link active">Home</a>
                <a href="<?php echo site_url('Front-Office/Regime_controller/show_regime') ?>" class="nav-item nav-link">Regime</a>
                <a href="<?php echo site_url('Front-Office/MonnaieController/show_monnaie') ?>" class="nav-item nav-link">Porte Monnaie</a>
                <a href="<?php echo site_url('Front-Office/ProfilController/show_completion') ?>" class="nav-item nav-link">Information de Santé</a>

                <a href="<?php echo site_url('Front-Office/IMC_controller/show_imc') ?>" class="nav-item nav-link">Voir votre IMC</a>
                <a href="<?php echo site_url('Front-Office/ProfilController/show_profil') ?>" class="nav-item nav-link"><i class="fas fa-user white-icon"></i>
                    <a href="<?php echo site_url('Front-Office/MySession/logout') ?>" class="nav-item nav-link">Se deconnecter</a>
                    </i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="font-secondary text-primary mb-4">Meal Plan</h1>
                    <h1 class="display-1 text-uppercase text-white mb-4">Regime Alimentaire</h1>

                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="" class="btn btn-primary border-inner py-3 px-5 me-5">Read More</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Qui sommes-nous?</h2>
                <h1 class="display-4 text-uppercase">Bienvenue sur Meal Plan</h1>
            </div>
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="<?php echo base_url('assets/img/bd_1.jpg') ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pb-5">
                    <h4 class="mb-4">Trouvez l'équilibre parfait pour une vie saine et énergisante</h4>
                    <p class="mb-5">Vous cherchez à adopter un mode de vie plus sain ou à atteindre vos objectifs de bien-être ? Vous êtes au bon endroit ! Notre site est conçu pour vous accompagner dans votre parcours vers un régime alimentaire équilibré et adapté à vos besoins.

                        Que vous souhaitiez perdre du poids, maintenir une alimentation équilibrée ou explorer de nouvelles options nutritionnelles, notre plateforme vous offre des ressources précieuses et des conseils pratiques pour vous aider à prendre des décisions éclairées.

                        Découvrez des recettes délicieuses et nutritives, des plans de repas personnalisés, des conseils d'experts en nutrition et bien plus encore. Nous croyons en l'importance d'une alimentation saine et nous sommes là pour vous soutenir à chaque étape de votre parcours.

                        Prenez le contrôle de votre alimentation, adoptez de saines habitudes et ressentez les bienfaits d'un régime alimentaire équilibré. Explorez notre site et laissez-nous vous guider vers une vie plus saine et plus heureuse.

                        Bienvenue dans notre communauté dédiée au bien-être et à la nutrition !</p>
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-heartbeat fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">100% sain</h4>
                            <p class="mb-0">"Explorez notre sélection de recettes et de produits pour un régime alimentaire 100% sain, afin de vous aider à atteindre vos objectifs de bien-être et de vitalité."</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center justify-content-center bg-primary border-inner mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-award fa-2x text-white"></i>
                            </div>
                            <h4 class="text-uppercase">Récompensé</h4>
                            <p class="mb-0">"Découvrez notre programme de régime alimentaire primé, reconnu pour son efficacité et sa qualité exceptionnelle."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->










    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Testimonial</h2>
                <h1 class="display-4 text-uppercase">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="<?php echo base_url('assets/img/P2.jpg') ?>" style="width: 100px; height: 120px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Client Name</h4>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">"Cette application a révolutionné ma façon de gérer mon régime alimentaire en me fournissant des outils puissants pour planifier mes repas, suivre ma progression et rester motivé dans ma quête d'une vie plus saine."
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="<?php echo base_url('assets/img/P3.jpg') ?>" style="width: 100px; height: 120px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Client Name</h4>

                        </div>
                    </div>
                    <p class="mb-0">"Je suis impressionné par la convivialité et la simplicité de cette application qui m'a permis de calculer rapidement mon IMC et de visualiser ma progression au fil du temps, ce qui a été essentiel pour maintenir ma motivation et atteindre mes objectifs de poids."
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="<?php echo base_url('assets/img/P4.jpg') ?>" style="width: 100px; height: 120px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Client Name</h4>

                        </div>
                    </div>
                    <p class="mb-0">"Nous sommes extrêmement reconnaissants envers l'équipe de développement pour cette application exceptionnelle qui nous a permis de facilement gérer notre régime alimentaire, de suivre notre poids et de calculer notre IMC, contribuant ainsi à notre bien-être et à l'atteinte de nos objectifs de santé."
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="<?php echo base_url('assets/img/P5.jpg') ?>" style="width: 100px; height: 120px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Client Name</h4>

                        </div>
                    </div>
                    <p class="mb-0">"Grâce à cette application, j'ai pu adopter de meilleures habitudes alimentaires et améliorer ma santé globale. La possibilité de suivre mon poids, de recevoir des recommandations personnalisées et de consulter des conseils nutritionnels précieux a fait de cette application un allié essentiel dans ma quête d'un mode de vie équilibré."
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-img text-secondary" style="margin-top: 90px">
        <div class="container">

            <div class="container-fluid text-secondary py-4" style="background: #111111;">
                <div class="container text-center">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                    <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">Willy</a>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/counterup/counterup.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>