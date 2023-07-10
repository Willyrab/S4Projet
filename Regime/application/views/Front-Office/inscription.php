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
  <link rel="stylesheet" href="<?php echo base_url('assets/css/inscription.css') ?>">

  <title>Login #2</title>
</head>

<body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image:url('<?php echo base_url('assets/img/bd_2.jpg') ?>')"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Inscrivez-Vous</h3>

            <form action="<?php echo base_url('Front-Office/LoginController/signup') ?>" method="post">
              <div class="form-group first">

                <input type="text" class="form-control" placeholder="Votre Nom" name="nom">
              </div>
              <div class="form-group last mb-3">

                <input type="text" class="form-control" placeholder="Votre prenom" name="prenom">
              </div>
              <div class="form-group last mb-3">

                <input type="date" class="form-control" placeholder="Date de naissance" name="datedenaissance">
              </div>
              <div class="form-group last mb-3">

                <input type="text" class="form-control" placeholder="Adresse" name="adresse">
              </div>
              <div class="form-group last mb-3">

                <input type="text" class="form-control" placeholder="Ville" name="ville">
              </div>
              <div class="form-group last mb-3">

                <input type="tel" class="form-control" placeholder="Telephone" name="telephone">
              </div>
              <div class="form-group last mb-3">

                <input type="email" class="form-control" placeholder="Votre-email@gmail.com" name="email">
              </div>

              <div class="form-group last mb-3">

                <select type="" class="form-control" placeholder="" name="genre">

                  <?php foreach ($genres as $genre) { ?>
                    <option value="<?php echo $genre['id'] ?>" name="genre"><?php echo $genre['nom'] ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group last mb-3">

                <input type="password" class="form-control" placeholder="Votre mot de passe" name="mdp">
              </div>
              <div class="d-flex mb-5 align-items-center">

                <span class="ml-auto"><a href="<?php echo site_url('LoginController/showLogin') ?>" class="forgot-pass">Vous avez un compte!</a></span>
              </div>

              <input type="submit" value="Enregistrer" class="btn btn-block btn-primary">

            </form>
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