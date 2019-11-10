<?php 
require('includes/adminHeader.php');
require('includes/newsEditor.php');
?>

<div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
        <button style="margin: 5px;" class="btn btn-dark menuButtonClose">
            Menu
        </button>
        <div class="sidebar-content">
            <div class="sidebar-brand">
                <a href="#" class="adminLogo"><img src="../<?php echo $infos['logoImg'] ?>" ?></a>
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                    <a href="#"><img class="img-responsive img-rounded" src="<?php echo $_SESSION['avatar'] ?>" alt="User picture"></a>
                </div>
                <div class="user-info">
                    <span class="user-name">
                        <strong><?php echo $_SESSION['name'] ?></strong>
                    </span>
                    <span class="user-role"><?php echo $_SESSION['email'] ?></span>
                    <span class="user-role"><?php echo $_SESSION['pseudo'] ?></span>

                </div>
            </div>

            <?php echo include('includes/adminMenu.php') ?>


            <!-- sidebar-menu  -->
        </div>

        

        <div class="sidebar-footer">
            <!-- <a href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <a href="#">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <a href="#">
                <i class="fa fa-cog"></i>
                <span class="badge-sonar"></span>
            </a> -->
            <a href="logout.php">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
        <div class="container-fluid">
            <h2>Ajouter/Editer une news</h2>
            <hr>
            <div class="row">
                <form action="" method="post">
                    <input type="text" name="imageLink" placeholder="lien de l'image" />
                    <input type="text" name="newsTitle" placeholder="titre de la news" />
                    <textarea name="newsContent">

                    </textarea>

                    <button class="btn btn-primary" name="submitNews" type="submit">envoyer</button>
                </form>
            </div>

            <h5>Informations générales :</h5>
            <hr>
            <div class="row">
               
            </div>
        </div>

    </main>
    <!-- page-content" -->
</div>
        

        <?php require('includes/footer.php') ?>