<?php require('includes/header.php'); ?>
<?php include('includes/carousel.php') ?>
<main>
    <?php foreach ($setActiveNews as $news) { ?>
    <div class="row" style="width: 100%;">
        <div class="col-lg-6 ">
            <div class="content-img">
                <img src="<?php echo $news['image'] ?>" />
            </div>
        </div>
        <div class="col-lg-6 ">
            <div class="content-text">
                <h1><?php echo $news['title'] ?></h1>
                <p>
                    <?php 
                    $newsText = substr($news['texte'], 0, 1000);
                    echo $newsText;
                    if (strlen($newsText) > 999) {
                        echo '...';
                    } ?>
                </p>
                <a href="#" class="btn btn-dark">Lire la suite</a>
            </div>
        </div>
    </div>
    
    <?php
    }
    ?>
</main>
<?php require('includes/footer.php') ?>