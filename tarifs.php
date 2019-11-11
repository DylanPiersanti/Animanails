<?php
include('includes/header.php');
include('utils/princing.php');
?>

<div class="col-md-10 my-4 mx-auto">
    <h2 class="text-center display-4">Table de tarifs</h2>

    <hr>
    <div class="row no-gutters my-3">
        <div class="col-md-6 pr-2">
            <div class="list-group text-center my-3">
                <div class="list-group-item text-white bg-dark">
                    <h4 class="text-center my-1">Ongles naturels</h4>
                </div>
                <?php foreach ($setPriceNatural as $naturel) { ?>
                    <div class="list-group-item text-uppercase font-weight-bold">
                        <span class="service"><?php echo $naturel['type'] ?></span>
                        <span class="price"><?php echo $naturel['tarifs'] . '€' ?></span>
                    </div>
                <?php } ?>
                <!-- <div class="list-group-item">
                        <button class="btn btn-secondary btn-lg btn-block text-truncate">Sign-up</button>
                    </div> -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="list-group text-center my-3">
                <div href="#" class="list-group-item text-white bg-dark">
                    <h4 class="text-center my-1">Rallongements<br></h4>
                </div>
                <?php foreach ($setPriceRall as $rall) { ?>
                    <div class="list-group-item text-uppercase font-weight-bold">
                        <span class="service"><?php echo $rall['type'] ?></span>
                        <span class="price"><?php echo $rall['tarifs'] . '€' ?></span>
                    </div>
                <?php } ?>
                <!-- <div class="list-group-item bg-inverse">
                        <button class="btn btn-secondary btn-lg btn-block text-truncate">Buy Now</button>
                    </div> -->
            </div>
        </div>
        <div class="col-md-6 pl-2">
            <div class="list-group text-center my-3">
                <div href="#" class="list-group-item text-white bg-dark">
                    <h4 class="text-center my-1">Remplissages</h4>
                </div>
                <?php foreach ($setPriceRemp as $remp) { ?>
                    <div class="list-group-item text-uppercase font-weight-bold">
                        <span class="service"><?php echo $remp['type'] ?></span>
                        <span class="price"><?php echo $remp['tarifs'] . '€' ?></span>
                    </div>
                <?php } ?>
                <!-- <div class="list-group-item">
                        <button class="btn btn-secondary btn-lg btn-block text-truncate">Contact Us</button>
                    </div> -->
            </div>
        </div>
        <div class="col-md-6 pl-2">
            <div class="list-group text-center my-3">
                <div href="#" class="list-group-item text-white bg-dark">
                    <h4 class="text-center my-1">Déposes</h4>
                </div>
                <?php foreach ($setPriceDeposes as $depose) { ?>
                    <div class="list-group-item text-uppercase font-weight-bold">
                        <span class="service"><?php echo $depose['type'] ?></span>
                        <span class="price"><?php echo $depose['tarifs'] . '€' ?></span>
                    </div>
                <?php } ?>
                <!-- <div class="list-group-item">
                        <button class="btn btn-secondary btn-lg btn-block text-truncate">Contact Us</button>
                    </div> -->
            </div>
        </div>
    </div>
        <div class="col-12 decoPrice">
        <span>Décos <b>GRATUITES</b> (strass, spiderGel, paillettes, ...)</span> <br />
        <span><b><?php echo $setPriceDeco['type'] ?></b> ....... <?php echo $setPriceDeco['tarifs'] . ' €' ?></span>
        </div>

    <hr>
</div>
<?php include('includes/footer.php') ?>