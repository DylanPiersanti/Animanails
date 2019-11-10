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


        $stmt = $db->prepare("INSERT INTO news (id, image, title, texte)VALUES (NULL, :image, :title, :content)");

        $stmt->bindParam(':image', $img, PDO::PARAM_STR);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':content', $newsContent, PDO::PARAM_STR);

        $stmt->execute();
}