<?php

require 'libs/Smarty.class.php';

//set up database connection
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME."",  DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


//set up template engine
$smarty = new Smarty();
$smarty->template_dir = "views";
$smarty->compile_dir = "assets/compiled";