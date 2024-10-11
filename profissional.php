<?php

session_start();
$_SESSION["page"] = "equipe";

// Simulação de dados vindo de um banco de dados ou array
$profissionais = [
    'Winicius' => [
        'nome' => 'Dr. Winícius Aragão',
        'especialidade' => 'Dentista & Diretor Clínico',
        'registro' => 'Registro CRO: 29927',
        'descricao' => "Dr. Winícius é um dentista com mais de 10 anos de experiência, especializado em odontologia estética...",
        'citacao' => "A odontologia estética vai além da aparência, ela reconstrói a autoestima e melhora a qualidade de vida dos pacientes.",
        'imagem' => './img/winicius.jpeg',
        'formacao' => [
            "Graduado em Odontologia - UFMG",
            "Pós-Graduado em Odontologia do Sono",
            "Pós-Graduado em Laserterapia na Odontologia"
        ],
        'especialidades' => [
            "Especialista em Disfunção Temporomandibular",
            "Especialista em Ortodontia",
            "Invisalign Doctor"
        ],
        'link_instagram' => 'https://www.instagram.com/winiciusaragao/',
        'link_facebook' => '',
        'link_linkedin' => ''
    ]
];

// Pegando o nome do profissional da URL
$profissional_nome = isset($_GET['nome']) ? $_GET['nome'] : 'none';

// Verificando se a chave do profissional existe no array
if (!array_key_exists($profissional_nome, $profissionais)) {
    header("Location: erro.php");
    exit();
}

$profissional = $profissionais[$profissional_nome];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="<?php echo $profissional['nome']; ?> | Clínica Palazzo">
    <meta property="og:url" content="URL">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
    <title><?php echo $profissional['nome']; ?> | Clínica Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/equipe.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="topTitle">
            <h1><?php echo $profissional['nome']; ?></h1>
        </div>
        <section class="container">

            <div class="row mt-3">
                <div class="col-md-4 dados-pessoais">
                    <div class="imagemPro">
                        <img src="<?php echo $profissional['imagem']; ?>" alt="Foto de <?php echo $profissional['nome']; ?>" class="img-fluid">
                    </div>
                    <h2><?php echo $profissional['nome']; ?></h2>
                    <p class="dados"><?php echo !empty($profissional['especialidade']) ? $profissional['especialidade'] : ''; ?></p>
                    <p class="dados"><?php echo !empty($profissional['registro']) ? $profissional['registro'] : ''; ?></p>
                    <div class="redes-botoes">
                        <?php if (!empty($profissional['link_instagram'])) : ?>
                            <a href="<?php echo $profissional['link_instagram']; ?>" target="_blank"><button class="btn btn-social"><i class="fab fa-instagram"></i></button></a>
                        <?php endif; ?>
                        <?php if (!empty($profissional['link_facebook'])) : ?>
                            <a href="<?php echo $professional['link_facebook']; ?>" target="_blank"><button class="btn btn-social"><i class="fab fa-facebook-f"></i></button></a>
                        <?php endif; ?>
                        <?php if (!empty($profissional['link_linkedin'])) : ?>
                            <a href="<?php echo $profissional['link_linkedin']; ?>" target="_blank"><button class="btn btn-social"><i class="fab fa-linkedin-in"></i></button></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="bio-background bloco">
                        <h2 class="bio-title">Sobre</h2>
                        <h3 class="bio-quote">"<?php echo $profissional['citacao']; ?>"</h3>
                        <p class="bio-text">
                            <?php echo nl2br($profissional['descricao']); ?>
                        </p>
                    </div>
                    <!-- Formação -->
                    <div class="formacao bloco">
                        <h3 class="title" style="display: flex; align-items: center;"><i style="margin-right: 10px; font-size: 18px;" class="fa-solid fa-earth-americas"></i>Formação</h3>
                        <ul>
                            <?php foreach ($profissional['formacao'] as $curso) : ?>
                                <li><?php echo $curso; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Especialidades -->
                    <div class="especialidades bloco">
                        <h3 class="title">Especialidades</h3>
                        <ul>
                            <?php foreach ($profissional['especialidades'] as $especialidade) : ?>
                                <li class="globo-icon"><?php echo $especialidade; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
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

    <?php include 'footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="./js/toggle-menu.js"></script>
    <script src="./js/header-effect2.js"></script>
    <script src="./js/message-button.js"></script>

</body>

</html>