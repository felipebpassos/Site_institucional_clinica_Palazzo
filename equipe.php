<?php

session_start();

$_SESSION["page"] = "equipe";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conheça nosso time de especialistas que 
            te ajudarão a trazer de volta seu sorriso.">
    <meta name="keywords" content="Clínica Palazzo, estética, odontologia, Aracaju, Sergipe, implantes dentários, clareamento dental, ortodontia, estética facial, estética corporal, nutrologia, reabilitação oral, endodontia, clínica de alto padrão, melhor dentista Aracaju, estética dental Aracaju, tratamentos estéticos Aracaju, clínica de estética Aracaju">
    <meta name="author" content="Desenvolvido por Felipe Barreto Passos | Simplify Web">
    <meta property="og:title" content="Equipe | Clínica Palazzo">
    <meta property="og:description" content="Conheça nosso time de especialistas que 
            te ajudarão a trazer de volta seu sorriso.">
    <meta property="og:image" content="./img/ico2.png">
    <meta property="og:url" content="https://www.clinicapalazzo.com.br/equipe.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Equipe | Clínica Palazzo">
    <meta name="twitter:description" content="Descubra os serviços de estética e odontologia da Clínica Palazzo em Aracaju, Sergipe. Oferecemos tratamentos de implantes dentários, clareamento dental, ortodontia e mais.">
    <meta name="twitter:image" content="./img/ico2.png">
    <title>Equipe | Clínica Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/equipe.css">

    <link rel="stylesheet" href="./phone-number-validation/build/css/intlTelInput.css">
</head>

<body>

    <?php include 'header.php' ?>

    <main>

        <section class="profissionais container mt-5">
            <h1 class="titulo text-center titulo-equipe fade-in-element">Nossos especialistas</h1>
            <p class="text-center fade-in-element" style="margin: auto; margin-bottom: 100px;">Conheça nosso time de especialistas que 
            te ajudarão a trazer de volta seu sorriso.</p>
            <div class="row fade-in-element">
                <!-- Card do Profissional 1 -->
                <div class="col-md-4">
                    <a href="profissional.php?nome=Winicius" class="card text-decoration-none text-dark">
                        <img src="./img/winicius2.jpeg" class="card-img-top" alt="Dr. Winícius Aragão">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Winícius Aragão</h5>
                            <p class="card-text">Especialista em implante<br>e prótese dentária</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="profissional.php?nome=Paula" class="card text-decoration-none text-dark">
                        <img src="./img/paula.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Dra. Gabriella Leite Souza</h5>
                            <p class="card-text">Especialista em nutrologia</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="profissional.php?nome=Amara" class="card text-decoration-none text-dark">
                        <img src="./img/amara2.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Dra. Amara Oliveira</h5>
                            <p class="card-text">Especialista em endodontia<br>(canal)</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="profissional.php?nome=Ellen" class="card text-decoration-none text-dark">
                        <img src="./img/ellen2.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Ellen Santana</h5>
                            <p class="card-text">Especialista em<br>harmonização facial</p>
                        </div>
                    </a>
                </div>

                <!-- Card do Profissional 3 -->
                <div class="col-md-4">
                    <a href="profissional.php?nome=Renatha" class="card text-decoration-none text-dark">
                        <img src="./img/renatha.jpg" class="card-img-top" alt="Dra. Renata Andrade">
                        <div class="card-body">
                            <h5 class="card-title">Dra. Renatha Andrade</h5>
                            <p class="card-text">Especialista em clareamento<br>dental e limpeza</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- Div de sobreposição -->
    <div id="overlay" class="overlay"></div>

    <div class="message-box">
        <span class="texto">Fale conosco<span class="close">x</span></span>
    </div>

    <div class="whatsapp-box">
        <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta%20%" class="whatsapp-button" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
            <span>Contato</span>
        </a>
    </div>

    <?php include 'footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="./js/toggle-menu.js"></script>
    <script src="./js/header-effect2.js"></script>
    <script src="./js/message-button.js"></script>
    <script src="./js/fade-in-element.js"></script>

</body>

</html>