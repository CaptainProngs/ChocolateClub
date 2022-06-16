<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>404</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/404.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href="index.html"><img src="images/Logo.png" alt="Home"></a>
        <div class="order-lg-last d-flex">
            <a class="nav-link " href="kurv.php"><img src="images/Kurv.png" alt="cart"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Shop</a>
                <a class="nav-link" href="chocolatiers.php">Chocolatiers</a>
                <a class="nav-link" href="Kontakt.php">Kontakt</a>
                <a class="nav-link" href="#">Speciel bestilling</a>
            </div>
        </div>
    </div>
</nav>

<div class="container col-12 justify-content-center">
    <div class="row">
        <div class="col-6 pt-5">
            <h1>404</h1>
            <h2>hov der skete en fejl</h2>
            <br>
            <h5>chokoladen smeltede</h5>
            <br>
            <h5>klik på home lige nu</h5>

            <a href="index.html">
            <div class="pt-4">
                <button type="button" class="btn btn-knapFarve px-5">HOME</button></a>
            </div>
        </div>

        <div class="col-6">
            <img src="images/404.webp" class="rounded mx-auto d-block" width="400px" alt="produkt">
        </div>
    </div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
