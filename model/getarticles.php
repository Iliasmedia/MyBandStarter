<?php
$stmt = $db->prepare("SELECT * FROM articles ORDER BY id DESC LIMIT $limit_starting_number , $smallNews_per_page"); 
$stmt->execute();
$article = $stmt->fetchAll();

// Nieuwste article komt altijd bovenaan in het groot
$stm = $db->prepare("SELECT * FROM articles ORDER BY ID DESC LIMIT 1"); 
$stm->execute();
$latest = $stm->fetchAll();