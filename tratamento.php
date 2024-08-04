<?php
session_start();

$tratamentos = [
    'implantes' => [
        'h1' => 'Sorriso Renovado com<br>Implante Dentário Guiado',
        'titulo' => 'Implante',
        'metaDescricao' => 'Descrição sobre implantes dentários.',
        'keywords' => 'implantes, odontologia, dentes, saúde bucal',
        'texto' => 'Com tecnologia de ponta, oferecemos implantes que se assemelham aos dentes naturais tanto na aparência quanto na funcionalidade, proporcionando uma melhor qualidade de vida e um sorriso mais confiante.',
        'video' => './videos/implantes.mp4',
        'img' => './img/implantes.jpg' // Adicione a imagem para a meta tag og:image
    ]
    // Os outros tratamentos podem ser adicionados aqui
];

$key = isset($_GET['key']) ? $_GET['key'] : 'implantes';
$tratamento = isset($tratamentos[$key]) ? $tratamentos[$key] : $tratamentos['implantes'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($tratamento['metaDescricao']) ? $tratamento['metaDescricao'] : ''; ?>">
    <meta name="keywords" content="<?php echo isset($tratamento['keywords']) ? $tratamento['keywords'] : ''; ?>">
    <meta property="og:title" content="Clínica Palazzo | <?php echo $tratamento['titulo']; ?>">
    <meta property="og:description" content="<?php echo isset($tratamento['metaDescricao']) ? $tratamento['metaDescricao'] : ''; ?>">
    <meta property="og:image" content="<?php echo $tratamento['img']; ?>">
    <meta property="og:url" content="URL">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
    <title><?php echo $tratamento['titulo']; ?> | Clínica Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/tratamentos.css">

    <link rel="stylesheet" href="./phone-number-validation/build/css/intlTelInput.css">
</head>

<body>

    <header id="page-header" class="transparente">

        <div class="header-container">

            <a class="logodourada" href="index.php"><img src="./img/logo_dourada.png" alt="Palazzo logo dourada"></a>

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

        <section class="transparente">
            <div class="container" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <!-- Video aqui -->
                        <video width="95%" height="auto" controls autoplay loop muted>
                            <source src="<?php echo $tratamento['video']; ?>" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="content">
                            <h1><?php echo $tratamento['h1']; ?></h1>
                            <p><?php echo $tratamento['texto']; ?></p>
                            <div class="buttons-container">
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn">
                                        <div class="pelicula"></div>Agendar Consulta
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="lista-acordeao">
            <div class="container">
                <h2 class="section-title fade-in-element">Quais problemas resolve?</h2>
                <ul class="accordion-1 fade-in-element">
                    <div class="trabalho">
                        <li>
                            <p><span class="mark"></span>Perda de um ou mais dentes</p>
                            <svg width="18" height="12" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </li>
                        <div class="explicacao">
                            <p>Implantes dentários são a solução definitiva para quem perdeu dentes, oferecendo função mastigatória natural e estética impecável.</p>
                        </div>
                    </div>
                    <div class="trabalho">
                        <li>
                            <p><span class="mark"></span>Dentes enfraquecidos</p>
                            <svg width="18" height="12" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </li>
                        <div class="explicacao">
                            <p>Implantes também podem ser utilizados para estabilizar e fortalecer dentes enfraquecidos, evitando extrações e preservando sua saúde bucal.</p>
                        </div>
                    </div>
                    <div class="trabalho">
                        <li>
                            <p><span class="mark"></span>Sorriso desgastado ou desalinhado</p>
                            <svg width="18" height="12" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                            </svg>
                        </li>
                        <div class="explicacao">
                            <p>Implantes podem corrigir imperfeições no sorriso, como dentes tortos, espaçados ou amarelados, proporcionando um sorriso mais bonito e harmonioso.</p>
                        </div>
                    </div>
                </ul>
            </div>
        </section>

    </main>

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

    <script src="./js/toggle-menu.js"></script>
    <script src="./js/message-button.js"></script>
    <script src="./js/fade-in-element.js"></script>
    <script src="./js/accordion.js"></script>

</body>

</html>