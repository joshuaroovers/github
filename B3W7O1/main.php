<?php

    $sql = new PDO("mysql:host=localhost;dbname=gamesx", 'root', '');
    $stmt = $sql->prepare("SELECT * FROM games");
    $stmt->execute(); 
    $database[] = $stmt->fetchAll(); 

?>