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


    <?php /* check in de post van welk character de gebruiker details wilt */

        for($x = 0; $x < $count; $x++)    
        {
            $postname = ($x+1) . "info";
            /* echo($postname. " "); */
            if(isset($_POST[$postname]))
            {
                $y = $x;
                /* echo("\/".$y."\/"); */
            }
        }

    ?>
<div id="popup" style = "display: none; background-color: rgba(0,0,0,0.5); position: fixed; top: 0; left: 0; width: 100%; height: 100%; padding-top: 200px;">
    <div style = "padding: 20px; text-align: center; background-color: white">
        <h1>Delete Character</h1>
        <p>Weet je het zeker dat je dit character wilt verwijderen?</p>

        <div>
            <form style = "display: inline-block" method = "POST" action="delchar.php">
                <input  class="btn-lg btn-danger text-white" type="submit" name = "<?php echo(($y+1). "del"); ?>" value = "Delete">
            </form>
            <button class ="btn-lg btn-info text-white" onclick="document.getElementById('popup').style.display='none'">Cancel</button>
        </div>
    </div>
</div>

<?php include 'htmlcomponents/nav.php' ?>

<div class="mb-5 mt-2" style = "margin-left: 10%; margin-right: 10%;">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier <?php echo($datachar[0][$y]["name"]); ?></h1>
        <div>
            <form style = "display: inline-block" action = "updateCharacter.php" method = "POST">
                <input class="btn-lg btn-info text-white" name = "<?php echo(($y+1). "upd"); ?>" type = "submit" value = "update character">
            </form>
            <button class="btn-lg btn-danger text-white" onclick="document.getElementById('popup').style.display='block'">delete character x</button>
        </div>
    </div>

    <div class="mt-2" >
        <div>
            <div>
                <div class="text-center border" >
                    <img style = "width: 30%;" class="img-fluid p-1" src="img/<?php echo($datachar[0][$y]["img"]); ?>"/>

                    <div class="border-bottom">
                        <strong>Naam: <?php echo($datachar[0][$y]["name"]); ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Geslacht: <?php echo($datachar[0][$y]["sex"]); ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Debut jaar: <?php echo($datachar[0][$y]["debut_year"]); ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Netto Waarde: <?php echo($datachar[0][$y]["net_worth"]); ?></strong>
                    </div>
                    <div>
                        <strong>Show: <?php if(empty($datachar[0][$y]["showid"])) {echo("N/A");} else{echo($datashows[0][$datachar[0][$y]["showid"]-1]["name"]);} ?></strong>
                    </div>
                </div>
            </div>
            <div class="card-text col">
                <p>
                    <?php echo($datachar[0][$y]["description"]); ?>
                </p>

                <form method="" action="" class="col-3 p-0">

                </form>
            </div>
        </div>
    </div>
    <hr>
</div>

<?php include 'htmlcomponents/footer.php' ?>

</body>
</html>