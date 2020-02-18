<!DOCTYPE = html>
<html lang = "nl">

    <head>
    </head>

    <body>

        <?php

            $string = "Yathzee";
            $bool = true;
            $int = 30;

            if($string === "Yathzee")
            {
                if($bool === true)
                {
                    if($int > 15 && $int < 30)
                    {
                        echo("Je wilt Yathzee spelen want je hebt tussen de 15 en 30 minuten tijd");
                    }
                    elseif($int <= 15 || $int >= 30)
                    {
                        echo("Je wilt Yathzee spelen want dat vindt je gewoon leuk");
                    }
                }
                elseif($bool === false)
                {
                    if($int >= 100)
                    {
                        echo("Je wilt geen Yathzee spelen want je wilt meer dan 100x met een dobbelsteen gooien");
                    }
                    elseif($int < 100)
                    {
                        echo("JE wilt geen Yahtzee spelen want je wilt minder dan 100 punten halen");
                    }
                }
            }
            elseif($string === "Monopoly")
            {
                if($bool === true)
                {
                    if($int == 1)
                    {
                        echo("Je wilt Monopoly spelen want je hebt aan 1 spelletje genoeg");
                    }
                    elseif($int > 1)
                    {
                        echo("Je wilt Monopoly spelen want je houd er van om iedereen blut te maken");
                    }
                }
                elseif($bool === false)
                {
                    if($int === 2 || $int >= 120)
                    {
                        echo("Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2 uur");
                    }
                    else
                    {
                        echo("Je wilt Monopoly niet spelen want je houd niet van hotels");
                    }
                }
            }   
            elseif($string === "Schaken")
            {
                if($bool === true)
                {
                    if($int === 2)
                    {
                        echo("Je wilt Schaken want je vindt zwart en wit leuk");
                    }
                    elseif($int <>2)
                    {
                        echo("Je wilt Schaken want je denkt slimmer dan mij te zijn");
                    }
                }
                elseif($bool === false)
                {
                    if($int <= 0)
                    {
                        echo("Je wilt echt niet Schaken");
                    }
                    else
                    {
                        echo("Je wilt gewoon niet Schaken");
                    }
                }
            } 

        ?>

    </body>
</html>