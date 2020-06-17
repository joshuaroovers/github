<?php

    $sql = new PDO("mysql:host=localhost;dbname=gamesx", 'root', '');

    $stmt = $sql->prepare("SELECT * FROM games");
    $stmt->execute(); 
    $database[] = $stmt->fetchAll(); 
    
    function query($query)
    {
        $stmt = $sql->prepare($query);
        $stmt->execute();
        $value = $stmt->fetchcolumn();
        return $value;
    }
    


    echo($database[0][0]["name"]);
    echo("<br>");
    echo(var_dump($database));

    
?>