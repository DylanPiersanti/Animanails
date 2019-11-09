<?php

session_start();

if (isset($_POST['login'])) {

    $login = (string) $_POST['login'];
    $password = (string) $_POST['password'];

    if (filter_var($login, FILTER_VALIDATE_EMAIL) && $password) {


        $stmt = $db->prepare('SELECT * FROM users WHERE mail = :login');

        $stmt->bindParam(':login', $login);

        $stmt->execute();
        $logger = $stmt->fetch();

        if ($logger && password_verify($password, $logger['password'])) {
            $_SESSION['name'] = $logger['name'];
            $_SESSION['id'] = $logger['id'];
            $_SESSION['email'] = $logger['mail'];
            $_SESSION['pseudo'] = $logger['pseudo'];
            $_SESSION['avatar'] = $logger['avatar'];
            header('Location: edit.php');
        } else {
            echo '<center style="position: absolute; left: 43%; top: 200px; color: red;"> * Login ou mot de passe incorrect </center>';
        }
        

        // var_dump($logger);
        // password_hash($password, PASSWORD_DEFAULT);
        // var_dump(password_verify($password, $logger));
    }
}
