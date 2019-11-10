<?php require('includes/adminHeader.php') ?>

<button style="margin : 5px;" class="btn btn-dark menuButtonOpen">
    Menu
</button>

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
                    <img class="img-responsive img-rounded" src="<?php echo $_SESSION['avatar'] ?>" alt="User picture">
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
        <!-- sidebar-content  -->
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
            <h2>Panel administration</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <p>Bienvenue sur <b><?php echo $_SESSION['name'] ?></b> sur le panel d'administration</p>
                    <p>
                        Voici quelques informations sur vous : <br/>
                        <strong>Adresse mail :</strong> <?php echo $_SESSION['email'] ?> <br/>
                        <strong>Pseudo :</strong> <?php echo $_SESSION['pseudo'] ?>
                    </p>
                </div>
                <div class="form-group col-md-12">
                    <a href="" class="btn btn-success">Profil</a>
                    <a href="" class="btn btn-danger">Deconnexion</a>
                </div>
            </div>
            <h5>Informations générales :</h5>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <!-- content left -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <!-- content right -->
                </div>
            </div>
        </div>

    </main>
    <!-- page-content" -->
</div>

<?php require('includes/footer.php') ?>