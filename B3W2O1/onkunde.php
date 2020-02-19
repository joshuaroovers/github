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
                        <div class = "question">Net welke persoon kun je goed opschieten?</div>
                        <div class = "question">Wat is je favorite geteal?</div>
                        <div class = "question">Wat heb je altijd bij als je op vakantie gaat?</div>
                        <div class = "question">Wat is je beste persoonlijke eigenschap?</div>
                        <div class = "question">Wat is je slechtste persoonlijke eigenschap?</div>
                        <div class = "question">Wat is het ergste dat je kan overkomen?</div>
                    </div>
                    <form id = "awnsers" action = "onkunde.php" method = "POST">
                        <input type = "text" name = "O1">
                        <input type = "text" name = "O2">
                        <input type = "text" name = "O3"> 
                        <input type = "text" name = "O4">
                        <input type = "text" name = "O5">
                        <input type = "text" name = "O6">
                        <input type = "text" name = "O7">
                        <input id = "submit" type = "submit" name = "Osubmit">
                    </form>
                </div>

                <?php
                
                $O1A = str_split($_POST["O1"]);
                $O2A = str_split($_POST["O2"]);
                $O3A = str_split($_POST["O3"]);
                $O4A = str_split($_POST["O4"]);
                $O5A = str_split($_POST["O5"]);
                $O6A = str_split($_POST["O6"]);
                $O7A = str_split($_POST["O7"]);
            
                if(isset($_POST["Osubmit"]))
                {
                    
                    
                    if(count($O1A) == 1)
                    {
                        echo("<script>document.getElementById(\"O1\").style.BackgroundColor =\"red\"</script>");
                        $_POST["O1"] = "";
                    }
                    if(count($O2A) == 1)
                    {
                        echo("<script>document.getElementById(\"O2\").style.BackgroundColor =\"red\"</script>");
                        $_POST["O2"] = "";
                    }
                    if(count($O3A) == 1)
                    {
                        echo("<script>document.getElementById(\"O3\").style.BackgroundColor =\"red\"</script>");
                        $_POST["O3"] = "";
                    }
                    if(count($O4A) == 1)
                    {
                        echo("<script>document.getElementById(\"O4\").style.BackgroundColor =\"red\"</script>");
                        $_POST["O4"] = "";
                    }
                    if(count($O5A) == 1)
                    {
                        echo("<script>document.getElementById(\"O5\").style.BackgroundColor =\"red\"</script>");
                        $_POST["O5"] = "";
                    }
                    if(count($O6A) == 1)
                    {
                        echo("<script>document.getElementById(\"O6\").style.BackgroundColor =\"red\"</script>");
                        $_POST["O6"] = "";
                    }
                    if(count($O7A) == 1)
                    {
                        echo("<script>document.getElementById(\"O7\").style.BackgroundColor =\"red\"</script>");
                        $_POST["O7"] = "";
                    }
                    
                }
                if(count($O1A) != 1 && count($O2A) != 1 && count($O3A) != 1 && count($O4A) != 1 && count($O5A) != 1 && count($O6A) != 1 && count($O7A) != 1 && count($P8A) != 1)
                {
                    echo("<script>document.getElementById(\"form\").remove()</script>");
                    echo("Er zijn veel mensen die niet kunnen " . $_POST["O1"] . ". Neem nou ". $_POST["O2"]. ". Zelfs met de hulp van een " . $_POST["O4"] . " of zelfs " . $_POST["O3"] . " kan " . $_POST["O2"] . " niet " . $_POST["O1"] . ".");
                    echo("Dat heeft niet te maken met een gebrek aan " . $_POST["O5"] . ", maar met een te veel aan " . $_POST["O6"] . ". Te veel " . $_POST["O6"] . " leidt tot een " . $_POST["O7"] . " en dat is niet goed als je wilt " . $_POST["O1"] . ". Helaas voor " . $_POST["O2"]);
                }
                ?>
                 
            </div>
            <div id = "footer">
                <div id = "footertext">𝕁𝕠𝕤𝕙𝕦𝕒 ℝ𝕠𝕠𝕧𝕖𝕣𝕤 𝟚𝟘𝟚𝟘 ©</div>
            </div>
        </div>
    </body>
</html>