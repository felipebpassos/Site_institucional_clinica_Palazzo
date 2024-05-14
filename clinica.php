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
                <div class="col-md-6" style="padding:0;">
                    <!-- Espaço para a imagem -->
                    <img src="URL_DA_IMAGEM" alt="Imagem da Clínica Palazzo" class="img-fluid">
                </div>
                <div class="col-md-6" style="margin-right:0; padding:0;">
                    <h1 class="titulo titulo-clinica">A clínica Palazzo</h1>
                    <p class="texto-clinica">
                        Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia. Transforme sua vida restaurando a estabilidade e a beleza natural dos seus
                        dentes. Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia. Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia. Transforme sua vida restaurando a estabilidade e a beleza natural dos seus
                        dentes. Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia.<br><br>
                        Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia. Transforme sua vida restaurando a estabilidade e a beleza natural dos seus
                        dentes. Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                        tecnologia.<br><br>
                    </p>
                    <!-- Botões lado a lado -->
                    <div class="d-flex">
                        <a href="index.php#contato"><button type="button" class="btn-2">Agendar consulta</button></a>
                        <a href="tratamentos.php"><button type="button" class="btn-2">Serviços</button></a>
                        <a href="equipe.php"><button type="button" class="btn-2">Equipe</button></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="ambientes" class="container mt-5">
            <h1 class="titulo text-center">Nosso espaço</h1>
            <p class="text-center" style="margin: auto;">Um breve texto explicativo sobre os diferentes ambientes disponíveis na clínica, destacando as características especiais e conforto.</p>
            <!-- Galeria de fotos -->
            <div class="row" style="margin-top: 100px;">
                <div class="img-card">
                    <img src="URL_DA_IMAGEM1" alt="Descrição da imagem 1" class="img-fluid">
                </div>
                <div class="img-card">
                    <img src="URL_DA_IMAGEM2" alt="Descrição da imagem 2" class="img-fluid">
                </div>
                <div class="img-card">
                    <img src="URL_DA_IMAGEM3" alt="Descrição da imagem 3" class="img-fluid">
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

</body>

</html>