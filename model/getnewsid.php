<?php
// gefilterd in PDO
$newsId = $_GET['p'];

$sql = $db->prepare("SELECT * FROM articles WHERE id = :id LIMIT 1"); 
$sql->execute([':id' => $newsId]);
$newsInfo = $sql->fetchAll();
