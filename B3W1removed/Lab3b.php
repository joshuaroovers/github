<!DOCTYPE = html>
<html lang = "nl">

    <head>
    </head>

    <body>

        <?php

            $nums = [3,5,8,12];


            foreach($nums as $y)
            {
                functie($y);
            }
            

            function functie($getal)
            {

                for($x = 1; $x < 11; $x++)
                {
                    echo($x . " * " . $getal . " = " . ($x*$getal) . "<br>");
                }
                echo("<br>");
            }
        ?>

    </body>
</html>