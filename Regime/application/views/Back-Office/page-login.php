<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from mophy.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 22:09:57 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MOPHY : Payment Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:title" content="MOPHY : Payment Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:description" content="MOPHY : Payment Admin Dashboard  Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>MOPHY - Payment Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>images/favicon.png">
    <link href="<?php echo base_url(); ?>assets/css/styleBack.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h2 class="text-center mb-4 text-white">Authentification </h2>
                                    <form action="<?php echo base_url(); ?>Back-Office/login/authentificate" method="post">
                                        <p><span style="color: red;"><?php echo $message; ?></span></p>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Nom d' administrateur</strong></label>
                                            <input type="text" class="form-control" name="nom" value="administrator">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Mot de passe</strong></label>
                                            <input type="password" class="form-control" name="motDePasse" value="123abc">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>assets/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/deznav-init.js"></script>

</body>


<!-- Mirrored from mophy.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 22:09:58 GMT -->

</html>