<?php
header("Location: index.php");
    include "connection.php";

    for($x = 0; $x < $count; $x++)    
    {
        $postname = ($x+1) . "del";
        /* echo($postname. " "); */
        if(isset($_POST[$postname]))
        {
            $y = $x+1;
            /* echo("\/".$y."\/"); */
        }
    }
    $id = $y;
    $post = $id . "del";
    if(isset($_POST[$post]))
    {
        $sql = new PDO("mysql:host=localhost;dbname=Toetsblok3", 'root', '');
        $stmt = $sql->prepare("DELETE FROM `characters` WHERE id = $id");
        $stmt->execute(); 
    }
    

