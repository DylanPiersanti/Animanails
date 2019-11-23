<?php
$db = dbConnect();

$stmt = $db->prepare('SELECT * FROM news');
$stmt->execute();

$editNews = $stmt->fetchAll(PDO::FETCH_ASSOC);

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

if (isset($_POST['submitNews'])) {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : null;
    $img = (string) $_POST['imageLink'];
    $title = (string) $_POST['newsTitle'];
    $newsContent = (string) $_POST['newsContent'];
    $newsStat = (int) $_POST['newsStat'];


        $stmt = $db->prepare("INSERT INTO news (id, image, title, texte, active) VALUES (NULL, :image, :title, :content, :stat)");

        $stmt->bindParam(':image', $img, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':content', $newsContent, PDO::PARAM_STR);
        $stmt->bindParam(':stat', $newsStat, PDO::PARAM_INT);

        $stmt->execute();
}

// Desactiver une news

if (isset($_POST['disableNews'])) {
    
} else {
    $myId = isset($_GET['disableNews']) ? (int) $_GET['disableNews'] : null;
    $disable = $db->prepare('UPDATE news SET active = 0 WHERE id = :newsId');
    $disable->bindParam(':newsId', $myId, PDO::PARAM_INT);
    $disable->execute();
    
}

// Activer une news

if (isset($_POST['enableNews'])) {

} else {
    $myId = isset($_GET['enableNews']) ? (int) $_GET['enableNews'] : null;
    $disable = $db->prepare('UPDATE news SET active = 1 WHERE id = :newsId');
    $disable->bindParam(':newsId', $myId, PDO::PARAM_INT);
    $disable->execute();
}

// Supprimer une news

if (isset($_POST['deleteNews'])) {
   
} else {
    $myId = isset($_GET['deleteNews']) ? (int) $_GET['deleteNews'] : null;
    $delete = $db->prepare('DELETE FROM news WHERE id = :newsId');
    $delete->bindParam(':newsId', $myId, PDO::PARAM_INT);
    $delete->execute();
}