<!DOCTYPE = html>
<html lang = "nl">

    <head>
    </head>

    <body>

    <?php

    echo("<h1>Hello World ;v;");

    define("message", "<h1>Hewwo World ;W;</h1>");
    echo(constant("message")); 

    $message = "Learning Php";

    $message = "<h1>OwO hewwowo Woworld</h1>";
    
    echo($message);

    $message = ["<h1>OwO I AM TWAKING", "OWVER THEE WOWLD UWU</h1>"];
    echo(implode(" ", $message));

    ?>

    </body>
</html>