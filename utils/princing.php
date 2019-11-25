<?php
    $db = dbConnect();

    // ongles naturels
    $NaturalPrices = $db->prepare("SELECT * FROM tarifs WHERE categorie = 'naturel'");
    $NaturalPrices->execute();
    $setPriceNatural = $NaturalPrices->fetchAll(PDO::FETCH_ASSOC);

    // rallongements
    $rallPrices = $db->prepare("SELECT * FROM tarifs WHERE categorie = 'rallongement'");
    $rallPrices->execute();
    $setPriceRall = $rallPrices->fetchAll(PDO::FETCH_ASSOC);

    // remplissages
    $rempPrices = $db->prepare("SELECT * FROM tarifs WHERE categorie = 'remplissage'");
    $rempPrices->execute();
    $setPriceRemp = $rempPrices->fetchAll(PDO::FETCH_ASSOC); 

    // deposes
    $deposesPrice = $db->prepare("SELECT * FROM tarifs WHERE categorie = 'deposes'");
    $deposesPrice->execute();
    $setPriceDeposes = $deposesPrice->fetchAll(PDO::FETCH_ASSOC); 

    //deco
    $decoPrice = $db->prepare("SELECT * FROM tarifs WHERE categorie = 'decos'");
    $decoPrice->execute();
    $setPriceDeco = $decoPrice->fetchAll(); 

    // setPrices actives
    $setPrices = $db->prepare("SELECT * FROM tarifs WHERE actif = 1");
    $setPrices->execute();
    $setPriceAdmin = $setPrices->fetchAll(); 

    //setPrices no actives
    $setPricesNa = $db->prepare("SELECT * FROM tarifs WHERE actif = 0");
    $setPricesNa->execute();
    $setPriceNonA = $setPricesNa->fetchAll(); 


    if (isset($_POST['disablePrice'])) {
        
    } else {
        $myId = isset($_GET['disablePrice']) ? (int) $_GET['disablePrice'] : null;
        $disable = $db->prepare('UPDATE tarifs SET actif = 0 WHERE id = :tarifId');
        $disable->bindParam(':tarifId', $myId, PDO::PARAM_INT);
        $disable->execute();
    }

    if (isset($_POST['enablePrice'])) {
        
    } else {
        $myId = isset($_GET['enablePrice']) ? (int) $_GET['enablePrice'] : null;
        $disable = $db->prepare('UPDATE tarifs SET actif = 1 WHERE id = :tarifId');
        $disable->bindParam(':tarifId', $myId, PDO::PARAM_INT);
        $disable->execute();
    }