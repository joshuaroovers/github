<!DOCTYPE = html>
<html lang = "nl">

    <head>
        <link rel ="stylesheet" href="style2.css">
    </head>

    <body> 
                     
        <?php
            $requieredname = "*";
            $requieredmail = "*";
            
            ini_set('display_errors', 0);
           
            $name = $_POST["name"];
            $nameA = str_split($name);

            $mail = $_POST["mail"];
            $mailA = str_split($mail);

            if(isset($_POST["submit"])) #dis be here because it should change the variable before it uses it
            {
                if(count($nameA) == 1)
                {
                    $requieredname = "* Name Requiered"; #this variable
                }
                else
                {
                    $requieredname = "*"; 
                }

                if(count($mailA) == 1)
                {
                    $requieredmail = "* Email Requiered";
                }
                elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL) && $mail != null)#checks for @ and an .(country) *.nl*
                {
                    $requieredmail = "* Valid Email Requiered";
                }
            }
        ?>

        <form id = "form" action = "lab2.php" method = "POST">
            <div>Name:</div>
            <input type="text" name="name">
            <span style = "color: red"><?php echo($requieredname) ?></span>
            <div>Email:</div>
            <input type="text" name="mail">
            <span style = "color: red"><?php echo($requieredmail) ?></span>
            <br>
            <input id = "submit" name = "submit" type="submit" value="Submit">
        </form>

        <?php
             if(count($nameA) != 1 && count($mailA) != 1 && filter_var($mail, FILTER_VALIDATE_EMAIL)) #needs to be here because the element has to exist for it to check for it
             {
                 echo("<script>document.getElementById(\"form\").remove() </script>");
                 echo ("Your name is: " . $_POST["name"] . "<br>");
                 echo ("Your Email is: " . $_POST["mail"]);
             }
        ?>

    </body>
</html>