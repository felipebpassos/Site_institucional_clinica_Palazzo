<?php

session_start();

$_SESSION["page"] = "home";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Clínica Palazzo - Excelência em estética e odontologia em Aracaju, Sergipe. Oferecemos serviços de implantes dentários, clareamento dental, ortodontia, estética facial e corporal, nutrologia, reabilitação oral e endodontia. Agende sua consulta!">
    <meta name="keywords" content="Clínica Palazzo, estética, odontologia, Aracaju, Sergipe, implantes dentários, clareamento dental, ortodontia, estética facial, estética corporal, nutrologia, reabilitação oral, endodontia, clínica de alto padrão, melhor dentista Aracaju, estética dental Aracaju, tratamentos estéticos Aracaju, clínica de estética Aracaju">
    <meta name="author" content="Desenvolvido por Felipe Barreto Passos | Simplify Web">
    <meta property="og:title" content="Clínica Palazzo - Estética e Odontologia de Alto Padrão em Aracaju">
    <meta property="og:description" content="A Clínica Palazzo oferece serviços de estética e odontologia de alto padrão em Aracaju, Sergipe. Descubra nossos tratamentos de implantes dentários, clareamento, ortodontia e mais.">
    <meta property="og:image" content="./img/ico2.png">
    <meta property="og:url" content="https://www.clinicapalazzo.com.br">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Clínica Palazzo - Estética e Odontologia de Alto Padrão em Aracaju">
    <meta name="twitter:description" content="Descubra os serviços de estética e odontologia da Clínica Palazzo em Aracaju, Sergipe. Oferecemos tratamentos de implantes dentários, clareamento dental, ortodontia e mais.">
    <meta name="twitter:image" content="./img/ico2.png">
    <title>Clínica Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="stylesheet" href="./phone-number-validation/build/css/intlTelInput.css">
</head>

<body>

    <?php
    if (isset($_GET['success'])) {
        // Exibe um alerta Bootstrap com a mensagem de sucesso
        echo '<div id="success-alert" class="alert alert-success fixed-alert" role="alert">' . $_GET['success'] . '</div>';
    }
    ?>

    <div id="fundo-loader">
        <div id="loader"></div>
    </div>

    <div class="video-player" id="videoPlayer">
        <button class="close-btn" onclick="closeVideoModal()">
            <svg viewBox="0 0 12 12" style="height: 12px; width: 12px;">
                <path d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z">
                </path>
            </svg>
        </button>
        <video id="modalVideo" controls autoplay>
            <source src="" type="video/mp4">
            Seu navegador não suporta o elemento de vídeo.
        </video>
    </div>

    <?php include 'header.php' ?>

    <main>

        <!-- Apresentação Principal -->
        <section class="apresentação-principal">

            <div class="fade-bottom"></div>

            <div class="slider">
                <div class="slide-container">
                    <div class="slide">
                        <div class="slide-relative">
                            <img class="overlay-img" src="./img/overlay.png" alt="Overlay-Hero">
                            <div class="hero-text-container">
                                <h1>Seu bem-estar é<br>nossa prioridade</h1>
                                <p>Profissionais experientes e tecnologia de ponta que transformarão seu sorriso e sua saúde.</p>
                                <div class="buttons-container">
                                    <a href="clinica.php"><button class="blur-btn">A clínica</button></a>
                                    <a href="tratamentos.php"><button class="blur-btn">Tratamentos</button></a>
                                </div>
                            </div>
                            <img class="slides slide-img" id="winicius-hero" src="./img/drwinicius.jpg" alt="Consultório Clínica Palazzo | Winícius Aragão">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-relative">
                            <img src="./img/fachada.png" alt="Fachada Clínica Palazzo">

                            <div class="overlay-main"></div>
                            <div class="hero-content">
                                <h1>Ambientes Modernos e<br> Aconchegantes</h1>
                                <div class="ver-video-box" onclick="openVideoModal('./videos/clinica-main.mp4')">
                                    <div class="play-box">
                                        <svg version="1.1" x="0px" y="0px" viewBox="0 0 12.8 15">
                                            <path d="M0.2,14c0-0.7,0-12.5,0-13c0-0.6,0.6-1.1,1.2-0.7c0.5,0.3,9.9,6,10.8,6.5c0.6,0.3,0.5,1.1,0,1.4 c-0.6,0.4-10.1,6.1-10.8,6.5C0.9,15,0.2,14.7,0.2,14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span style="color: rgb(223, 214, 207);">Conheça</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
            </div>

        </section>

        <!-- Sessão Tratamentos -->
        <section class="tratamentos">

            <h2 class="section-title fade-in-slide-up margin-big">NOSSAS ESPECIALIDADES<div class="ver-todos">
                    <a href="tratamentos.php">Ver todas</a>
                </div>
            </h2>

            <div class="container" style="position: relative;">

                <div class="row">
                    <div class="col-md-6 mt-4">
                        <a href="tratamento.php?key=implantes" class="fade-in-slide-up">
                            <div class="tratamento">
                                <span class="saiba-mais">Saiba Mais</span>
                                <div class="content">
                                    <img class="icone" src="./img/reabilitacao.png" alt="Impante Dentário">
                                    <div class="titulo">
                                        <h2>Implantes</h2>
                                    </div>
                                    <p class="descricao fade-in-slide-up">
                                        Reabilitação oral com implantes, dentaduras fixas, implantes unitários, enxertos, reabilitação em áreas estéticas.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-4">
                        <a href="tratamento.php?key=clareamento" class="fade-in-slide-up">
                            <div class="tratamento">
                                <span class="saiba-mais">Saiba Mais</span>
                                <div class="content">
                                    <img class="icone" src="./img/clareamento.png" alt="Clareamento Dentário">
                                    <div class="titulo">
                                        <h2>Clareamento</h2>
                                    </div>
                                    <p class="descricao fade-in-slide-up">Desperte o brilho em seu sorriso! Nosso tratamento
                                        oferece resultados
                                        visíveis, devolvendo a luminosidade aos seus dentes.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-4">
                        <a href="tratamento.php?key=orto" class="fade-in-slide-up">
                            <div class="tratamento">
                                <span class="saiba-mais">Saiba Mais</span>
                                <div class="content">
                                    <img class="icone" src="./img/orto.png" alt="Ortodontia">
                                    <div class="titulo">
                                        <h2>Ortodontia</h2>
                                    </div>
                                    <p class="descricao fade-in-slide-up">
                                        Correção de desalinhamentos e problemas de mordida, visando melhorar a sua saúde bucal e a estética do seu sorriso.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mt-4">
                        <a href="tratamento.php?key=endo" class="fade-in-slide-up">
                            <div class="tratamento">
                                <span class="saiba-mais">Saiba Mais</span>
                                <div class="content">
                                    <img class="icone" src="./img/endo.png" alt="Endodontia">
                                    <div class="titulo">
                                        <h2>Endodontia</h2>
                                    </div>
                                    <p class="descricao fade-in-slide-up">Tratamento de canal com instrumentação rotatória em sessão única.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta%20%" target="_blank" class=" cta fade-in-slide-up"><button class="outer">
                        <div class="inner"><i class="fa-brands fa-whatsapp" style="margin-right: 10px;"></i><span>AGENDE UMA CONSULTA!</span></div>
                    </button></a>

            </div>

        </section>

        <!-- Sessão Equipe -->
        <section class="equipe">
            <h2 class="section-title fade-in-slide-up">CORPO CLÍNICO</h2>
            <div class="divisoria fade-in-slide-up">
                <img src="./img/divisoria-preta.png" style="margin-bottom: 120px;"></img>
            </div>
            <div class="container" style="position: relative;">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Primeira coluna -->
                        <div class="texto">
                            <h1 class="fade-in-slide-up">CONHEÇA NOSSA<br>EQUIPE</h1>
                            <h6 class="fade-in-slide-up">OS TALENTOS POR TRÁS DOS SORRISOS</h6>
                            <p class="fade-in-slide-up">Temos orgulho em apresentar nossos profissionais
                                altamente qualificados.
                                Cada membro da nossa equipe tem compromisso com a excelência e a busca pela
                                satisfação
                                dos nossos pacientes.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="container mt-5" style="margin-bottom: 80px; margin-top: 0px !important;">
                            <div class="row fade-in-slide-up" style="overflow: hidden;">
                                <div class="row-album" id="professional-row">
                                    <!-- Profissional 1 -->
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/img6.png" alt="Winicius Aragão">
                                        </div>
                                        <h5>Dr. Winícius Aragão</h5>
                                        <p>Especialista em implante e prótese dentária.</p>
                                    </div>
                                    <!-- Profissional 2 -->
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/paula.jpeg" alt="Gabriella Leite">
                                        </div>
                                        <h5>Dra. Gabriella Leite Souza</h5>
                                        <p>Nutróloga</p>
                                    </div>
                                    <!-- Profissional 3 -->
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/amara.jpeg" alt="Amara Oliveira">
                                        </div>
                                        <h5>Dra. Amara Oliveira</h5>
                                        <p>Especialista em Endodontia (Canal).</p>
                                    </div>
                                    <!-- Profissional 4 -->
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/ellen.jpeg" alt="Ellen Santana">
                                        </div>
                                        <h5>Dra. Ellen Santana</h5>
                                        <p>Especialista em harmonização facial.</p>
                                    </div>
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/renatha2.jpeg" alt="Renatha Andrade">
                                        </div>
                                        <h5>Dra. Renatha Andrade</h5>
                                        <p>Especialista em clareamento dental e limpeza.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="arrow nav-btn-galeria-left fade-in-slide-up">
                                <svg width="12" height="24" viewBox="0 0 8 16">
                                    <path d="M.732 9.547L8 16 4 8l4-8L.732 6.453A1.996 1.996 0 0 0 0 8c0 .623.285 1.18.732 1.547z">
                                    </path>
                                </svg>
                            </div>
                            <div class="arrow nav-btn-galeria-right fade-in-slide-up">
                                <svg width="12" height="24" viewBox="0 0 8 16">
                                    <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ver-mais">
                    <a href="equipe.php">Ver mais</a>
                </div>
            </div>
        </section>

        <section id="roleta">
            <h2 class="section-title fade-in-slide-up margin-big">CONHEÇA NOSSA CLÍNICA
            </h2>
            <div class="roleta">
                <div class="roleta-container">
                    <div class="roleta-card inactive-left">
                        <div class="thumbnail">
                            <img src="./img/thumb1.png" alt="Thumbnail 1">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                        </div>
                        <video src="./videos/clinica.mp4" muted loop></video>
                        <div class="video-controls">
                            <button class="maximize-btn"><i class="fas fa-expand"></i></button>
                            <button class="mute-btn"><i class="fas fa-volume-mute"></i></button>
                        </div>
                    </div>
                    <div class="roleta-card">
                        <div class="thumbnail">
                            <img src="./img/thumb2.png" alt="Thumbnail 2">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                        </div>
                        <video src="./videos/video01.mp4" muted loop></video>
                        <div class="video-controls">
                            <button class="maximize-btn"><i class="fas fa-expand"></i></button>
                            <button class="mute-btn"><i class="fas fa-volume-mute"></i></button>
                        </div>
                    </div>
                    <div class="roleta-card inactive-right">
                        <div class="thumbnail">
                            <img src="./img/thumb3.png" alt="Thumbnail 3">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                        </div>
                        <video src="./videos/video03.mp4" muted loop></video>
                        <div class="video-controls">
                            <button class="maximize-btn"><i class="fas fa-expand"></i></button>
                            <button class="mute-btn"><i class="fas fa-volume-mute"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="vantagens">
            <h2 class="section-title fade-in-slide-up margin-medium">Por que escolher a Clínica Palazzo?</h2>
            <div class="container">
                <div class="row fade-in-slide-up">
                    <div class="col-md-3 mt-4">
                        <div class="vantagem">
                            <img src="./img/especializada.png" alt="Equipe Especializada">
                            <h5>Equipe Especializada</h5>
                            <p>Profissionais altamente qualificados e experientes, comprometidos com sua satisfação.</p>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="vantagem">
                            <img src="./img/tec.png" alt="Tecnologia de Ponta">
                            <h5>Tecnologia de Ponta</h5>
                            <p>Equipamentos modernos e técnicas avançadas para garantir os melhores resultados.</p>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="vantagem">
                            <img src="./img/personalizado.png" alt="Atendimento Personalizado">
                            <h5>Atendimento Personalizado</h5>
                            <p>Tratamentos sob medida para atender suas necessidades e desejo individuais, superando suas expectativas.</p>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="vantagem">
                            <img src="./img/acolhedor.png" alt="Ambiente Acolhedor">
                            <h5>Ambiente Acolhedor</h5>
                            <p>Instalações confortáveis para que você se sinta à vontade durante todo o processo.</p>
                        </div>
                    </div>
                </div>
                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta%20%" target="_blank" class=" cta fade-in-slide-up"><button class="outer">
                        <div class="inner"><i class="fa-brands fa-whatsapp" style="margin-right: 10px;"></i><span>AGENDE UMA CONSULTA!</span></div>
                    </button></a>
            </div>
        </section>

        <!-- Sessão Fale Conosco -->
        <section class="fale-conosco" id="contato">
            <h2 class="section-title fade-in-slide-up">PRÉ-AGENDE SUA CONSULTA</h2>
            <div class="divisoria fade-in-slide-up">
                <img src="./img/divisoria-preta.png" style="margin-bottom: 80px;"></img>
            </div>
            <div class="container mt-5 fade-in-slide-up" style="max-width: 600px; margin-top:0 !important;">
                <form method="post" action="contato.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" maxlength="40" required>
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" id="telefone" name="celular" placeholder="Telefone para contato (+DDD)" maxlength="11" required>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="tratamento" name="tratamento">
                            <option value="" disabled selected>Selecione o tratamento</option>
                            <option value="Implante">Implante</option>
                            <option value="Clareamento">Clareamento</option>
                            <option value="Lentes de contato">Lentes de contato</option>
                            <option value="Estética facial">Estética facial</option>
                            <option value="Ortodontia">Ortodontia</option>
                            <option value="Reabilitação oral">Reabilitação oral</option>
                            <option value="Nutrólogo">Nutrólogo</option>
                            <option value="Endodontia">Endodontia</option>
                            <option value="Invisalign">Invisalign</option>
                            <option value="Estética corporal">Estética corporal</option>
                            <!-- Adicione mais opções conforme necessário -->
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="4" placeholder="Digite uma mensagem (opcional)"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </section>

        <!-- Sessão Localização -->
        <section class="localizacao-img">
            <div class="container" style="margin: 0; width: 100%; padding:0; max-width: none;">
                <div class="row" style="margin: 0;">
                    <div class="col-md-6" style="padding: 0; position: relative;">
                        <div class="pelicula-transparente"></div>
                        <img src="./img/sala-espera.png" alt="Sala de Espera" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="texto">
                            <h4><i class="fa-solid fa-location-dot" style="margin-right: 20px;"></i>Rua Juarez Carvalho,
                                120A</h4>
                            <h4>Jardins, Aracaju - SE</h4><br>
                            <h4>Seg. a Sex. - 07h às 18:30h</h4>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding:0;">
                        <div class="img2" style="height:100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.878131702858!2d-37.066823785669!3d-10.952509792204316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70a7bdf625b48f7%3A0x3a349f40d129b1f1!2sRua%20Juarez%20Carvalho%2C%20120A%20-%20Jardins%2C%20Aracaju%20-%20SE%2C%2049025-370!5e0!3m2!1sen!2sbr!4v1668232320628!5m2!1sen!2sbr" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
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

    <?php include 'footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="./js/loading.js"></script>
    <script src="./js/header-effect.js"></script>
    <script src="./js/header-effect2.js"></script>
    <script src="./js/message-button.js"></script>
    <script src="./js/video-player.js"></script>
    <script src="./js/slide.js"></script>
    <script src="./js/carrossel.js"></script>
    <script src="./js/roleta.js"></script>
    <script src="./js/toggle-menu.js"></script>
    <script src="./js/inputs.js"></script>
    <script src="./js/fade-in-slide-up.js"></script>
    <script src="./js/imagem-fundo.js"></script>

</body>

</html>