<?php

session_start();

$_SESSION["page"] = "clinica";

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
                        Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia. Transforme sua vida restaurando a estabilidade e a beleza natural dos seus
                        dentes. Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia. Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia.<br><br>
                        Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia. Transforme sua vida restaurando a estabilidade e a beleza natural dos seus
                        dentes. Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia.<br><br>
                    </p>
                    <!-- Botões lado a lado -->
                    <div class="d-flex fade-in-element">
                        <a href="index.php#contato"><button type="button" class="btn-2" id="agendar">Agendar consulta</button></a>
                        <a href="tratamentos.php"><button type="button" class="btn-2">Serviços</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="ambientes" class="container mt-5">
            <h1 class="titulo text-center titulo-espaco fade-in-element">Nosso espaço</h1>
            <p class="text-center fade-in-element" style="margin: auto; margin-bottom: 100px;">Um breve texto explicativo sobre os diferentes ambientes disponíveis na clínica, destacando as características especiais e conforto.</p>
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

    <?php include 'footer.php' ?>

    <script src="./js/toggle-menu.js"></script>
    <script src="./js/header-effect2.js"></script>
    <script src="./js/fade-in-element.js"></script>
    <script src="./js/proporcao.js"></script>

</body>

</html>