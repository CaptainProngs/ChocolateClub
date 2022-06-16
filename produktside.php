<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Produkt side</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/produktside.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Nav -->
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

<figure class="container-fluid">
    <img src="images/produktbanner.webp" width="100%" alt="banner">
</figure>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="Webshop.php">Webshop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produkt side</li>
    </ol>
</nav>

<figure class="container-fluid col-12">
    <div class="row">
        <div class="col-4">
            <a href="Webshop.php">
                <img src="images/pil.png" alt="Tilbage pil"></a>
        </div>
    </div>
</figure>

<section class="container col-12 justify-content-center pt-5">
    <div class="row pt-3 gx-5">

        <figure class="col-12 col-md-6">
            <img src="images/produkter3.webp" class="rounded mx-auto d-block shadow p-0 bg-body rounded" width="400px"
                 alt="produkt">
        </figure>

        <article class="col-6 d-none d-md-block">
            <div class="pt-5">
                <h1>Multishot chocolate</h1>
                <br>
                <h4>85 DKK</h4>
                <br>
                <p>21 lækre håndlavet</p>
                <p>forskellige fyldte mundgodter</p>
            </div>

            <br>

            <div class="pt-lg-5 mt-lg-5">
                <h6>Antal</h6>
                <button type="button" class="btn btn-light btn-outline-secondary">1</button>
                <button type="button" class="btn btn-light btn-outline-secondary">+</button>
                <button type="button" class="btn btn-light btn-outline-secondary">-</button>
            </div>

            <div class="col-6 pt-1">
                <a href="kurv.php">
                    <button type="button" class="btn btn-knapFarve px-4">Læg i kurv</button>
                </a>
            </div>
        </article>
    </div>

    <article class="col-12 d-lg-none d-md-none px-5">
        <div class="pt-5">
            <h1>Multishot chocolate</h1>
            <br>
            <h4>85 DKK</h4>
            <br>
            <p>21 lækre håndlavet</p>
            <p>forskellige fyldte mundgodter</p>
        </div>

        <div class="pt-3">
            <h6>Antal</h6>
            <button type="button" class="btn btn-light btn-outline-secondary">1</button>
            <button type="button" class="btn btn-light btn-outline-secondary">+</button>
            <button type="button" class="btn btn-light btn-outline-secondary">-</button>
        </div>

        <div class="pt-1">
            <a href="kurv.php">
                <button type="button" class="btn btn-knapFarve px-4">Læg i kurv</button>
            </a>
        </div>
    </article>
</section>

<br><br><br><br><br><br>

<section class="container-fluid d-lg-none d-md-none">
    <h3 class="header p-3">Andre kunder har kigget på</h3>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <div class="carousel-inner p-2">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="card mx-auto shadow">
                    <img src="images/Produkter1.webp" class="card-img-top" alt="...">
                    <article class="card-body">
                        <h5 class="card-title">Chokolade bar</h5>
                        <h6 class="card-text">Inspireret af abstrakt maleri.</h6>
                        <p class="card-text">Lavet af Tobias Trads</p>
                    </article>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="card mx-auto shadow">
                    <img src="images/produkter3.webp" class="card-img-top" alt="...">
                    <article class="card-body">
                        <h5 class="card-title">Blandet fine chokolader</h5>
                        <h6 class="card-text">legede chokolade</h6>
                        <p class="card-text">Lavet af Amalie Mikkelsen.</p>
                    </article>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mx-auto shadow">
                    <img src="images/produkter2.webp" class="card-img-top" alt="...">
                    <article class="card-body">
                        <h5 class="card-title">Frederik Wolmar</h5>
                        <p class="card-text">Din begivenhed, er mit mesterværk</p>
                    </article>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<br>

<section class="cards container-fluid d-none d-lg-block d-md-block flex-wrap p-3 m-2">
    <h2 class="header">Andre kunder har kigget på</h2>
    <div class="row">
        <div class="col-lg-3 col-md-6 p-3">
            <div class="card shadow">
                <img src="images/Produkter1.webp" class="card-img-top" alt="product1">
                <article class="card-body">
                    <h5 class="card-title">Chokolade bar</h5>
                    <h6 class="card-text">Inspireret af abstrakt maleri.</h6>
                    <p class="card-text">Lavet af Tobias Trads</p>
                </article>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
            <div class="card shadow">
                <img src="images/produkter3.webp" class="card-img-top" alt="product2">
                <article class="card-body">
                    <h5 class="card-title">Blandet fine chokolader</h5>
                    <h6 class="card-text">legede chokolade</h6>
                    <p class="card-text">Lavet af Amalie Mikkelsen.</p>
                </article>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
            <div class="card shadow">
                <img src="images/produkter2.webp" class="card-img-top" alt="product3">
                <article class="card-body">
                    <h5 class="card-title">Chokolade bar hindbær</h5>
                    <h6 class="card-text">Inspireret af abstrakt maleri.</h6>
                    <p class="card-text">Lavet af Tobias Trads</p>
                </article>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3">
            <div class="card shadow">
                <img src="images/SoMeH.png" class="card-img-top" alt="product4">
                <article class="card-body">
                    <h5 class="card-title">Mint kopper</h5>
                    <h6 class="card-text">Cremet chkolade kopper med et stref af mint</h6>
                    <p class="card-text">Lavet af Amalie Mikkelsen</p>
                </article>
            </div>
        </div>
    </div>
</section>

<br><br>

<figure class="container">
    <div class="row justify-content-end">
        <div class="col-3 ps-2">
            <p>@ChocolateClub</p>
            <img src="images/SoMelogo.png" alt="Sociale Medier">
        </div>
    </div>
</figure>

<!-- footer -->
<a class="nav-link d-lg-none p-0 m-0" href="#"><img src="images/kort.png" alt="Map"></a>
<a class="container-fluid nav-link d-none d-lg-block p-0 m-0" href="#"><img src="images/KortLG.png" alt="largemap"></a>

<nav class="nav bg-footerfarve m-0">
    <div class="row justify-content-evenly mx-auto">

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve p-0" style="">
            <div class="card-body">
                <h5 class="card-title">Chocolate Club</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    Agerskovvej 17,
                    4000 Roskilde</h6>
                <a class="nav-link" href="#"><img src="images/Telefon.png" alt="number">+45 12 34 56 78</a>
                <a class="nav-link" href="#"><img src="images/Mail.png" alt="mail">Mail@cc.dk</a>
            </div>
        </div>

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve p-0" style="">
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

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve p-0" style="">
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
