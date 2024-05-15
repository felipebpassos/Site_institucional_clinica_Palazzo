<?php

session_start();

$_SESSION["page"] = "tratamentos";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Clínica Palazzo |">
    <meta property="og:description" content="[DESCRIÇÃO DA CLÍNICA]">
    <meta property="og:image" content="URL_DA_IMAGEM_PARA_COMPARTILHAMENTO">
    <meta property="og:url" content="URL">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
    <title>Tratamentos | Clínica Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/tratamentos.css">

    <link rel="stylesheet" href="./phone-number-validation/build/css/intlTelInput.css">
</head>

<body>

    <?php include 'header.php' ?>

    <div class="foto-fixa">
        <img src="./img/odontologia.png" alt="Odontologia Imagem">
    </div>

    <div class="overlay-background"></div>

    <main>

        <section class="transparente">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p></p>
                    </div>
                    <div class="col-6">
                        <h1>Clareamento</h1>
                    </div>
                </div>
            </div>
        </section>div>

        <section class="full">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Estética facial</h1>
                        <img src="./img/facial.png" alt="Estética facial">
                    </div>
                    <div class="col-6">
                        <p></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="transparente">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p></p>
                    </div>
                    <div class="col-6">
                        <h1>Implante</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="full">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Ortodontia</h1>
                        <img src="./img/ortodontia.jpg" alt="Ortodontial (aparelho dental)">
                    </div>
                    <div class="col-6">
                        <p></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="transparente">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p></p>
                    </div>
                    <div class="col-6">
                        <h1>Reabilitação oral</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="full">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Nutrólogo</h1>
                        <img src="" alt="">
                    </div>
                    <div class="col-6">
                        <p></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="transparente">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p></p>
                    </div>
                    <div class="col-6">
                        <h1>Endodontia</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="full">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Estética corporal</h1>
                        <img src="./img/corporal.jpg" alt="Estética corporal">
                    </div>
                    <div class="col-6">
                        <p></p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Div de sobreposição -->
    <div id="overlay" class="overlay"></div>

    <?php include 'footer.php' ?>

    <script src="./js/toggle-menu.js"></script>
    <script src="./js/header-effect2.js"></script>

</body>

</html>