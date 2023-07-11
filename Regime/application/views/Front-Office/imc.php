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

</head>

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
                </i></a>
            <a href="<?php echo site_url('Front-Office/MySession/logout') ?>" class="nav-item nav-link">Se deconnecter</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<section class="container mt-5">
    <form class="form-container">
        <h2 class="my-3">Calculer votre IMC: </h2>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Entrer votre poids en kg: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control poids" id="numero" name="numero">

            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label">Entrer votre taille en metre: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control taille" id="intitule" name="intitule">
            </div>
        </div>

        <div class="mt-4 mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button class="btn btn-primary w-100" name="">calculer</button>
            </div>
        </div>

        <div class="res text-center display-4 fw-bold">0</div>
        <p class="text-center"><strong style="color: red;">En attente du résultat...</strong></p>
    </form>
    </form>

</section>


<script src="<?php echo base_url('assets/js/imc.js') ?>"></script>
</body>

</html>