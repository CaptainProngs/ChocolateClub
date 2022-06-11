<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Chocolate Club shop</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
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

<div class="container-fluid p-0 mt-3">
    <img src="images/Chokolade%20banner.png" alt="Hero">
</div>

<br><br>

<div class="container-fluid p-0 mt-3">
    <img src="images/Chokolade%20banner.png" alt="Hero">
</div>

<br><br>




<!-- FOOTER -->
<a class="nav-link d-lg-none p-0 m-0" href="#"><img src="images/kort.png" alt="Map"></a>
<a class="container-fluid nav-link d-none d-lg-block p-0 m-0" href="#"><img src="images/KortLG.png" alt="largemap"></a>

<nav class="nav bg-footerfarve">
    <div class="row justify-content-evenly">

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Chocolate Club</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    Agerskovvej 17,
                    4000 Roskilde</h6>
                <a class="nav-link" href="#"><img src="images/Telefon.png" alt="number">+45 12 34 56 78</a>
                <a class="nav-link" href="#"><img src="images/Mail.png" alt="mail">Mail@cc.dk</a>
            </div>
        </div>

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Åbningstider</h5>
                <p class="card-text">
                    Mandag - torsdag</p>
                <p class="card-text">
                    12:00 - 16:30</p><br>
                <p class="card-text">
                    Fredag - søndag</p>
                <p class="card-text">
                    11:00 - 19:00</p>
            </div>
        </div>

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Kundeservice</h5>
                <a class="nav-link p-0" href="#">Fragt og levering</a>
                <a class="nav-link p-0" href="#">Bytte- og returret</a>
                <a class="nav-link p-0" href="#">Handelsbetingelser</a>
                <a class="nav-link p-0" href="#">Reklamation</a>
                <a class="nav-link p-0" href="#">Persondatapolitik</a>
                <a class="nav-link p-0" href="#">Fødevarestyrelsen</a>
                <a class="nav-link p-0" href="#">Bæredygtighed</a>
                <a class="nav-link p-0" href="#">Gavekort og tilgodebeviser</a>
                <a class="nav-link p-0" href="#">Om os</a>
                <a class="nav-link p-0" href="#">Q&A</a>
                <a class="nav-link p-0" href="#">Cookies</a>
            </div>
        </div>

    </div>
</nav>

<div class="container justify-content-center rettighed">
    <div class="row p-3">
        <img src="images/rettigheder.png" alt="copyrights">
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
