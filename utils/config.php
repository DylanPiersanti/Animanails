<?php
    $db = dbConnect();
    $config['title'] = "Animanail's - Prothésiste ongulaire";

    //Récupération des informations globale du site
    $setInfos = $db->prepare("SELECT * FROM infos");
    $setInfos->execute();
    $infos = $setInfos->fetch();

    //Carousel images
    $carouselImg = $db->prepare("SELECT * FROM carousel");
    $carouselImg->execute();
    $carousel = $carouselImg->fetch();

    //News content
    $news = $db->prepare("SELECT * FROM news");
    $news->execute();
    $setNews = $news->fetchAll();

    //newsletter register

    if (isset($_POST['sumbmitNewsLetter'])) {
    $mail = (string) $_POST['newsletter'];

    $newsletter = $db->prepare('INSERT INTO `newsletter` (`mail`) VALUES (:mail); ');
    $newsletter->bindParam(':mail', $mail, PDO::PARAM_STR);
    $newsletter->execute();
    
    }
    
?>