<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Toets CRUD Blok 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php include 'htmlcomponents/nav.php' ?>


<div class="mb-5 mt-2" style = "margin-left: 25%; margin-right: 25%;">
    <h1>Maak hier een nieuw character</h1>
    <form method="POST" action="createchar.php">
        <div>
            <div>Naam:</div>
            <input style = "width: 100%" name = "name" value = "">
        </div>
        <div>
            <div>Afbeelding:</div>
            <input style = "width: 100%" name = "img" value = "">
        </div>
        <div>
            <div>Geslacht:</div>
            <input style = "width: 100%" name = "gen" value = "">
        </div>
        <div>
            <div>Debut jaar:</div>
            <input style = "width: 100%" name = "debut" value = "">
        </div>
        <div>
            <div>Netto waarde:</div>
            <input style = "width: 100%" name = "net" value = "">
        </div>
        <div>
            <div>Beschrijving:</div>
            <textarea rows = "5"; cols = "104%" name = "desc" ></textarea>
        </div>
        
        <input class = "btn-lg btn-info text-white" name = "create" type = "submit" value = "Maak aan!">
        

    </form>
</div>

<?php include 'htmlcomponents/footer.php' ?>


</body>
</html>