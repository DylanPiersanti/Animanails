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
