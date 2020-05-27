<?php
    $sql = new PDO("mysql:host=localhost;dbname=gamesx", 'root', '');
    $stmt = $sql->prepare("SELECT * FROM games");
    $stmt->execute(); 
    $database[] = $stmt->fetchAll();

    $sql = new PDO("mysql:host=localhost;dbname=gamesx", 'root', '');
    $stmt = $sql->prepare("SELECT COUNT(image) FROM games");
    $stmt->execute();
    $imagecount = $stmt->fetchcolumn();
    

    for($x = 0; $x < $imagecount; $x++)
    {
        $gameneeded[$x] = false;
    }
    
    
?>

<!DOCTYPE html>
<html lang = "nl">

    <head>
        <script src="https://kit.fontawesome.com/89f724c9b8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel ="stylesheet" href="style.css">
    </head>

    <body>
        <div id = "wrapper">
            <ul class = "nav">
                <li class = "nav-item"><a class = "nav-link"><i class="fas fa-chevron-left"></i></a></li>
                <li class = "nav-item"><a class = "nav-link">pagina 1</a></li>
                <li class = "nav-item"><a class = "nav-link">pagina 2</a></li>
                <!-- <i class="fas fa-chevron-left"></i> -->
            </ul>
            <div>
                <span><i class="far fa-square"></i></span>
                <span><i class="far fa-square"></i></span>
            </div>
            <div>
                <?php

                    for($x = 0; $x < $imagecount; $x++)
                    {
                        $images[$x] = $database[0][$x]["image"];
                    }
                    $y = 0;
                    $gameneeded[12] = true;/*  */
                    foreach ($images as $b) {

                        if($gameneeded[$y] === true)/*  */
                        {
                           echo("<img class = \"game, gameneeded\" src=\"./afbeeldingen/".$b."\">");
                        }
                        else 
                        {
                            echo("<img class = \"game\" src=\"./afbeeldingen/".$b."\">");
                        }
                        $y++;
                    }
                ?>
            </div>
        </div>
    </body>

</html>