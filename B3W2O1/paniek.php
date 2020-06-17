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
                <a class = "curentpage" href = "./paniek.php">Er heerst paniek...</a>
                <a href = "./onkunde.php">Onkunde</a>
            </div>
            <div id = "content">
                <div id = "form" >
                    <div class = "title">Er heerst paniek...</div>
                    <div id = "questions">
                        <div class = "question">Welk dier zou je nooit als huisdier willen hebben?</div>
                        <div class = "question">Wie is de belangrijkste persoon in je leven?</div>
                        <div class = "question">In welk land zou je graag willen wonen?</div>
                        <div class = "question">Wat doe je als je je verveelt?</div>
                        <div class = "question">Met welk speelgoed speelde je als kind het meest?</div>
                        <div class = "question">Bij welke docent spijbel je het liefst?</div>
                        <div class = "question">Als je 100.000.- euro had wat zou je dan kopen</div>
                        <div class = "question">Wat is je favoriete bezigheid?</div>
                    </div>
                    <form id = "awnsers" action = "paniek.php" method = "POST" autocomplete = "off">
                        <input id = "P1" type = "text" name = "P1" value = <?php echo(htmlspecialchars($_POST["P1"])); ?>>
                        <input id = "P2" type = "text" name = "P2" value = <?php echo(htmlspecialchars($_POST["P2"])); ?>>
                        <input id = "P3" type = "text" name = "P3" value = <?php echo(htmlspecialchars($_POST["P3"])); ?>> 
                        <input id = "P4" type = "text" name = "P4" value = <?php echo(htmlspecialchars($_POST["P4"])); ?>>
                        <input id = "P5" type = "text" name = "P5" value = <?php echo(htmlspecialchars($_POST["P5"])); ?>>
                        <input id = "P6" type = "text" name = "P6" value = <?php echo(htmlspecialchars($_POST["P6"])); ?>>
                        <input id = "P7" type = "text" name = "P7" value = <?php echo(htmlspecialchars($_POST["P7"])); ?>>
                        <input id = "P8" type = "text" name = "P8" value = <?php echo(htmlspecialchars($_POST["P8"])); ?>>
                        <input id = "submit" type = "submit" name = "Psubmit">
                    </form>
                </div>


                <?php
                    $P1A = htmlspecialchars($_POST["P1"]);
                    $P2A = htmlspecialchars($_POST["P2"]);
                    $P3A = htmlspecialchars($_POST["P3"]);
                    $P4A = htmlspecialchars($_POST["P4"]);
                    $P5A = htmlspecialchars($_POST["P5"]);
                    $P6A = htmlspecialchars($_POST["P6"]);
                    $P7A = htmlspecialchars($_POST["P7"]);
                    $P8A = htmlspecialchars($_POST["P8"]);
                    
                    if(isset($_POST["Psubmit"]))
                    {
                        
                        
                        if(empty($P1A))
                        {
                            echo("<script>document.getElementById(\"P1\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["P1"] = "";
                        }
                        if(empty($P2A))
                        {
                            echo("<script>document.getElementById(\"P2\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["P2"] = "";
                        }
                        if(empty($P3A))
                        {
                            echo("<script>document.getElementById(\"P3\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["P3"] = "";
                        }
                        if(empty($P4A))
                        {
                            echo("<script>document.getElementById(\"P4\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["P4"] = "";
                        }
                        if(empty($P5A))
                        {
                            echo("<script>document.getElementById(\"P5\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["P5"] = "";
                        }
                        if(empty($P6A))
                        {
                            echo("<script>document.getElementById(\"P6\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["P6"] = "";
                        }
                        if(empty($P7A))
                        {
                            echo("<script>document.getElementById(\"P7\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["P7"] = "";
                        }
                        if(empty($P8A))
                        {
                            echo("<script>document.getElementById(\"P8\").style.backgroundColor =\"rgba(255, 78, 46, 0.685)\"</script>");
                            $_POST["P8"] = "";
                        }
                        
                    }                             
                   
                    if(!empty($P1A) && !empty($P2A) && !empty($P3A) && !empty($P4A) && !empty($P5A) && !empty($P6A) && !empty($P7A) && !empty($P8A))
                    {
                        echo("<script>document.getElementById(\"form\").remove()</script>");
                        echo("Er heerst paniek in het koninkrijk " . $P3A . ". Koning " . $P6A . " is ten einde raad en als koning " . $P6A . " ten einde raad is, dan roept hij zijn ten-eide-raadsheer " . $P2A . "<br><br>");
                        echo("\"" . $P2A . "! Het is een ramp! Het is een schande!\"" . "<br><br>");
                        echo("Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?" . "<br><br>");
                        echo("\"Mijn " . $P1A . " is verdwenen! Zo maar, zonder waarschuwing. En ik had net " . $P5A . " voor hem gekocht!\"" . "<br><br>");
                        echo("\"Majesteit, uw " . $P1A . " komt vast vanzelf weer terug?\"" . "<br><br>");
                        echo("\"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd " . $P8A . " leren?\"" . "<br><br>");
                        echo("\"Maar Sire, daar kunt u toch uw " . $P7A . " voor gebruiken\"" . "<br><br>");
                        echo("\"" . $P2A . "! je hebt helemaal helijk! Wat zou ik doen als ik jou niet had.\"" . "<br><br>");
                        echo("\"" . $P4A . ", Sire.\"");
                    }
                ?>

            </div>
            <div id = "footer">
                <div id = "footertext">𝕁𝕠𝕤𝕙𝕦𝕒 ℝ𝕠𝕠𝕧𝕖𝕣𝕤 𝟚𝟘𝟚𝟘 ©</div>
            </div>
        </div>
    </body>
</html>