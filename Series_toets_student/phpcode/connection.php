<?php


    $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
    $stmt = $sql->prepare("SELECT * FROM characters");
    $stmt->execute(); 
    $datachar[] = $stmt->fetchAll();/* get all of characters */

    $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
    $stmt = $sql->prepare("SELECT COUNT(id) FROM characters");
    $stmt->execute(); 
    $count = $stmt->fetchcolumn();/* get count of characters */

    $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
    $stmt = $sql->prepare("SELECT * FROM shows");
    $stmt->execute(); 
    $datashows[] = $stmt->fetchAll();/* get all of shows */

    $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
    $stmt = $sql->prepare("SELECT COUNT(id) FROM shows");
    $stmt->execute(); 
    $countshows = $stmt->fetchcolumn();/* get count of shows */

