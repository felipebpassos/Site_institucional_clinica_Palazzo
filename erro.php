<?php
session_start();
$_SESSION["page"] = "erro";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Erro 404 | Clínica Palazzo">
    <meta property="og:description" content="A Clínia Palazzo é o espaço onde a excelência se une ao cuidado, visando aprimorar sua
                        experiência e autoestima. Estamos aqui para oferecer um serviço de alta qualidade, focado em atender às suas necessidades
                        de forma humanizada.">
    <meta property="og:url" content="URL">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
    <title>Erro 404 | Clínica Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <main>
        <div class="container text-center mt-5">
            <h1>Erro 404 - Página não encontrada</h1>
            <p class="mt-4">Desculpe, a página que você está procurando não existe ou ocorreu um erro inesperado.</p>
            <a href="index.php" class="btn-primary mt-3">Voltar para a página inicial</a>
        </div>
    </main>

</body>

</html>
