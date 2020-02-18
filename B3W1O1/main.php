

<!DOCTYPE = html>
<html lang = "nl">

    <head>
        <link rel ="stylesheet" href="style.css">
        <script src = "script.js"></script>
        
    </head>
    <body>


        
    <?php
    
    date_default_timezone_set("Europe/Amsterdam");

    $goodx = "";
    $img = "";

    if(date("H") >= 6 && date("H") < 12)
    {
        $goodx = "Morning";
        $img = "./images/morning.png";
    }
    elseif(date("H") >= 12 && date("H") < 18)
    {
        $goodx = "Afternoon";
        $img = "./images/afternoon.png";
    }
    elseif(date("H") >= 18 && date("H") <= 24)//
    {
        $goodx = "Evening";
        $img = "./images/evening.png";
    }
    elseif(date("H") >= 0 && date("H") < 6)
    {
        $goodx = "Night";
        $img = "./images/night.png";
    }
  

    echo("<h1> Good " . $goodx. "</h1>");

    echo("<h1> ". date("H"). ":". date("i"). "</h1>");




    

    
    

    


    ?>
        <style type="text/css">
        body 
        {
            background-image: url('<?php echo $img ?>');   
        }
            </style>
    </body>

</html>
