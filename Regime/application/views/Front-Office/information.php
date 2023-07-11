<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?> ">

  <!-- Style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/acceuil.css') ?>">

  <title>Login #3</title>
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


  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image:url('<?php echo base_url('assets/img/bd_3.jpg') ?>')"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
                <h3>Votre<strong> Profil</strong></h3>
                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <?php foreach ($profils as $profil) { ?>
                <div class="form-group first">
                  <label class="label">Utilisateur</label>
                  <div class="form-control d-flex align-items-center"><?php echo $profil['prenom']; ?></div>
                </div>
                <div class="form-group last mb-3">
                  <label class="label">Genre</label>
                  <div class="form-control d-flex align-items-center"><?php echo $profil['nom'] ?></div>
                </div>
                <div class="form-group last mb-3">
                  <label class="label">Taille(m)</label>
                  <div class="form-control d-flex align-items-center"><?php echo $profil['taille'] ?></div>
                </div>
                <div class="form-group last mb-3">
                  <label class="label">Poids(kg)</label>
                  <div class="form-control d-flex align-items-center"><?php echo $profil['poids'] ?></div>
                </div>

              <?php } ?>





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