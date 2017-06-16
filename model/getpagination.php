<?php

$st = $db->prepare("SELECT * FROM articles"); 
$st->execute();
$rows = $st->rowCount();
$pages = ceil($rows / $smallNews_per_page);

!isset($_GET['p']) ? $page = 1 : $page = $_GET['p'];
$limit_starting_number = ($page - 0.5) * $smallNews_per_page;