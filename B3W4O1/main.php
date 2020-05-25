<?php 




    function query($queryx)
    {
        $sql = new PDO("mysql:host=localhost;dbname=characterdata", 'root', '');
        $stmt = $sql->prepare($queryx);
        $stmt->execute(); 
        $var = $stmt->fetchcolumn(); 
        return $var;
    }


    $sql = new PDO("mysql:host=localhost;dbname=characterdata", 'root', '');
    $stmt = $sql->prepare("SELECT id FROM characters ORDER BY name ASC");
    $stmt->execute(); 
    $IdOrderAsc[] = $stmt->fetchAll(); 
?>




<!DOCTYPE html>
<html lang="nl">

    <head>
        <link rel ="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/89f724c9b8.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div id = "header">Alle <?php echo(query("SELECT COUNT(id) FROM characters"));?> characters uit de database</div>
        <div id = "wrapper">
            <form action = "main.php" method = "POST">
        
        
                <?php
                    for($x = 0; $x < query("SELECT COUNT(id) FROM characters"); $x++)
                    {

                        $id = $IdOrderAsc[0][$x]["id"];

                        $img = "./images/" . query("SELECT avatar FROM characters WHERE id = $id");
                        $name = query("SELECT name FROM characters WHERE id = $id");
                        $health = query("SELECT health FROM characters WHERE id = $id");
                        $attack = query("SELECT attack FROM characters WHERE id = $id");
                        $defense = query("SELECT defense FROM characters WHERE id = $id");
                        
                        echo("<div class = \"character\">
                            <img class = \"charaimg\" src=$img>
                            <div class = \"charadetails\">
                                <div class = \"charaname\">$name</div>
                                <div class = \"charahp\"><i class=\"fas fa-heart\"></i> $health</div>
                                <div class = \"charadmg\"><i class=\"fas fa-fist-raised\"></i> $attack</div>
                                <div class = \"charadef\"><i class=\"fas fa-shield-alt\"></i> $defense</div>
                                <div class = \"yep\"><i class=\"fas fa-search\"></i><input type = \"submit\" name = $id value = \"bekijk\" style = \"border: none; background-color: white; font-size: medium;\"></div>
                            </div>
                        </div>");
                        
                    }  
                ?>
                
            </form>
        </div>

        <?php

        
        for($x = 1; $x < (query("SELECT MAX(id) FROM characters")+1); $x++)
        {

            if(isset($_POST[$x]))
            {
                

                echo("<script>document.getElementById(\"header\").remove(); document.getElementById(\"wrapper\").remove();</script>");
                $name = query("SELECT name FROM characters WHERE id = $x");
                $img = "./images/" . query("SELECT avatar FROM characters WHERE id = $x");
                $color = query("SELECT color FROM characters WHERE id = $x");
                $health = query("SELECT health FROM characters WHERE id = $x");
                $attack = query("SELECT attack FROM characters WHERE id = $x");
                $defense = query("SELECT defense FROM characters WHERE id = $x");
                $weapon = query("SELECT weapon FROM characters WHERE id = $x");
                $armor =  query("SELECT armor FROM characters WHERE id = $x");
                $bio = query("SELECT bio FROM characters WHERE id = $x");

                echo("<div id = \"headerdetail\">$name<form action = \"main.php\" method = \"POST\"><input name = \"terug\" type = \"submit\" value = \"← terug\" class = \"buttonterug\"></input></form></div>
                <div id = \"wrapper\">
                    <div class = \"charaother\">
                        <img src = $img>
                        <div style =\"padding: 10px; border: solid black 1px; width: 278px; background-color: $color\">
                            <div><i class=\"fas fa-heart\"></i> $health</div>
                            <div><i class=\"fas fa-fist-raised\"></i> $attack</div>
                            <div><i class=\"fas fa-shield-alt\"></i> $defense</div>
                            <br>");

                if($weapon != NULL)
                {
                    echo("<div class = \"bold\">Weapon: <span class = \"Nobold\">$weapon</span></div>");
                } 
                if($armor != NULL)
                {
                    echo("<div class = \"bold\">Armor: <span class = \"Nobold\">$armor</span></div>");
                }           

                echo("       </div>
                    </div>
                    <div class = \"charastory\">$bio</div>
                </div>");
                }
            }

        
        ?>

        <div id = "footer">𝕁𝕠𝕤𝕙𝕦𝕒 ℝ𝕠𝕠𝕧𝕖𝕣𝕤 𝟚𝟘𝟚𝟘 ©</div>
    </body>

</html>

<?php


?>


