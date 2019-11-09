<?php
require('utils/db.php');
require('utils/config.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $config['title'] ?></title>
    <link rel="stylesheet" href="assets/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/css/style.css">
    <link rel="stylesheet" href="assets/style/css/all.min.css">
</head>

<nav class="navbar navbar-light navbar-expand-lg social-navbar ">
    <div class="container">
        <a class="navbar-brand" href="tel:<?php echo $infos['phone'] ?>">Tél : <?php echo $infos['phone'] ?></a>
        <div class="d-flex flex-row order-2 order-lg-3">
            <ul class="navbar-nav flex-row">
                <li class="nav-item"><a class="nav-link px-2" href="<?php echo $infos['fb'] ?>"><span class="fab fa-facebook-f"></span></a></li>
                <li class="nav-item"><a class="nav-link px-2" href="<?php echo $infos['insta'] ?>"><span class="fab fa-instagram"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-light bg-light menu-navbar">
    <div class="container">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="//codeply.com">Tarifs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galerie</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand mx-auto" href="#"><img class="logo" src="<?php echo $infos['logoImg'] ?>" /></a>
            <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>