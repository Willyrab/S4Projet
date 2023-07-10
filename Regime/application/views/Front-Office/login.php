<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min2.css') ?>">

  <!-- Style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">

  <title>Login #3</title>
</head>

<body>


  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image:url('<?php echo base_url('assets/img/bd_3.jpg') ?>')"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
                <h3><strong>Connectez</strong>-vous</h3>
                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="<?php echo base_url('Front-Office/LoginController/signin') ?>" method="post">
                <div class="form-group first">
                  <label for="username">Utilisateur</label>
                  <input type="text" class="form-control" placeholder="Votre-email@gmail.com" name="email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Mot de passe</label>
                  <input type="password" class="form-control" placeholder="Votre mot de passe" id="mdp">
                </div>

                <div class="d-sm-flex mb-5 align-items-center">

                  <span class="ml-auto"><a href="<?php echo site_url('Front-Office/LoginController/showInscription') ?>" class="forgot-pass">Vous n'avez pas de compte?</a></span>
                </div>

                <input type="submit" value="Se Connecter" class="btn btn-block btn-primary">

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