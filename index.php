<?php
/**
 * Created by PhpStorm.
 * User: Yevgeniy Bespal
 * Date: 14/11/2017
 * Time: 22:41
 */
require_once("includes/config.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!-- Boorstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Login Style -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title><?php $config['title'] ?></title>
</head>
<body>
<div id="wrapper">
    <?php include("includes/header.php") ?>
    <?php include("includes/social-bar.php") ?>
    <div id="content" class="container-fluid">
        <div class="design-block container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="img/massive-mail.png" alt="Correo Masivo" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>Envio de correos fácil</h3>
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Accusamus aliquam deleniti dicta esse et,
                        facilis incidunt ipsam iste libero magnam molestias non numquam quasi qui sit
                        suscipit tenetur ut veniam? Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Accusamus aliquam deleniti dicta esse et,
                        facilis incidunt ipsam iste libero magnam molestias non numquam quasi qui sit
                        suscipit tenetur ut veniam?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h3>Gestion eficiente de personas</h3>
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Accusamus aliquam deleniti dicta esse et,
                        facilis incidunt ipsam iste libero magnam molestias non numquam quasi qui sit
                        suscipit tenetur ut veniam? Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Accusamus aliquam deleniti dicta esse et,
                        facilis incidunt ipsam iste libero magnam molestias non numquam quasi qui sit
                        suscipit tenetur ut veniam?</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="img/massive-mail.png" alt="Correo Masivo" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>
<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- JQuerry -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<!-- My includes -->
<script src="js/motor.js"></script>
</body>
</html>
