
<!DOCTYPE html>
<html lang="nl">

    <head>
        <link rel ="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/89f724c9b8.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div id = "header">END THE SUFFERING</div>
        <div id = "wrapper">
            <div>

            <?php 




            function query($queryx)
            {
                $sql = new PDO("mysql:host=localhost;dbname=characterdata", 'root', '');
                $stmt = $sql->prepare($queryx);
                $stmt->execute(); 
                $var = $stmt->fetchAll(); 
                return $var;
            }

            $IdOrderAsc[] = query("SELECT id FROM characters ORDER BY name ASC");

            $f = $IdOrderAsc[0][0]["id"];

                echo($f);






                 
            ?>  
                
            </div>
        </div>
        <div id = "footer">𝕁𝕠𝕤𝕙𝕦𝕒 ℝ𝕠𝕠𝕧𝕖𝕣𝕤 𝟚𝟘𝟚𝟘 ©</div>
    </body>

</html>
