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
    <main class="page-content col-12">
        <div class="container-fluid">
            <h2>Editer les tarifs</h2>
            <hr>
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
                <?php foreach ($setPriceNatural as $natural) {

                    $naturalId = $natural['id'];
                    $naturalType = $natural['type'];
                    $naturalTarifs = $natural['tarifs'];
                    $naturalCat = $natural['categorie'];

                    ?>
                    <tr>
                        <th scope="row"><?= $naturalId ?></th>
                        <td><?= $naturalType ?></td>
                        <td><?= $naturalCat ?></td>
                        <td><input type="number" value="<?= $naturalTarifs ?>" min="0" /></td>

                        <td>
                            <form action="">
                                <button class="btn-danger" name="disableNews" value="<?= $naturalId ?>">
                                    Supprimer
                                </button>
                                <button class="btn-warning" name="disableNews" value="<?= $naturalId ?>">
                                    Editer
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php
                }
                ?>

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Type</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Tarif (€)</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>

                <?php foreach ($setPriceRall as $rallongement) {

                    $rallongementId = $rallongement['id'];
                    $rallongementType = $rallongement['type'];
                    $rallongementTarifs = $rallongement['tarifs'];
                    $rallongementCat = $rallongement['categorie'];

                    ?>
                    <tr>
                        <th scope="row"><?= $rallongementId ?></th>
                        <td><?= $rallongementType ?></td>
                        <td><?= $rallongementCat ?></td>
                        <td><input type="number" value="<?= $rallongementTarifs ?>" min="0" /></td>

                        <td>
                            <form action="">
                                <button class="btn-danger" name="disableNews" value="<?= $rallongementId ?>">
                                    Supprimer
                                </button>
                                <button class="btn-warning" name="disableNews" value="<?= $rallongementId ?>">
                                    Editer
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php
                }
                ?>

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Type</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Tarif (€)</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>

                <?php foreach ($setPriceDeposes as $deposes) {

                    $deposesId = $deposes['id'];
                    $deposesType = $deposes['type'];
                    $deposesTarifs = $deposes['tarifs'];
                    $deposesCat = $deposes['categorie'];

                    ?>
                    <tr>
                        <th scope="row"><?= $deposesId ?></th>
                        <td><?= $deposesType ?></td>
                        <td><?= $deposesCat ?></td>
                        <td><input type="number" value="<?= $deposesTarifs ?>" min="0" /></td>

                        <td>
                            <form action="">
                                <button class="btn-danger" name="disableNews" value="<?= $deposesId ?>">
                                    Supprimer
                                </button>
                                <button class="btn-warning" name="disableNews" value="<?= $deposesId ?>">
                                    Editer
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php
                }
                ?>

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Type</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Tarif (€)</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>

                <?php foreach ($setPriceRemp as $Remp) {

                    $RempId = $Remp['id'];
                    $RempType = $Remp['type'];
                    $RempTarifs = $Remp['tarifs'];
                    $RempCat = $Remp['categorie'];

                    ?>
                    <tr>
                        <th scope="row"><?= $RempId ?></th>
                        <td><?= $RempType ?></td>
                        <td><?= $RempCat ?></td>
                        <td><input type="number" value="<?= $RempTarifs ?>" min="0" /></td>

                        <td>
                            <form action="">
                                <button class="btn-danger" name="disableNews" value="<?= $RempId ?>">
                                    Supprimer
                                </button>
                                <button class="btn-warning" name="disableNews" value="<?= $RempId ?>">
                                    Editer
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php
                }
                ?>

                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Type</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Tarif (€)</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>

                <?php foreach ($setPriceDeco as $deco) {

                    $decoId = $deco['id'];
                    $decoType = $deco['type'];
                    $decoTarifs = $deco['tarifs'];
                    $decoCat = $deco['categorie'];

                    ?>
                    <tr>
                        <th scope="row"><?= $decoId ?></th>
                        <td><?= $decoType ?></td>
                        <td><?= $decoCat ?></td>
                        <td><input type="number" value="<?= $decoTarifs ?>" min="0" /></td>

                        <td>
                            <form action="" method="post">
                                <button class="btn-danger" name="disableNews" value="<?= $decoId ?>">
                                    Supprimer
                                </button>
                                <button class="btn-warning" name="editDecos" value="<?= $newTarif ?>">
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


    </main>
    <!-- page-content" -->
</div>

<?php require('includes/footer.php') ?>