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

        <?php
            for($x = 0; $x < $count; $x++)    
                {
                    $postname = ($x+1) . "upd";
                    /* echo($postname. " "); */
                    if(isset($_POST[$postname]))
                    {
                        $y = $x;
                        /* echo("\/".$y."\/"); */
                    }
                }
        ?>
        <div class="mb-5 mt-2" style = "margin-left: 25%; margin-right: 25%;">
            <h1>Update hier <?php echo($datachar[0][$y]["name"]); ?></h1>
            <form method="POST" action="upchar.php">
                <div>
                    <div>Naam:</div>
                    <input style = "width: 100%" name = "name" value = "<?php echo($datachar[0][$y]["name"]); ?>">
                </div>
                <div>
                    <div>Afbeelding:</div>
                    <input style = "width: 100%" name = "img" value = "<?php echo($datachar[0][$y]["img"]); ?>">
                </div>
                <div>
                    <div>Geslacht:</div>
                    <input style = "width: 100%" name = "gen" value = "<?php echo($datachar[0][$y]["sex"]); ?>">
                </div>
                <div>
                    <div>Debut jaar:</div>
                    <input style = "width: 100%" name = "debut" value = "<?php echo($datachar[0][$y]["debut_year"]); ?>">
                </div>
                <div>
                    <div>Netto waarde:</div>
                    <input style = "width: 100%" name = "net" value = "<?php echo($datachar[0][$y]["net_worth"]); ?>">
                </div>
                <div>
                    <div>Beschrijving:</div>
                    <textarea rows = "5"; cols = "104%" name = "desc" ><?php echo($datachar[0][$y]["description"]); ?></textarea>
                </div>
                
                <input class = "btn-lg btn-info text-white" name = <?php echo($datachar[0][$y]["id"] . "update"); ?> type = "submit" value = "update">
                

            </form>
        </div>

        <?php include 'htmlcomponents/footer.php' ?>


    </body>
</html>