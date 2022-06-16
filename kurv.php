<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Chocolate Club</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/kurv.scss" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light">
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

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row w-100">
                    <h3 class="display-5 mb-2 text-center">Indkøbskurv</h3>
                    <p class="mb-5 text-center">
                        <i class="text-info font-weight-bold">1</i> Vare i din kurv</p>
                    <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                        <a href="Webshop.php">
                            <i class=""><img src="images/pil.png" alt="tilbage" width="30"></i></a>
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Produkt</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kurv</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container bg-light mt-5 py-2 rounded">
            <div class="row">
                <div class="col-6">
                    <h4 class="mb-2 text-start">Produkt</h4>
                </div>
                <div class="col-2">
                    <h5 class="mb-2 text-center">Antal</h5>
                </div>
                <div class="col-2">
                    <h6 class="mb-2"></h6>
                </div>
                <div class="col-2">
                    <h5 class="mb-2 text-center">Pris</h5>
                </div>
            </div>
        </div>
        <div class="container py-2 rounded shadow-sm">
            <div class="container mt-5 py-2 rounded">
                <div class="row">
                    <div class="col-6">
                        <div class="p-2">
                            <img src="images/produkter3.webp" alt="" width="100"
                                 class="img-fluid">
                            <div class="ml-3 d-inline-block align-middle">
                                <h5 class="mb-0"><a href="#" class="text-dark align-middle">Multishot chocolate</a></h5><span
                                        class="text-muted font-weight-normal font-italic d-block">21 lækre håndlavet forskellige fyldte mundgodter</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <h5 class="mb-2 text-center">1</h5>
                    </div>
                    <div class="col-2 border-0 align-middle "><img src="images/spand.png" alt="fjern"
                                                                   width="30 px"></div>
                    <div class="col-2">
                        <h5 class="mb-2 text-center">85 DKK</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-2">
            <div class="row">
                <div class="col-4 col-md-3 col-lg-2 py-2 bg-light rounded shadow-sm">Click & Collect</div>
                <div class="col-1"></div>
                <div class="col-4 col-md-3 col-lg-2 py-2 bg-light rounded shadow-sm"> Levering</div>
                <div class="col-3 col-md-6 col-lg-8"></div>
                <div class="col-3 col-md-6 col-lg-8 "></div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container mt-5 py-2 rounded">
        <div class="row">
            <div class="col-mb-6 col-lg-6 col-xl-6 col-12 ">
                <h5 class="mb-2 text-start bg-light p-3">Kommentar til ordren</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <label style="width: 100% !important;">
                    <textarea class="form-control" name="" cols="64" rows="3"
                              style="width: 100% !important;"></textarea></label>
            </div>
        </div>
    </div>

    <div class="container mt-5 py-2 col-mb-12 col-lg-12">
        <div class="row">
            <div class="col-12">
                <h4 class="text-end flex-semibold">Subtotal</h4>
                <h1 class="text-end fw-bold">85 DKK</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 py-2 rounded col-12 text-end">
        <div class="row">
            <div class="col-12">
                <h5>Gå til næste side for at vælge afhentningstidspunkt</h5>
                <br>
                <a href="betaling.php" class=" btn btn-primary mb-4 btn-lg pl-5 pr-5">Gå til
                    betaling</a>
            </div>
        </div>
    </div>
</section>

<br><br><br>

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
