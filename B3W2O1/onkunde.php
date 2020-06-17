<!DOCTYPE html>
<html lang="nl">

    <head>
        <link rel ="stylesheet" href="style.css">
    </head>


    <body>

        <?php

            ini_set('display_errors', 0);

        ?>

        <img src = "./images/Naamloos.png" >
        <div id = "wrapper">
            <div id = "header">
                <a href = "./paniek.php">Er heerst paniek...</a>
                <a class = "curentpage"  href = "./onkunde.php">Onkunde</a>
            </div>
            <div id = "content">
                <div id = "form">
                    <div class = "title">Onkunde</div>
                    <div id = "questions">
                        <div class = "question">Wat zou je graag willen kunnen?</div>
                        <div class = "question">Met welke persoon kun je goed opschieten?</div>
                        <div class = "question">Wat is je favorite getal?</div>
                        <div class = "question">Wat heb je altijd bij als je op vakantie gaat?</div>
                        <div class = "question">Wat is je beste persoonlijke eigenschap?</div>
                        <div class = "question">Wat is je slechtste persoonlijke eigenschap?</div>
                        <div class = "question">Wat is het ergste dat je kan overkomen?</div>
                    </div>
                    <form id = "awnsers" action = "onkunde.php" method = "POST" autocomplete = "off">
                        <input id = "O1" type = "text" name = "O1" value = <?php echo($O1A) ?>>
                        <input id = "O2" type = "text" name = "O2" value = <?php echo($O2A) ?>>
                        <input id = "O3" type = "text" name = "O3" value = <?php echo($O3A) ?>> 
                        <input id = "O4" type = "text" name = "O4" value = <?php echo($O4A) ?>>
                        <input id = "O5" type = "text" name = "O5" value = <?php echo($O5A) ?>>
                        <input id = "O6" type = "text" name = "O6" value = <?php echo($O6A) ?>>
                        <input id = "O7" type = "text" name = "O7" value = <?php echo($O7A) ?>>
                        <input id = "submit" type = "submit" name = "Osubmit">
                    </form>
                </div>

                <?php


                                    
                    $O1A = htmlspecialchars($_POST["O1"]);
                    $O2A = htmlspecialchars($_POST["O2"]);
                    $O3A = htmlspecialchars($_POST["O3"]);
                    $O4A = htmlspecialchars($_POST["O4"]);
                    $O5A = htmlspecialchars($_POST["O5"]);
                    $O6A = htmlspecialchars($_POST["O6"]);
                    $O7A = htmlspecialchars($_POST["O7"]);



                    if(isset($_POST["Osubmit"]))
                    {
                        
                        if(empty($O1A))
                        {
                            echo("<script>document.getElementById(\"O1\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["O1"] = "";
                        }
                        if(empty($O2A))
                        {
                            echo("<script>document.getElementById(\"O2\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["O2"] = "";
                        }
                        if(empty($O3A))
                        {
                            echo("<script>document.getElementById(\"O3\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["O3"] = "";
                        }
                        if(empty($O4A))
                        {
                            echo("<script>document.getElementById(\"O4\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["O4"] = "";
                        }
                        if(empty($O5A))
                        {
                            echo("<script>document.getElementById(\"O5\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["O5"] = "";
                        }
                        if(empty($O6A))
                        {
                            echo("<script>document.getElementById(\"O6\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["O6"] = "";
                        }
                        if(empty($O7A))
                        {
                            echo("<script>document.getElementById(\"O7\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["O7"] = "";
                        }
                        
                    }


                    if(!empty($O1A) && !empty($O2A) && !empty($O3A) && !empty($O4A) && !empty($O5A) && !empty($O6A) && !empty($O7A))
                    {
                        echo("<script>document.getElementById(\"form\").remove()</script>");
                        echo("Er zijn veel mensen die niet kunnen " . $O1A . ". Neem nou ". $O2A. ". Zelfs met de hulp van een " . $O4A . " of zelfs " . $O3A . " kan " . $O2A . " niet " . $O1A . ".");
                        echo(" Dat heeft niet te maken met een gebrek aan " . $O5A . ", maar met een te veel aan " . $O6A . ". Te veel " . $O6A . " leidt tot een " . $O7A . " en dat is niet goed als je wilt " . $O1A . ". Helaas voor " . $O2A);
                    }

                   
                ?>

            </div>
            <div id = "footer">
                <div id = "footertext">𝕁𝕠𝕤𝕙𝕦𝕒 ℝ𝕠𝕠𝕧𝕖𝕣𝕤 𝟚𝟘𝟚𝟘 ©</div>
            </div>
        </div>
    </body>
</html>