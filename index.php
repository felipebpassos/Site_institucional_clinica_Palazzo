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
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="stylesheet" href="./phone-number-validation/build/css/intlTelInput.css">
</head>

<body>

    <div id="fundo-loader">
        <div id="loader"></div>
    </div>

    <div class="video-player" id="videoPlayer">
        <button class="close-btn" onclick="closeVideoModal()">Fechar</button>
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

            <div class="overlay-main" onclick="openVideoModal('./videos/clinica.mp4')"></div>


            <img class="slides" src="./img/clinica-front.jpg" alt="Apresentação Clínica Palazzo">

            <img class="slides" src="./img/thumbnail-main.png" alt="Entrevista Winícius Aragão - Clínica Palazzo">

            <div class="headline">
                <h1 class="line">
                    <span id="clinicTitle1" class="animated-word">Clínica Palazzo é referência no cuidado</span>
                </h1>
                <h1 class="line">
                    <span id="clinicTitle2" class="animated-word">e compromisso com o paciente</span>
                </h1>
            </div>

            <div class="ver-video-box">
                <div class="play-box">
                    <svg version="1.1" x="0px" y="0px" viewBox="0 0 12.8 15">
                        <path
                            d="M0.2,14c0-0.7,0-12.5,0-13c0-0.6,0.6-1.1,1.2-0.7c0.5,0.3,9.9,6,10.8,6.5c0.6,0.3,0.5,1.1,0,1.4 c-0.6,0.4-10.1,6.1-10.8,6.5C0.9,15,0.2,14.7,0.2,14z">
                        </path>
                    </svg>
                </div>
                <span style="margin-left: 20px; color: rgb(223, 214, 207);">Saiba mais</span>
            </div>

        </section>

        <!-- Sessão Tratamentos -->
        <section class="tratamentos">

            <h2 class="section-title fade-in-slide-up">TRATAMENTOS</h2>

            <div class="divisoria fade-in-slide-up">
                <img src="./img/divisoria-bege.png" style="margin-bottom: 120px;"></img>
            </div>

            <div class="container" style="position: relative;">

                <div class="row">
                    <div class="col-md-6 mt-4">
                        <div class="tratamento fade-in-slide-up">
                            <div class="titulo">
                                <img class="icone" src="./img/reabilitacao.png" alt="Impante Dentário">
                                <h2>Implante</h2>
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
                            <div class="titulo">
                                <img class="icone" src="./img/clareamento.png" alt="Clareamento Dentário">
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
                            <img class="capa" src="./img/ortodontia.jpg" alt="Ortodontia">
                            <h2>Ortodontia</h2>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="tratamento fade-in-slide-up">
                            <img class="capa" src="./img/endodontia.png" alt="Endodontia">
                            <h2>Endodontia</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-4">

                    </div>
                    <div class="col-md-6 mt-4">

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
                            <p class="fade-in-slide-up">Estamos orgulhosos de apresentar nossa equipe de profissionais
                                altamente qualificados e
                                dedicados.
                                Cada membro da nossa equipe traz consigo um compromisso com a excelência e a busca pela
                                satisfação
                                dos nossos pacientes. Com experiência e paixão pelo que fazem, eles estão prontos para
                                oferecer o
                                melhor atendimento em cuidados estéticos e, acima de tudo, de saúde.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!-- Segunda coluna -->
                        <div class="container mt-5 fade-in-element"
                            style="margin-bottom: 80px; margin-top: 0px !important;">
                            <div class="row">
                                <div class="col-md-6" id="f1">
                                    <div class="quadro">
                                        <div class="box-img-pro fade-in-slide-up" style="margin-bottom:20px;">
                                            <img src="./img/img6.png" alt="Profissional 1">
                                        </div>
                                        <h5 class="fade-in-slide-up">Dr. Winícius Aragão</h5>
                                        <p class="fade-in-slide-up">Aprenda os atalhos de teclado personalizados de
                                            Lucas que permitirão que
                                            você flua pelo
                                            programa com mais agilidade.</p>
                                    </div>
                                </div>
                                <div class="col-md-6" id="f2">
                                    <div class="quadro">
                                        <div class="box-img-pro fade-in-slide-up" style="margin-bottom:20px;">
                                            <img src="./img/ESTHER-BRYCE.png" alt="Profissional 2">
                                        </div>
                                        <h5 class="fade-in-slide-up">Dr. Esther-Bryce</h5>
                                        <p class="fade-in-slide-up">Aprenda os atalhos de teclado personalizados de
                                            Lucas que permitirão que
                                            você flua pelo
                                            programa com mais agilidade.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4" id="f3">
                                    <div class="quadro">
                                        <div class="box-img-pro fade-in-slide-up" style="margin-bottom:20px;">
                                            <img src="./img/LIANNE-WILSON.png" alt="Profissional 3">
                                        </div>
                                        <h5 class="fade-in-slide-up">Dr. Lianne Wilson</h5>
                                        <p class="fade-in-slide-up">Aprenda os atalhos de teclado personalizados de
                                            Lucas que permitirão que
                                            você flua pelo
                                            programa com mais agilidade.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4" id="f4">
                                    <div class="quadro">
                                        <div class="box-img-pro fade-in-slide-up" style="margin-bottom:20px;">
                                            <img src="./img/JESSICA-KIM.png" alt="Profissional 4">
                                        </div>
                                        <h5 class="fade-in-slide-up">Dr. Jéssica Kim</h5>
                                        <p class="fade-in-slide-up">Aprenda os atalhos de teclado personalizados de
                                            Lucas que permitirão que
                                            você flua pelo
                                            programa com mais agilidade.</p>
                                    </div>
                                </div>
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
            <img src="./img/img10.png" alt="Fachada">
        </div>

        <div class="espaço"></div>

        <!-- Sessão Tecnologias -->
        <section class="tecnologias">


        </section>

        <!-- Sessão Fale Conosco -->
        <section class="fale-conosco">
            <h2 class="section-title fade-in-slide-up">PRÉ-AGENDE SUA CONSULTA</h2>
            <div class="divisoria fade-in-slide-up">
                <img src="./img/divisoria-preta.png" style="margin-bottom: 80px;"></img>
            </div>
            <div class="container mt-5" style="max-width: 600px; margin-top:0 !important;">
                <form>
                    <div class="form-group fade-in-slide-up">
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="form-group fade-in-slide-up">
                        <input type="tel" class="form-control" id="telefone" placeholder="Telefone para contato"
                            required>
                    </div>

                    <div class="form-group fade-in-slide-up">
                        <select class="form-control" id="tratamento" required>
                            <option value="" disabled selected>Selecione o tratamento</option>
                            <option value="limpeza">Limpeza</option>
                            <option value="extração">Extração</option>
                            <option value="clareamento">Clareamento</option>
                            <!-- Adicione mais opções conforme necessário -->
                        </select>
                    </div>

                    <div class="form-group fade-in-slide-up">
                        <textarea class="form-control" id="mensagem" rows="4"
                            placeholder="Digite uma mensagem (opcional)"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary fade-in-slide-up">Enviar</button>
                </form>
            </div>
        </section>

        <!-- Sessão Localização -->
        <section class="localizacao-img">
            <div class="container" style="margin: 0; width: 100%; padding:0; max-width: none;">
                <div class="row" style="margin: 0;">
                    <div class="col-md-6" style="padding: 0; position: relative;">
                        <div class="pelicula-transparente"></div>
                        <img src="./img/sala-espera.png" alt="Sala de Espera"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="col-md-6" style="padding:0;">
                        <div class="img2"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.878131702858!2d-37.066823785669!3d-10.952509792204316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70a7bdf625b48f7%3A0x3a349f40d129b1f1!2sRua%20Juarez%20Carvalho%2C%20120A%20-%20Jardins%2C%20Aracaju%20-%20SE%2C%2049025-370!5e0!3m2!1sen!2sbr!4v1668232320628!5m2!1sen!2sbr"
                                width="100%" height="550px" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
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

    <script src="./js/loading.js"></script>
    <script src="./js/words-effect.js"></script>
    <script src="./js/video-player.js"></script>
    <script src="./js/slide.js"></script>
    <script src="./js/toggle-menu.js"></script>
    <script src="./js/slide-fotos.js"></script>
    <script src="./js/fade-in-slide-up.js"></script>
    <script src="./js/header-effect.js"></script>

</body>

</html>