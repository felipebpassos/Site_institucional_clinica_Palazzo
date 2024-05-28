<?php

session_start();

$_SESSION["page"] = "home";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Clínica Palazzo |">
    <meta property="og:description" content="A Clínia Palazzo é o espaço onde a excelência se une ao cuidado, visando aprimorar sua
                        experiência e autoestima. Estamos aqui para oferecer um serviço de alta qualidade, focado em atender às suas necessidades
                        de forma humanizada. Cada interação é tratada com a máxima atenção e respeito, para que você sinta-se
                        confortável durante todo o processo. Nossa missão é proporcionar resultados
                        que não apenas transformam sorrisos, mas também realçam a sua confiança interior.">
    <meta property="og:image" content="http://localhost/palazzo/img/ico2.png">
    <meta property="og:url" content="URL">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Palazzo">
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
                            <!--
                        <video autoplay loop="loop">
                            <source src="https://video-previews.elements.envatousercontent.com/053f9896-8270-465a-a615-cea94a62fb45/watermarked_preview/watermarked_preview.mp4" type="video/mp4">
                            <span>This video is currently unavailable</span>
                        </video>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var videoPlayer = document.getElementById('video-main');

                                // Reproduzir o vídeo automaticamente quando a página é carregada
                                videoPlayer.play();
                            });
                        </script>
                        -->
                            <div class="hero-text-container">
                                <h1>Onde a beleza<br>encontra a precisão</h1>
                                <p>Conheça nossa abordagem personalizada para sua saúde e bem-estar.</p>
                                <div class="buttons-container">
                                    <a href="clinica.php"><button class="hero-btn">A clínica</button></a>
                                    <a href="tratamentos.php"><button class="hero-btn">Serviços</button></a>
                                </div>
                            </div>
                            <img class="slides slide-img" id="winicius-hero" src="./img/drwinicius.jpg" alt="Consultório Clínica Palazzo | Winícius Aragão">
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-relative">
                            <picture class="slides">
                            <source srcset="./img/thumbnail-main.png" media="(min-width: 768px)">
                                <source srcset="./img/thumbnail-main-portrait.png" media="(min-width: 500px)">
                                <img src="./img/thumbnail-main-portrait-min.png" alt="Entrevista Winícius Aragão - Clínica Palazzo">
                            </picture>

                            <div class="overlay-main"></div>
                            <div class="hero-content">
                                <h1>Excelência e Dedicação Total<br>aos Pacientes</h1>
                                <div class="ver-video-box" onclick="openVideoModal('./videos/entrevista.mp4')">
                                    <div class="play-box">
                                        <svg version="1.1" x="0px" y="0px" viewBox="0 0 12.8 15">
                                            <path d="M0.2,14c0-0.7,0-12.5,0-13c0-0.6,0.6-1.1,1.2-0.7c0.5,0.3,9.9,6,10.8,6.5c0.6,0.3,0.5,1.1,0,1.4 c-0.6,0.4-10.1,6.1-10.8,6.5C0.9,15,0.2,14.7,0.2,14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <span style="color: rgb(223, 214, 207);">Ver vídeo</span>
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

            <!--
            <div class="arrow" id="preview" onclick="plusSlides(-1)">
                <svg width="12" height="24" viewBox="0 0 8 16" fill="rgb(223, 214, 207)">
                    <path d="M.732 9.547L8 16 4 8l4-8L.732 6.453A1.996 1.996 0 0 0 0 8c0 .623.285 1.18.732 1.547z">
                    </path>
                </svg>
            </div>
            <div class="arrow" id="next" onclick="plusSlides(1)">
                <svg width="12" height="24" viewBox="0 0 8 16" fill="rgb(223, 214, 207)">
                    <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z">
                    </path>
                </svg>
            </div>
            -->

            <h2 class="section-title fade-in-slide-up margin-big">NOSSAS ESPECIALIDADES</h2>

            <div class="container" style="position: relative;">

                <div class="row">
                    <div class="col-md-6 mt-4">
                        <div class="tratamento fade-in-slide-up">
                            <img class="icone" src="./img/reabilitacao.png" alt="Impante Dentário">
                            <div class="titulo">
                                <h2>Implantes</h2>
                            </div>
                            <p class="descricao fade-in-slide-up">
                                Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                                tecnologia. Transforme sua vida restaurando a estabilidade e a beleza natural dos seus
                                dentes.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="tratamento fade-in-slide-up">
                            <img class="icone" src="./img/clareamento.png" alt="Clareamento Dentário">
                            <div class="titulo">
                                <h2>Clareamento</h2>
                            </div>
                            <p class="descricao fade-in-slide-up">Desperte o brilho em seu sorriso! Nosso tratamento
                                oferece resultados
                                visíveis, devolvendo a luminosidade aos seus dentes. Sorria com confiança e destaque-se
                                com um sorriso mais radiante.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-4">
                        <div class="tratamento fade-in-slide-up">
                            <img class="icone" src="./img/orto.png" alt="Ortodontia">
                            <div class="titulo">
                                <h2>Ortodontia</h2>
                            </div>
                            <p class="descricao fade-in-slide-up">
                                Recupere seu sorriso completo e a autoconfiança com nossos implantes dentários de alta
                                tecnologia. Transforme sua vida restaurando a estabilidade e a beleza natural dos seus
                                dentes.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="tratamento fade-in-slide-up">
                            <img class="icone" src="./img/endo.png" alt="Endodontia">
                            <div class="titulo">
                                <h2>Endodontia</h2>
                            </div>
                            <p class="descricao fade-in-slide-up">Desperte o brilho em seu sorriso! Nosso tratamento
                                oferece resultados
                                visíveis, devolvendo a luminosidade aos seus dentes. Sorria com confiança e destaque-se
                                com um sorriso mais radiante.</p>
                        </div>
                    </div>
                </div>

                <div class="ver-mais">
                    <a href="tratamentos.php">Ver mais</a>
                </div>
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
                                dos nossos pacientes. Com experiência e paixão pelo que fazem, nossos especialistas estão prontos para
                                oferecer o
                                melhor atendimento em cuidados estéticos e, acima de tudo, de saúde.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="container mt-5" style="margin-bottom: 80px; margin-top: 0px !important;">
                            <div class="row fade-in-slide-up" style="overflow: hidden;">
                                <div class="row-album" id="professional-row">
                                    <!-- Profissional 1 -->
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/img6.png" alt="Profissional 1">
                                        </div>
                                        <h5>Dr. Winícius Aragão</h5>
                                        <p>Aprenda os atalhos de teclado personalizados de Lucas que permitirão que você flua pelo programa com mais agilidade.</p>
                                    </div>
                                    <!-- Profissional 2 -->
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/paula.jpeg" alt="Profissional 3">
                                        </div>
                                        <h5>Dra. Paula Cavalcante</h5>
                                        <p>Aprenda os atalhos de teclado personalizados de Lucas que permitirão que você flua pelo programa com mais agilidade.</p>
                                    </div>
                                    <!-- Profissional 3 -->
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/ingrid.png" alt="Profissional 2">
                                        </div>
                                        <h5>Dra. Ingrid</h5>
                                        <p>Aprenda os atalhos de teclado personalizados de Lucas que permitirão que você flua pelo programa com mais agilidade.</p>
                                    </div>
                                    <!-- Profissional 4 -->
                                    <div class="quadro">
                                        <div class="box-img-pro" style="margin-bottom:20px;">
                                            <img src="./img/luana.jpeg" alt="Profissional 4">
                                        </div>
                                        <h5>Dra. Luana</h5>
                                        <p>Aprenda os atalhos de teclado personalizados de Lucas que permitirão que você flua pelo programa com mais agilidade.</p>
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

        <div class="foto-fixa">
            <img src="./img/consultorio2.jpg" alt="Fachada">
        </div>

        <div class="overlay-background"></div>

        <div class="espaço"></div>

        <!-- Sessão Fale Conosco -->
        <section class="fale-conosco" id="contato">
            <h2 class="section-title fade-in-slide-up">PRÉ-AGENDE SUA CONSULTA</h2>
            <div class="divisoria fade-in-slide-up">
                <img src="./img/divisoria-preta.png" style="margin-bottom: 80px;"></img>
            </div>
            <div class="container mt-5 fade-in-slide-up" style="max-width: 600px; margin-top:0 !important;">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" id="telefone" placeholder="Telefone para contato" required>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="tratamento" required>
                            <option value="" disabled selected>Selecione o tratamento</option>
                            <option value="limpeza">Limpeza</option>
                            <option value="extração">Extração</option>
                            <option value="clareamento">Clareamento</option>
                            <!-- Adicione mais opções conforme necessário -->
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="mensagem" rows="4" placeholder="Digite uma mensagem (opcional)"></textarea>
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

    <div class="whatsapp">
        <div class="tooltip-container">
            <a href="https://api.whatsapp.com/send?phone=5579991769191" class="whatsapp-button" target="_blank">
                <img src="./img/whatsapp.png" alt="Ícone do WhatsApp">
            </a>
            <span class="tooltip">Entre em contato conosco!</span>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="./js/header-effect.js"></script>
    <script src="./js/header-effect2.js"></script>
    <script src="./js/loading.js"></script>
    <script src="./js/words-effect.js"></script>
    <script src="./js/video-player.js"></script>
    <script src="./js/slide.js"></script>
    <script src="./js/carrossel.js"></script>
    <script src="./js/toggle-menu.js"></script>
    <script src="./js/fade-in-slide-up.js"></script>
    <script src="./js/imagem-fundo.js"></script>

</body>

</html>