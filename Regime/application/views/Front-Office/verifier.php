<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css2/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min2.css') ?>">


  <!-- Style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/completion.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/acceuil.css') ?>">
  <!-- Style -->


  <title>Monnaie</title>
</head>

<body>


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
  <div class="d-md-flex half">
    <div class="bg" style="background-image:url('<?php echo base_url('assets/img/bd_7.jpg') ?>')"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3><strong>Vous pouvez maintenant consulter votre soldes</strong></h3>
                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="<?php echo base_url('Front-Office/MonnaieController/soldes') ?> " method="post">

                <input type="submit" value="Consulter" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>