<!DOCTYPE = html>
<html lang = "nl">

    <head>
    </head>

    <body>

    <?php

    $een = rand(1,10);
    $twee = rand(1,10);


    echo($een . "*" . $twee . "=" . ($een*$twee) . "<br>");
    

    echo($een . "/" . $twee . "=" . ($een/$twee) . "<br>");
    

    echo($een . "+" . $twee . "=" . ($een+$twee) . "<br>");
    
    
    echo($een . "-" . $twee . "=" . ($een-$twee) . "<br>");
    
   
    ?>

    </body>
</html>