<?php

$sql = $db->prepare("SELECT * FROM top_videos ORDER BY views DESC LIMIT 10"); 
$sql->execute();
$topVideos = $sql->fetchAll();
