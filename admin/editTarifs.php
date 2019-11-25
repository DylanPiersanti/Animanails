<?php
require('includes/adminHeader.php');
require('../utils/princing.php');
?>

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
    <main class="page-content col-12" id="main">
        <div class="container-fluid">
            <h2>Editer les tarifs</h2>
            <hr>
        </div>

        <div class="alert alert-success" role="alert">
            Tarifs activés :
        </div>

        <table id="test" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Tarif (€)</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($setPriceAdmin as $setPrice) {

                    $priceId = $setPrice['id'];
                    $priceType = $setPrice['type'];
                    $priceTarif = $setPrice['tarifs'];
                    $priceCat = $setPrice['categorie'];

                    ?>
                    <tr>
                        <th scope="row"><?= $priceId ?></th>
                        <td><?= $priceType ?></td>
                        <td><?= $priceCat ?></td>
                        <td><input type="number" value="<?= $priceTarif ?>" min="0" /></td>

                        <td>
                            <form action="">
                                <button id="button" class="btn-danger" name="disablePrice" value="<?= $priceId ?>">
                                    Désactiver
                                </button>
                                <button class="btn-warning" name="editPrice" value="<?= $priceId ?>">
                                    Editer
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <div class="alert alert-danger" role="alert">
            Tarifs désactivées :
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Tarif (€)</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($setPriceNonA as $setPrice) {

                    $priceId = $setPrice['id'];
                    $priceType = $setPrice['type'];
                    $priceTarif = $setPrice['tarifs'];
                    $priceCat = $setPrice['categorie'];

                    ?>
                    <tr>
                        <th scope="row"><?= $priceId ?></th>
                        <td><?= $priceType ?></td>
                        <td><?= $priceCat ?></td>
                        <td><input type="number" value="<?= $priceTarif ?>" min="0" /></td>

                        <td>
                            <form action="">
                                <button class="btn-success" name="enablePrice" value="<?= $priceId ?>">
                                    Activer
                                </button>
                                <button class="btn-danger" name="deletePrice" value="<?= $priceId ?>">
                                    Supprimer
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>


    </main>
    <!-- page-content" -->
</div>

<?php require('includes/footer.php') ?>