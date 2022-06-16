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
                <a class="nav-link active" aria-current="page" href="Webshop.php">Shop</a>
                <a class="nav-link" href="#">Chocolatiers</a>
                <a class="nav-link" href="#">Kontakt</a>
                <a class="nav-link" href="404.php">Speciel bestilling</a>
            </div>
        </div>
    </div>
</nav>

<figure class="container-fluid p-0">
    <img src="images/Chokolade%20banner.png" width="100%" alt="banner">
</figure>

<figure class="container-fluid col-12">
    <div class="row">
        <div class="col-4">
            <a href="Webshop.php">
                <img src="images/pil.png" alt="Tilbage pil"></a>
        </div>
    </div>
</figure>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="Webshop.php">Webshop</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produkt side</li>
    </ol>
</nav>

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

<!-- sm carousel produkt -->
<div class="container-fluid d-lg-none d-md-none">
    <h3 class="header p-2 mt-3">Andre kunder har kigget på</h3>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <div class="carousel-inner p-2">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="card mx-auto shadow">
                    <img src="images/produkter2.webp" class="card-img-top" alt="Produkt1">
                    <div class="card-body">
                        <h5 class="card-title">Hindbær myrtille</h5>
                        <h6 class="card-text">Chokolade bygget på de modneste hindbær og blåbær, er dette en lækker smagsoplevelse, der skal prøves.</h6>
                        <p class="card-text">Lavet af Tobias Trads</p>
                    </div>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="card mx-auto shadow">
                    <img src="images/produkter3.webp" class="card-img-top" alt="Produkt2">
                    <div class="card-body">
                        <h5 class="card-title">Multishot chocolate</h5>
                        <h6 class="card-text">21 lækre håndlavet forskellige fyldte mundgodter, alt fra karamel fyld, mint, hindbær med lakrids. En god samling til de hyggelige stunder.</h6>
                        <p class="card-text">Lavet af Amalie Mikkelsen.</p>
                    </div>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mx-auto shadow">
                    <img src="images/Produkter1.webp" class="card-img-top" alt="Produkt3">
                    <div class="card-body">
                        <h5 class="card-title">Macula</h5>
                        <h6 class="card-text">60% chokolade i en plettet indpakke, som rummer en mangfoldig smagsoplevelse, der lever op til de festlige farver, der pryder den.</h6>
                        <p class="card-text">Lavet af Tobias Trads</p>
                    </div>
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
</div>
<br>

<!-- cards/ product Lg -->
<div class="cards container-fluid d-none d-lg-block d-md-block flex-wrap p-3 m-4">
    <h2 class="header">Andre kunder har kigget på</h2>
    <div class="row mx-auto">
        <div class="col-lg-3 col-md-6 p-3 mx-auto">
            <div class="card shadow">
                <img src="images/produkter2.webp" class="card-img-top" alt="Produkt1">
                <div class="card-body">
                    <h5 class="card-title">Hindbær myrtille</h5>
                    <h6 class="card-text">Chokolade bygget på de modneste hindbær og blåbær, er dette en lækker smagsoplevelse, der skal prøves.</h6>
                    <p class="card-text">Lavet af Tobias Trads</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3 mx-auto">
            <div class="card shadow">
                <img src="images/produkter3.webp" class="card-img-top" alt="Produkt2">
                <div class="card-body">
                    <h5 class="card-title">Multishot chocolate</h5>
                    <h6 class="card-text">21 lækre håndlavet forskellige fyldte mundgodter, alt fra karamel fyld, mint, hindbær med lakrids. En god samling til de hyggelige stunder.</h6>
                    <p class="card-text">Lavet af Amalie Mikkelsen.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3 mx-auto">
            <div class="card shadow">
                <img src="images/Produkter1.webp" class="card-img-top" alt="Produkt3">
                <div class="card-body">
                    <h5 class="card-title">Macula</h5>
                    <h6 class="card-text">60% chokolade i en plettet indpakke, som rummer en mangfoldig smagsoplevelse, der lever op til de festlige farver, der pryder den.</h6>
                    <p class="card-text">Lavet af Tobias Trads</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/produkter9.webp" class="card-img-top" alt="product7"></a>
                <div class="card-body">
                    <h5 class="card-title">Montagne</h5>
                    <h6 class="card-text">Chokolade i spændende former og udsøgte smage. Til dig som er til det lidt anderledes.</h6>
                    <p class="card-text">Lavet af Frederik Wolmar</p>
                </div>
            </div>
        </div>
    </div>
</div>

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
