<?php
session_start();

$_SESSION["page"] = "tratamentos";

$tratamentos = [
    'implantes' => [
        'h1' => 'Sorriso Renovado com<br>Implante Guiado',
        'titulo' => 'Implante',
        'metaDescricao' => 'Com tecnologia de ponta, oferecemos implantes que se assemelham aos dentes naturais tanto na aparência quanto na funcionalidade.',
        'keywords' => 'implantes, odontologia, dentes, saúde bucal',
        'texto' => 'Com tecnologia de ponta, oferecemos implantes que se assemelham aos dentes naturais tanto na aparência quanto na funcionalidade, proporcionando uma melhor qualidade de vida e um sorriso mais confiante.',
        'video' => './videos/implante.mp4',
        'thumb' => './img/thumb/implante.png',
        'problemas' => [
            [
                'titulo' => 'Perda de um ou mais dentes',
                'descricao' => 'Implantes dentários são a solução definitiva para quem perdeu dentes, oferecendo função mastigatória natural e estética impecável.'
            ],
            [
                'titulo' => 'Dentes enfraquecidos',
                'descricao' => 'Implantes também podem ser utilizados para estabilizar e fortalecer dentes enfraquecidos, evitando extrações e preservando sua saúde bucal.'
            ],
            [
                'titulo' => 'Sorriso desgastado ou desalinhado',
                'descricao' => 'Implantes podem corrigir imperfeições no sorriso, como dentes tortos, espaçados ou amarelados, proporcionando um sorriso mais bonito e harmonioso.'
            ]
        ]
    ],
    'lentes' => [
        'h1' => 'Sorriso Impecável com<br>Lentes de Contato Dental',
        'titulo' => 'Lentes de Contato',
        'metaDescricao' => 'As lentes de contato dental são a solução ideal para quem busca um sorriso perfeito e harmônico, com mínima intervenção nos dentes naturais.',
        'keywords' => 'lentes de contato dental, odontologia estética, sorriso perfeito',
        'texto' => 'As lentes de contato dental oferecem uma transformação estética incrível, cobrindo imperfeições como manchas, desalinhamento e desgastes nos dentes. Esse tratamento minimamente invasivo proporciona resultados estéticos impressionantes, sem a necessidade de desgastar os dentes naturais.',
        'video' => './videos/lentes.mp4',
        'thumb' => './img/thumb/lentes.png',
        'problemas' => [
            [
                'titulo' => 'Dentes manchados ou descoloridos',
                'descricao' => 'Lentes de contato dental são ideais para cobrir manchas que não podem ser removidas com clareamento convencional, proporcionando um sorriso branco e brilhante.'
            ],
            [
                'titulo' => 'Desgaste dentário',
                'descricao' => 'Para dentes desgastados ou pequenos, as lentes de contato adicionam volume e forma, resultando em uma aparência rejuvenescida.'
            ],
            [
                'titulo' => 'Desalinhamento leve dos dentes',
                'descricao' => 'Corrija desalinhamentos leves sem a necessidade de tratamentos ortodônticos longos, com resultados rápidos e estéticos.'
            ]
        ]
    ],
    // Outros tratamentos podem ser adicionados aqui
];

// Pegando o nome do tratamento na URL
$key = isset($_GET['key']) ? $_GET['key'] : 'none';

// Verificando se a chave do tratamento existe no array
if (!array_key_exists($key, $tratamentos)) {
    header("Location: erro.php");
    exit();
}

$tratamento = $tratamentos[$key];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($tratamento['metaDescricao']) ? $tratamento['metaDescricao'] : ''; ?>">
    <meta name="keywords" content="<?php echo isset($tratamento['keywords']) ? $tratamento['keywords'] : ''; ?>">
    <meta property="og:title" content="<?php echo $tratamento['titulo']; ?> | Clínica Palazzo">
    <meta property="og:description" content="<?php echo isset($tratamento['metaDescricao']) ? $tratamento['metaDescricao'] : ''; ?>">
    <meta property="og:url" content="URL">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
    <title><?php echo $tratamento['titulo']; ?> | Clínica Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/tratamentos.css">

    <link rel="stylesheet" href="./phone-number-validation/build/css/intlTelInput.css">
</head>

<body>

    <header id="page-header" class="transparente">

        <div class="header-container">

            <a class="logodourada" href="index.php"><img src="./img/logo_bege.png" alt="Palazzo logo bege"></a>

            <button class="toggle-menu" id="menu-toggle">
                <i class="fa-solid fa-bars" style="margin-right: 15px;"></i>
                <span>MENU</span>
            </button>

            <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta%20%" target="_blank" class="agendar-consulta"><i class="fa-brands fa-whatsapp" style="margin-right: 10px;"></i>Agendar consulta</a>

        </div>

    </header>

    <div class="menu">

        <div class="menu-container">
            <div class="logo-menu">
                <img src="./img/ico2.png" alt="Logo - Menu de Opções">
            </div>

            <ul>

                <li><a href="index.php">Início</a></li>
                <li><a href="clinica.php">Clínica</a>
                </li>
                <li><a href="tratamentos.php" class="active">Tratamentos</a></li>
                <li><a href="equipe.php">Equipe</a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta%20%" target="_blank">Agendar consulta</a></li>

            </ul>

            <div class="redes-sociais">

                <ul>

                    <li style="margin-right: 10px;"><a href="https://api.whatsapp.com/send?phone=5579991769191"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="https://www.instagram.com/palazzoclinica/"><i class="fa-brands fa-instagram"></i></a></li>

                </ul>

            </div>
        </div>

    </div>

    <div class="foto-fixa">
        <img src="./img/odontologia.png" alt="Odontologia Imagem">
    </div>

    <div class="overlay-background darker"></div>

    <main>

        <section class="auto" id="first">
            <div class="container">
                <h1 class="responsivo"><?php echo $tratamento['h1']; ?></h1>
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <div class="video-container">
                            <div class="thumb" id="thumb" onclick="openVideo()">
                                <img src="<?php echo $tratamento['thumb']; ?>" alt="<?php echo $tratamento['titulo']; ?>">
                                <div class="play-icon">
                                    <i class="fa fa-play"></i> <!-- Ícone de play do Font Awesome -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="content">
                            <h1 class="widescreen"><?php echo $tratamento['h1']; ?></h1>
                            <p><?php echo $tratamento['texto']; ?></p>
                            <div class="buttons-container">
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn">
                                        <div class="pelicula"></div>Agende uma consulta<i class="fas fa-arrow-right"></i>
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="lista-acordeao auto">
            <div class="container">
                <h2 class="section-title fade-in-element">Quais problemas resolve?</h2>
                <ul class="accordion-1 fade-in-element">
                    <?php foreach ($tratamento['problemas'] as $problema) : ?>
                        <div class="trabalho ativo">
                            <li>
                                <p><span class="mark"></span><?php echo $problema['titulo']; ?></p>
                                <svg width="18" height="12" viewBox="0 0 42 25">
                                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                                </svg>
                            </li>
                            <div class="explicacao">
                                <p><?php echo $problema['descricao']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section class="agende auto">
            <div class="container">
                <h3 class="section-title fade-in-element" style="margin-bottom: 10px;">O que te impede de sorrir?</h3>
                <h1 class="fade-in-element">Agende uma Avaliação</h1>
                <div class="buttons-container fade-in-element">
                    <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn">
                            <div class="pelicula"></div>CHAMAR NO WHATSAPP
                        </button></a>
                    <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn">
                            <div class="pelicula"></div>LIGAR AGORA
                        </button></a>
                </div>
            </div>
        </section>

    </main>

    <div class="video-fullscreen" id="videoFullscreen" style="display:none;">
        <video id="videoPlayer" controls>
            <source src="<?= $tratamento['video'] ?>" type="video/mp4">
            Seu navegador não suporta o vídeo.
        </video>
        <button class="close-btn" onclick="closeVideo()">
            <svg viewBox="0 0 12 12" style="height: 12px; width: 12px;">
                <path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z">
                </path>
            </svg>
        </button>
    </div>

    <!-- Div de sobreposição -->
    <div id="overlay" class="overlay"></div>

    <div class="message-box">
        <span class="texto">Fale conosco<span class="close">x</span></span>
    </div>

    <div class="whatsapp-box">
        <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta" class="whatsapp-button" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
            <span>Contato</span>
        </a>
    </div>

    <?php include 'footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        function openVideo() {
            document.getElementById('thumb').style.display = 'none';
            document.getElementById('videoFullscreen').style.display = 'flex';
            document.getElementById('videoPlayer').play();
        }

        function closeVideo() {
            document.getElementById('videoPlayer').pause();
            document.getElementById('videoFullscreen').style.display = 'none';
            document.getElementById('thumb').style.display = 'block';
        }
    </script>

    <script src="./js/toggle-menu.js"></script>
    <script src="./js/message-button.js"></script>
    <script src="./js/fade-in-element.js"></script>
    <script src="./js/accordion.js"></script>

</body>

</html>