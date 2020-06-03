<?php
header("Location: index.php");
    include "connection.php";
    $name = $_POST["name"];
    $img = $_POST["img"];
    $gen = $_POST["gen"];
    $debut = $_POST["debut"];
    $net = $_POST["net"];
    $desc = $_POST["desc"];


   
    $id = $count+1;

    if(isset($_POST["create"]))
    {
        $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
        $stmt = $sql->prepare("INSERT INTO `characters` (id, name, img, sex, debut_year, net_worth, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute(array($id, $name, $img, $gen, $debut, $net, $desc)); 
        /* echo($id. " " .$name ." ". $img ." ". $gen ." ". $debut ." ". $net); */
    }