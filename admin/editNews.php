<?php
require('includes/adminHeader.php');
require('includes/newsEditor.php');
$db = dbConnect();
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
    <main class="page-content col-12">
        <div class="container-fluid">
            <h2>Ajouter une news</h2>
            <hr>
            <div class="row">

                <form class="col-12" action="" method="post">

                    <div class="form-group">
                        <input type="text" class="form-control" name="newsTitle" id="newsTitle" placeholder="Titre de la news">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="imageLink" id="imageLink" placeholder="Image à la une" value="assets/style/img/news/">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Contenu de la news</label>
                        <textarea name="newsContent" class="form-control" id="newsContent" rows="3"></textarea>
                    </div>


                    <div class="form-group">
                        <select class="form-control" name="newsStat" id="newsStat">
                            <option value="1">Activé</option>
                            <option value="0">Désactivé</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" name="submitNews" type="submit">envoyer</button>

                </form>


            </div>
        </div>

        <!-- Liste des news (active) -->
        <div class="alert alert-success" role="alert">
            Nouvelles activées :
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Texte</th>
                    <th scope="col">Image</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($setActiveNews as $newsList) {

                    $newsId = $newsList['id'];
                    $newsTitle = $newsList['title'];
                    $newsText = substr($newsList['texte'], 0, 255);
                    $newsImg = $newsList['image'];

                    ?>
                    <tr>
                        <th scope="row"><?= $newsId ?></th>
                        <td><?= $newsTitle ?></td>
                        <td><?= $newsText . '...' ?></td>
                        <td><?= $newsImg ?></td>

                        <td>
                            <form action="">
                                <button class="btn-warning" name="disableNews" value="<?= $newsId ?>">
                                    Désactiver
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php 
            } 
                ?>
            </tbody>
        </table>

        <!-- Liste des news (disabled) -->

        <div class="alert alert-danger" role="alert">
            Nouvelles désactivées :
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Texte</th>
                    <th scope="col">Image</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($setDisabledNews as $newsList) {

                    $newsId = $newsList['id'];
                    $newsTitle = $newsList['title'];
                    $newsText = substr($newsList['texte'], 0, 255);
                    $newsImg = $newsList['image'];

                    ?>
                    <tr>
                        <th scope="row"><?= $newsId ?></th>
                        <td><?= $newsTitle ?></td>
                        <td><?= $newsText . '...' ?></td>
                        <td><?= $newsImg ?></td>
                        <td>
                        <form action="">
                                <button class="btn-success" name="enableNews" value="<?= $newsId ?>">
                                    Activer
                                </button>
                                <button class="btn-danger" name="deleteNews" value="<?= $newsId ?>">
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

</div>


<?php require('includes/footer.php') ?>