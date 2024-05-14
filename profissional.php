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
    ],
    'Ingrid' => [
        'nome' => 'Dra. Ingrid Oliveira',
        'especialidade' => 'Ortodontista',
        'registro' => 'Registro CRO: 23345',
        'descricao' => "Dra. Ingrid Oliveira é especializada em ortodontia, oferecendo tratamentos com aparelhos convencionais e estéticos...",
        'citacao' => "Cada sorriso que moldamos é uma história de sucesso que compartilhamos.",
        'imagem' => './img/ingrid.jpg',
        'formacao' => [
            "Graduada em Odontologia pela USP",
            "Mestrado em Ortodontia pela USP",
            "Certificação em Invisalign"
        ],
        'especialidades' => [
            "Ortodontia",
            "Ortodontia Estética",
            "Invisalign Doctor"
        ],
        'link_instagram' => 'https://www.instagram.com/ingrid/',
        'link_facebook' => 'https://www.facebook.com/ingrid/',
        'link_linkedin' => 'https://www.linkedin.com/in/ingrid/'
    ],
    'Renata' => [
        'nome' => 'Dra. Renata Andrade',
        'especialidade' => 'Ortodontista',
        'registro' => 'Registro CRO: 22245',
        'descricao' => "Dra. Renata Andrade é uma renomada ortodontista com mais de 15 anos de experiência, graduada pela Universidade de São Paulo...",
        'citacao' => "A ortodontia não é apenas sobre dentes, é sobre mudar vidas através de melhorias na autoestima.",
        'imagem' => './img/renata.jpg',
        'formacao' => [
            "Graduada em Odontologia pela USP",
            "Especialista em Ortodontia pela USP",
            "Doutorado em Ciências Odontológicas pela USP"
        ],
        'especialidades' => [
            "Especialista em Ortodontia",
            "Tratamento de Disfunções Temporomandibulares",
            "Terapia com Laser de baixa intensidade"
        ],
        'link_instagram' => 'https://www.instagram.com/renata/',
        'link_facebook' => 'https://www.facebook.com/renata/',
        'link_linkedin' => 'https://www.linkedin.com/in/renata/'
    ]
];

// Pegando o nome do profissional da URL
$profissional_nome = $_GET['nome'] ?? 'Winicius'; // Default para 'Winicius' se nenhum nome for passado
$profissional = $profissionais[$profissional_nome];

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

    <?php include 'footer.php'; ?>

    <script src="./js/toggle-menu.js"></script>
    <script src="./js/header-effect2.js"></script>

</body>

</html>