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
                <a class="nav-link active" aria-current="page" href="Webshop.php">Shop</a>
                <a class="nav-link" href="#">Chocolatiers</a>
                <a class="nav-link" href="#">Kontakt</a>
                <a class="nav-link" href="404.php">Speciel bestilling</a>
            </div>
        </div>
    </div>
</nav>


<a class="nav-link pil justify-content-start" href="index.html"><img src="images/pil.png" alt="tilbage"></a>
<div class="container-fluid">
    <div class="row">
        <div class="col justify-content-lg-start">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Startside</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Webshop</li>
                </ol>
            </nav>
        </div>

        <div class="col justify-content-end"><h1>Webshop</h1></div>
    </div>
</div>


<div class="container-fluid p-0 mt-3">
    <img src="images/Chokolade%20banner.png" alt="Hero">
</div>
<div class="container-fluid ms-2 mt-2">
    <h3>Click & Collect</h3>
    <p>Her kan du købe til alle stunder, hurtigt og bekvemt, eller til de særlige</p>
    <p>begivenheder, kan der bestilles specielt lavet chokolade længere ned på siden. </p>
</div>

<div class="container-fluid sorter">
    <div class="row justify-content-end">
        <div class="col-auto">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-light text-dark" type="button"
                        id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Sortering
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Populære</a></li>
                    <li><a class="dropdown-item" href="#">Pris faldende</a></li>
                    <li><a class="dropdown-item" href="#">Pris Stigende</a></li>
                </ul>
            </div>
        </div>
        <div class="col-auto p-0">
            <a class="nav-link justify-content-end p-0" href="#"><img src="images/Sorterikon.png" alt="sorter"></a>
        </div>
    </div>
</div>

<!-- cards/ product Lg -->
<div class="cards container-fluid flex-wrap p-5">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/produkter2.webp" class="card-img-top" alt="product1"></a>
                <div class="card-body">
                    <h5 class="card-title">Hindbær myrtille 55 kr,-</h5>
                    <h6 class="card-text">Chokolade bygget på de modneste hindbær og blåbær, er dette en lækker smagsoplevelse, der skal prøves. </h6>
                    <p class="card-text">Lavet af Tobias Trads</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/produkter3.webp" class="card-img-top" alt="product2"></a>
                <div class="card-body">
                    <h5 class="card-title">Multishot chocolate 85 kr,-</h5>
                    <h6 class="card-text">21 lækre håndlavet forskellige fyldte mundgodter, alt fra karamel fyld, mint, hindbær med lakrids. En god samling til de hyggelige stunder.</h6>
                    <p class="card-text">Lavet af Amalie Mikkelsen.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/Produkter1.webp" class="card-img-top" alt="product3"></a>
                <div class="card-body">
                    <h5 class="card-title">Macula 55 kr,-</h5>
                    <h6 class="card-text">60% chokolade i en plettet indpakke, som rummer en mangfoldig smagsoplevelse, der lever op til de festlige farver, der pryder den. </h6>
                    <p class="card-text">Lavet af Tobias Trads</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/Produkter6.webp" class="card-img-top" alt="product4"></a>
                <div class="card-body">
                    <h5 class="card-title">Purple delight 77 kr,-</h5>
                    <h6 class="card-text">16 forskellige håndlavet eksklusive chokolader, lige til en fin værtindegave eller til egen slikmund, hvis det er det man lyster. </h6>
                    <p class="card-text">Lavet af Amalie Mikkelsen</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/produkter9.webp" class="card-img-top" alt="product5"></a>
                <div class="card-body">
                    <h5 class="card-title">Montagne 95 kr,-</h5>
                    <h6 class="card-text">Chokolade i spændende former og udsøgte smage. Til dig som er til det lidt anderledes.</h6>
                    <p class="card-text">Lavet af Frederik Wolmar</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/produkter10.webp" class="card-img-top" alt="product6"></a>
                <div class="card-body">
                    <h5 class="card-title">Mint tree 45 kr,-</h5>
                    <h6 class="card-text">En minty oplevelse til dem som godt kan lide det udsøgte. Med mynte blade, mørk chokolade på toppen og lækkert chokolademousse i midten, er denne en særdeles god dessert.</h6>
                    <p class="card-text">Lavet af Amalie Mikkelsen</p>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>

<div class="container-fluid d-none d-md-block p-0 mt-3">
    <img src="images/specielbestillingbanner1.png" alt="Hero">
</div>

<div class="container-fluid d-lg-none d-md-none p-0 mt-3">
    <img src="images/specielbestillingbanner%20mobil1.png" alt="Hero">
</div>
<div class="container-fluid ms-2 mt-3">
    <h6>Til enhver særlig begivenheder, står Frederik Volmar til rådighed, med sine kunstfærdigheder.</h6>
    <h6>For mere information eller et tilbud, kontakt os via bestilling.</h6>
</div>


<!-- cards/ Speciel -->
<div class="cards container-fluid flex-wrap p-5 mx-auto justify-content-center">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/produkt4.webp" class="card-img-top" alt="product7"></a>
                <div class="card-body">
                    <h5 class="card-title">Fyldt calvaria</h5>
                    <h6 class="card-text">Lækre chokolade kranium med valnød i midten, er dette en sjov lille bid, til de skønne aftener eller til fx. halloween. </h6>
                    <p class="card-text">Lavet af Frederik Wolmar</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/Produkt5.webp" class="card-img-top" alt="product8"></a>
                <div class="card-body">
                    <h5 class="card-title">Golden terra delight</h5>
                    <h6 class="card-text">Chokolade æg, der kan specielt bestilles. </h6>
                    <p class="card-text">Lavet af Frederik Wolmar</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-10 p-3 mx-auto">
            <div class="card shadow">
                <a href="produktside.php"><img src="images/produkt7.webp" class="card-img-top" alt="product9"></a>
                <div class="card-body">
                    <h5 class="card-title">Mint tree</h5>
                    <h6 class="card-text">En minty oplevelse til dem som godt kan lide det udsøgte. Med mynte blade, mørk chokolade på toppen og lækkert chokolademousse i midten, er denne en særdeles god dessert.   </h6>
                    <p class="card-text">Lavet af Frederik Wolmar</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 py-2 rounded col-12 text-center">
    <div class="row">
        <div class="col-12">
            <a href="" class=" btn btn-knapFarve mb-4 btn-lg pl-5 pr-5">BESTIL</a>
        </div>
    </div>
</div>

<br><br>

<!-- FOOTER -->
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
