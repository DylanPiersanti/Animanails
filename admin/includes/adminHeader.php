<?php
require('../utils/db.php');
require('../utils/config.php');
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: ./');
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="../assets/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/css/editAdmin.css">
    <link rel="stylesheet" href="../assets/style/css/all.min.css">
</head>