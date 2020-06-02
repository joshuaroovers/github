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

<div class="mb-5 mt-2">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier [characternaam]</h1>
        <div class="align-self-center">
            <a class="btn-lg btn-info text-white" href="">update character</a>
            <a class="btn-lg btn-danger text-white" href="">Delete character x</a>
        </div>
    </div>

    <div class="mt-2">
        <div>
            <div>
                <div class="text-center border">
                    <img class="img-fluid p-1" src="https://via.placeholder.com/150"/>

                    <div class="border-bottom">
                        <strong>Naam: naam</strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Geslacht: geslacht</strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Debut jaar: debut jaar</strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Netto Waarde: $netto waarde</strong>
                    </div>
                    <div>
                        <strong>Show: show/-</strong>
                    </div>
                </div>
            </div>
            <div class="card-text col">
                <p>
                    beschrijving
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