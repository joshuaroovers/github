<?php
header("Location: index.php");
    include "connection.php";

    for($x = 0; $x < $count; $x++)    
    {
        $postname = ($x+1) . "update";
        /* echo($postname. " "); */
        if(isset($_POST[$postname]))
        {
            $y = $x+1;
            /* echo("\/".$y."\/"); */
        }
    }
    $name = $_POST["name"];
    $img = $_POST["img"];
    $gen = $_POST["gen"];
    $debut = $_POST["debut"];
    $net = $_POST["net"];
    $desc = $_POST["desc"];
    $id = $y;

    $post = $id . "update";
    

    if(isset($_POST[$post]))
    {
        $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
        $stmt = $sql->prepare("UPDATE `characters` SET name = ?, img = ?, sex = ?, debut_year = ?, net_worth = ?, description = ? WHERE id = ?");
        $stmt->execute(array($name, $img, $gen, $debut, $net, $desc, $id)); 
        /* echo($name ." ". $img ." ". $gen ." ". $debut ." ". $net ." ". $id); */
    }