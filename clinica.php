<?php

session_start();

$_SESSION["page"] = "clinica";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clínica Palazzo - Excelência em estética e odontologia em Aracaju, Sergipe. Oferecemos serviços de implantes dentários, clareamento dental, ortodontia, estética facial e corporal, nutrologia, reabilitação oral e endodontia. Agende sua consulta!">
    <meta name="keywords" content="Clínica Palazzo, estética, odontologia, Aracaju, Sergipe, implantes dentários, clareamento dental, ortodontia, estética facial, estética corporal, nutrologia, reabilitação oral, endodontia, clínica de alto padrão, melhor dentista Aracaju, estética dental Aracaju, tratamentos estéticos Aracaju, clínica de estética Aracaju">
    <meta name="author" content="Desenvolvido por Felipe Barreto Passos | Simplify Web">
    <meta property="og:title" content="A Clínica | Clínica Palazzo">
    <meta property="og:description" content="Clínica Palazzo - Excelência em estética e odontologia em Aracaju, Sergipe. Oferecemos serviços de implantes dentários, clareamento dental, ortodontia, estética facial e corporal, nutrologia, reabilitação oral e endodontia. Agende sua consulta!">
    <meta property="og:image" content="./img/ico2.png">
    <meta property="og:url" content="https://www.clinicapalazzo.com.br/clinica.php">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="A Clínica | Clínica Palazzo">
    <meta name="twitter:description" content="Descubra os serviços de estética e odontologia da Clínica Palazzo em Aracaju, Sergipe. Oferecemos tratamentos de implantes dentários, clareamento dental, ortodontia e mais.">
    <meta name="twitter:image" content="./img/ico2.png">
    <title>A Clínica | Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/clinica.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link rel="stylesheet" href="./phone-number-validation/build/css/intlTelInput.css">
</head>

<body>

    <?php include 'header.php' ?>

    <main>

        <section id="clinica" class="container mt-5">
            <div class="row">
                <div class="col-md-6 mosaico mosaico1 fade-in-element">
                    <!-- Espaço para a imagem -->
                    <img src="./img/mosaico.png" alt="Imagem da Clínica Palazzo" class="img-fluid">
                </div>
                <div class="col-md-6 info" style="margin-right:0; padding:0;">
                    <h1 class="titulo titulo-clinica fade-in-element">A clínica Palazzo</h1>
                    <div class="mosaico mosaico2 fade-in-element">
                        <!-- Espaço para a imagem -->
                        <img src="./img/mosaico.png" alt="Imagem da Clínica Palazzo" class="img-fluid">
                    </div>
                    <p class="texto-clinica fade-in-element">
                        Localizada no bairro Jardins em Aracaju, nossa clínica de alto padrão
                        oferece um ambiente moderno e aconchegante, projetado para proporcionar conforto e tranquilidade a todos os nossos
                        pacientes. Desde o momento em que você entra, será recebido por nossa equipe de atendimento e recepção acolhedoras,
                        sempre prontas para garantir que sua experiência conosco seja excepcional.<br><br>
                        Equipados com aparelhos e tecnologias de ponta, estamos comprometidos em oferecer tratamentos de alta qualidade e
                        precisão. Nossa abordagem de atendimento humanizado garante que cada paciente receba cuidado personalizado e
                        atencioso, respeitando suas necessidades individuais. Venha nos visitar e descubra como podemos ajudar a transformar
                        sua saúde e bem-estar com nossos serviços especializados.<br><br>
                    </p>
                    <!-- Botões lado a lado -->
                    <div class="d-flex fade-in-element">
                        <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta%20%" target="_blank"><button type="button" class="btn-2" id="agendar">Agendar consulta</button></a>
                        <a href="tratamentos.php"><button type="button" class="btn-2">Serviços</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="ambientes" class="container mt-5">
            <h1 class="titulo text-center titulo-espaco fade-in-element">Nosso espaço</h1>
            <p class="text-center fade-in-element" style="margin: auto; margin-bottom: 100px;">Nossos ambientes cuidadosamente planejados incluem salas de espera espaçosas e confortáveis, consultórios modernos equipados com as mais recentes tecnologias.</p>
            <!-- Galeria de fotos -->
            <div class="row fade-in-element">
                <div class="img-card">
                    <div class="overlay-img"></div>
                    <img src="./img/room1.jpeg" alt="Descrição da imagem 1" class="img-fluid">
                </div>
                <div class="img-card">
                    <div class="overlay-img"></div>
                    <img src="./img/room2.jpeg" alt="Descrição da imagem 2" class="img-fluid">
                </div>
                <div class="img-card">
                    <div class="overlay-img"></div>
                    <img src="./img/room3.jpeg" alt="Descrição da imagem 3" class="img-fluid">
                </div>
                <!-- Adicione mais colunas conforme necessário -->
            </div>
            <div class="row fade-in-element">
                <div class="img-card">
                    <div class="overlay-img"></div>
                    <img src="./img/room4.jpeg" alt="Descrição da imagem 1" class="img-fluid">
                </div>
                <div class="img-card">
                    <div class="overlay-img"></div>
                    <img src="./img/room5.jpeg" alt="Descrição da imagem 2" class="img-fluid">
                </div>
                <div class="img-card">
                    <div class="overlay-img"></div>
                    <img src="./img/room6.jpeg" alt="Descrição da imagem 3" class="img-fluid">
                </div>
                <!-- Adicione mais colunas conforme necessário -->
            </div>
        </section>



    </main>

    <!-- Div de sobreposição -->
    <div id="overlay" class="overlay"></div>

    <!-- Overlay e imagem maximizada -->
    <div id="img-overlay" class="img-overlay">
        <img id="max-img" class="max-img" src="" alt="Imagem maximizada">
        <button id="close-btn" class="close-btn">&times;</button>
    </div>

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
    <script src="./js/proporcao.js"></script>
    <script src="./js/max-img.js"></script>

</body>

</html>