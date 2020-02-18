<!DOCTYPE = html>
<html lang = "nl">

    <head>
    </head>

    <body>

        <?php

            echo("<h1>hello world!");

            define("message", "<h1>hello world!</h1>");
            echo(constant("message")); 

            $message = "Learning Php";

            $message = "<h1>hello world!</h1>";
            
            echo($message);

            $message = ["<h1>hello", "world!</h1>"];
            echo(implode(" ", $message));

        ?>

    </body>
</html>