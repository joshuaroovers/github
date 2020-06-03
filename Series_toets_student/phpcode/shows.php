<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Toets CRUD Blok 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php include 'connection.php' ?>
</head>
<body>

<?php include 'htmlcomponents/nav.php' ?>

<div class="mb-5 mt-2" style = "margin-left: 25%; margin-right: 25%;">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier alle shows</h1>
    </div>


        <form method = "POST" action = "show.php">
        <ul class="list-group">
            

            <?php 
                
                for($x = 0; $x < $countshows; $x++)
                {
                    $y = $x+1 . "show";
                    echo(
                        "
                        <li class=\"list-group-item d-flex justify-content-between align-items-left\">
                           <input style = \"border: none; background-color: unset; color: blue;\" type = \"submit\" name = \"$y\" value = \"".$datashows[0][$x]["name"]."\">
                        </li>
                        "
                    );
                }

            ?>
                
            
        </ul>
        </form>
</div>

<?php include 'htmlcomponents/footer.php' ?>

</body>
</html>