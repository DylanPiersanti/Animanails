<?php 
require('includes/header.php');
require('../utils/logAdmin.php');
?>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <br/>
            <img src="../<?php echo $infos['logoImg'] ?>" id="icon" alt="User Icon" />
            <br/>
            <br/>
        </div>

        <!-- Login Form -->
        <form action="./" method="post">
            <input type="mail" id="login" class="fadeIn second" name="login" placeholder="Adresse mail">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
            <input type="submit" class="fadeIn fourth" value="Connexion">
        </form>
        <a href="../">Retour</a>
    </div>
</div>

<?php require('includes/footer.php') ?>