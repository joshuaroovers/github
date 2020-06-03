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

<div class="mb-5 mt-2" style = "margin-left: 10%; margin-right: 10%;">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier alle characters</h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="createCharacter.php">Nieuw character +</a>
    </div>

    <?php

    echo("<form action = \"character.php\" method = \"POST\">");
    for($x = 0; $x < $count; $x++)
    {
        echo(
            "<div class=\"mt-2\" style =\" width: 48%; height: 100%; vertical-align: top; display: inline-block;\">
                <div class=\"card\">
                    <img class=\"card-img-top img-fluid\" src=\"img/".$datachar[0][$x]["img"]. "\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">".$datachar[0][$x]["name"]."</h4>
                        <p class=\"card-text\">
                            ".$datachar[0][$x]["description"]."
                        </p>
                        <input class=\"btn btn-primary\"value = \"Meer details\" type = \"submit\" name = \"".$datachar[0][$x]["id"]."info\">
                    </div>
                </div>
            </div>
            "
        );
    }
    echo("</form>")
    

    ?>

    
</div>

<?php include 'htmlcomponents/footer.php' ?>

</body>
</html>