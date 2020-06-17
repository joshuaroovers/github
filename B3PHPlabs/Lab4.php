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

            }
            elseif($int < 15 || $int > 30)
            {

            }
        }
        elseif($bool === false)
        {
            if($int > 100)
            {

            }
            elseif($int <= 100)
            {
                
            }
        }
    }
    elseif($string === "Monopoly")
    {
        if($bool === true)
        {
            if($int == 1)
            {

            }
            elseif($int > 1)
            {

            }
        }
        elseif($bool === false)
        {
            if($int === 2 || $int > 120)
            {

            }
            else
            {
                
            }
        }
    }   
    elseif($string === "Schaken")
    {
        if($bool === true)
        {
            if($int === 2)
            {

            }
            elseif($int <>2)
            {

            }
        }
        elseif($bool === false)
        {
            if($int < 0)
            {

            }
            else
            {
                
            }
        }
    } 

    ?>

    </body>
</html>