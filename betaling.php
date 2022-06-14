<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Chocolate Club</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        function disableSubmit() {
            document.getElementById("submit").disabled = true;
        }

        function activateButton(element) {

            document.getElementById("submit").disabled = !element.checked;
        }
    </script>

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="display-5 mb-2 text-center">Gennemfør ordre</h3>
            </div>
            <div class="col-sm-6 mb-3 text-md-left">
                <a href="kurv.php">
                    <i class=""><img src="images/Tegnebræt%208.png" alt="tilbage" width="30"></i></a>
            </div>
        </div>
    </div>



    <form>
        <div class="container bg-light mt-5 py-3 rounded shadow-sm">
            <div class="row">
                <div class="col-12">
                    <h6 class="text-start">Dine oplysninger</h6>
                </div>
            </div>
        </div>
        <div class="container pt-5 shadow-sm">
            <div class="row justify-content-center ">
                <div class="col-12">
                    <div class="row mb-4">
                        <label class="col-6 col-lg-3">
                            <input type="text" class="form-control col-6" id="inputfornavn"
                                   placeholder="Fornavn">
                        </label>
                        <label class="col-6 col-lg-3">
                            <input type="text" class="form-control col-6" id="inputefternavn"
                                   placeholder="Efternavn">
                        </label>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-12 col-lg-6">
                            <input type="text" class=" form-control col-md-auto col-lg-auto" id="inputadr"
                                   placeholder="Adresse">
                        </label>
                    </div>
                    <div class="row mb-4">
                        <label class="col-6 col-lg-3">
                            <input type="text" class="form-control col-6" id="inputfpostnr"
                                   placeholder="Postnr.">
                        </label>
                        <label class="col-6 col-lg-3">
                            <input type="text" class="form-control col-6" id="inputby"
                                   placeholder="By">
                        </label>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-12 col-lg-6">
                            <input type="email" class="form-control col-6" id="inputemail" placeholder="E-mail">
                        </label>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-12 col-lg-6">
                            <input type="email" class="form-control col-6" id="inputemail" placeholder="Gentag e-mail">
                        </label>
                    </div>

                    <div class="row mb-4">
                        <label class="col-6 col-lg-3"><input type="text" class="form-control col-6"
                                                             id="inputtelefon"
                                                             placeholder="Telefon">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="container col-12 d-none d-sm-none d-mg-block d-lg-block">
        <div class="row gx-5 mt-5">
            <div class="col">
                <h6 class="p-2 col-auto text-start bg-light">Mulige afhentningstidspunkter</h6>
            </div>
            <div class="col">
                <h6 class="p-2 text-start bg-light">Vælg betalingsmetode</h6>
            </div>
        </div>
        <div class="row gx-5 align-items-center">
            <div class="col">
                <div class="p-3 shadow-sm">
                    <h5 class="">10:30</h5>
                    <h5 class="">12:30</h5>
                    <h5 class="">14:30</h5>
                    <h5 class="">16:30</h5>
                </div>
            </div>
            <div class="col">
                <div class="p-3 shadow-sm">
                    <div class="d-none d-sm-none d-lg-block"><img
                                src="https://i.imgur.com/OdxcctP.jpg"
                                alt="" width="100"></div>
                    <div class="d-none d-sm-none d-lg-block"><img
                                src="https://i.imgur.com/5TqiRQV.jpg"
                                alt="" width="100"></div>

                    <div class="d-none d-sm-none d-lg-block"><img
                                src="https://i.imgur.com/WIAP9Ku.jpg"
                                alt="" width="100"></div>

                    <div class="d-none d-sm-none d-lg-block"><img
                                src="https://cdn.mobilepay.dk/res-website/img/icon/icon_mp_blue_monochrome.svg" alt=""
                                width="40">
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="container bg-light mt-5 py-2 rounded d-mb-none d-lg-none">
        <div class="row">
            <div class="col-12">
                <h6 class="mb-2 text-start">Mulige afhentnings tidspunkter</h6>
            </div>
        </div>
    </div>
    <div class="container shadow-sm p-5 d-mb-none d-lg-none">
        <div class="row align-items-center">
            <h5 class="col-3  ">10:30</h5>
            <h5 class="col-3  ">12:30</h5>
            <h5 class="col-3  ">14:30</h5>
            <h5 class="col-3 ">16:30</h5>
        </div>
    </div>

    <div class="container bg-light mt-5 py-2 rounded d-mb-none d-lg-none">
        <div class="row">
            <div class="col-12">
                <h6 class="mb-2 text-start">Betalingsmetoder</h6>
            </div>
        </div>
    </div>

    <div class="container shadow-sm p-5 d-mb-none d-lg-none">
        <div class="row align-items-center">
            <div class="col-3 text-center"><img src="https://i.imgur.com/OdxcctP.jpg" alt=""></div>
            <div class="col-3 text-center"><img src="https://i.imgur.com/5TqiRQV.jpg" alt=""></div>
            <div class="col-3 text-center"><img src="https://i.imgur.com/WIAP9Ku.jpg" alt=""></div>
            <div class="col-3 text-center"><img
                        src="https://cdn.mobilepay.dk/res-website/img/icon/icon_mp_blue_monochrome.svg" alt=""
                        width="40"></div>
        </div>
    </div>


    <div class="container bg-light mt-5 py-2 rounded">
        <div class="row">
            <div class="col-12">
                <h6 class="mb-2 text-start">Din bestilling</h6>
            </div>
        </div>
    </div>
    <div class="container py-2 rounded shadow-sm">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row" class="border-0">
                                <div class="p-2">
                                    <img src="images/SoMeA.png" alt="" width="70"
                                         class="img-fluid rounded shadow-sm">
                                    <div class="ml-3 d-inline-block align-middle">
                                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle">Chokolade
                                                fest</a></h5><span
                                                class="text-muted font-weight-normal font-italic d-block">Lækkert chokolade</span>
                                    </div>
                                </div>
                            </th>
                            <th scope="col" class="border-0">
                                <div class="py-2 d-none"></div>
                            </th>
                            <td class="border-0 align-middle"><strong>1</strong></td>
                            <td class="border-0 align-middle">
                            <td class="border-0 align-middle"><strong>85 DKK</strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="">
    <div class="container mt-5 py-2 rounded">
        <div class="row">
            <div class="col-mb-6 col-lg-6 col-xl-6 col-12 ">
                <h6 class="mb-2 text-start bg-light p-3">Din kommentar</h6>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <label><textarea name="" cols="64" rows="3"
                                 class="form-control bg-light">Yaaaas Queen</textarea></label>
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

    <div class="container mt-5 py-2 rounded col-12">
        <div class="row">
            <label class="col-12">
                <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)"> Jeg bekræfter, at jeg
                har læst, forstået og accepteret Chocolate Clubs købsbetingelser.
            </label>
        </div>
    </div>

    <div class="container mt-5 py-2 rounded col-12 text-end">
        <div class="row">
            <div class="col-12">
                <a href="bestilling.php" class=" btn btn-primary mb-4 btn-lg pl-5 pr-5">Bekræft
                    betaling</a>
            </div>
        </div>
    </div>
</section>



</body>
</html>
