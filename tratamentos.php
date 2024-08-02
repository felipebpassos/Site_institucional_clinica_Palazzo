<?php

session_start();

$_SESSION["page"] = "tratamentos";

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
    <title>Tratamentos | Clínica Palazzo</title>
    <link rel="icon" href="./img/ico.ico">

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/tratamentos.css">

    <link rel="stylesheet" href="./phone-number-validation/build/css/intlTelInput.css">
</head>

<body>

    <?php include 'header.php' ?>

    <div class="foto-fixa">
        <img src="./img/odontologia.png" alt="Odontologia Imagem">
    </div>

    <div class="overlay-background"></div>

    <main>

        <section class="transparente">
            <div class="container">
                <div class="row">
                    <div class="col-6 bloco">
                        <div>
                            <div class="texto">
                                <p>Com tecnologia de ponta, oferecemos implantes que se assemelham aos dentes naturais tanto na aparência quanto na funcionalidade, proporcionando uma melhor qualidade de vida e um sorriso mais confiante.</p>
                            </div>
                            <div class="buttons-container">
                                <a href="#"><button class="blur-btn">
                                        <div class="pelicula"></div>Ver sobre
                                    </button></a>
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn">
                                        <div class="pelicula"></div>Agendar
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 end">
                        <h1>Implantes</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="full">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Estética facial</h1>
                    </div>
                    <div class="col-6 bloco">
                        <div>
                            <div class="texto">
                                <p>Harmonizamos suas características de forma natural e satisfatória, destacando a sua beleza única. Com foco no paciente e atendimento personalizado, garantimos resultados que realçam o melhor de você.</p>
                            </div>
                            <div class="buttons-container">
                                <a href="#"><button class="blur-btn op2">Ver sobre</button></a>
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn op2">
                                        Agendar
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="transparente">
            <div class="container">
                <div class="row">
                    <div class="col-6 bloco">
                        <div>
                            <div class="texto">
                                <p>O caminho mais rápido e eficaz para um sorriso mais brilhante. Utilizando métodos seguros e comprovados, nossos tratamentos removem manchas e descolorações, resultando em dentes visivelmente mais brancos.</p>
                            </div>
                            <div class="buttons-container">
                                <a href="#"><button class="blur-btn">
                                        <div class="pelicula"></div>Ver sobre
                                    </button></a>
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn">
                                        <div class="pelicula"></div>Agendar
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 end">
                        <h1>Clareamento</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="full">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Ortodontia</h1>
                    </div>
                    <div class="col-6 bloco">
                        <div>
                            <div class="texto">
                                <p>Nossos serviços de ortodontia vão além de apenas alinhar os dentes, eles visam melhorar a sua saúde bucal e a estética do seu sorriso. Utilizamos aparelhos modernos e técnicas avançadas para corrigir desalinhamentos e problemas de mordida, garantindo resultados duradouros e um sorriso mais harmonioso.</p>
                            </div>
                            <div class="buttons-container">
                                <a href="#"><button class="blur-btn op2">Ver sobre</button></a>
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn op2">
                                        Agendar
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="transparente">
            <div class="container">
                <div class="row">
                    <div class="col-6 bloco">
                        <div>
                            <div class="texto">
                                <p>Oferecemos uma variedade de tratamentos de reabilitação que envolvem desde a correção de problemas dentários como cáries e desgastes, até a reconstrução de estruturas dentárias danificadas, melhorando sua mastigação, fala, funcionalidade e a estética do seu sorriso.</p>
                            </div>
                            <div class="buttons-container">
                                <a href="#"><button class="blur-btn">
                                        <div class="pelicula"></div>Ver sobre
                                    </button></a>
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn">
                                        <div class="pelicula"></div>Agendar
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 end">
                        <h1>Reabilitação oral</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="full">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Nutrólogo</h1>
                    </div>
                    <div class="col-6 bloco">
                        <div>
                            <div class="texto">
                                <p>A saúde começa de dentro para fora, e nossos serviços de nutrologia são projetados para melhorar a sua qualidade de vida através de uma alimentação equilibrada e adequada às suas necessidades. Com acompanhamento personalizado, ajudamos você a alcançar um equilíbrio nutricional que reflete positivamente na sua saúde geral.</p>
                            </div>
                            <div class="buttons-container">
                                <a href="#"><button class="blur-btn op2">Ver sobre</button></a>
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn op2">
                                        Agendar
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="transparente">
            <div class="container">
                <div class="row">
                    <div class="col-6 bloco">
                        <div>
                            <div class="texto">
                                <p>A endodontia, ou tratamento de canal, é crucial para salvar dentes evitando que sejam extraídos. Com técnicas minimamente invasivas e eficientes, garantimos que o procedimento seja o mais confortável possível, preservando sua saúde bucal e evitando complicações futuras.</p>
                            </div>
                            <div class="buttons-container">
                                <a href="#"><button class="blur-btn">
                                        <div class="pelicula"></div>Ver sobre
                                    </button></a>
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn">
                                        <div class="pelicula"></div>Agendar
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 end">
                        <h1>Endodontia</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="full">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Estética corporal</h1>
                    </div>
                    <div class="col-6 bloco">
                        <div>
                            <div class="texto">
                                <p>Oferecemos uma variedade de procedimentos que ajudam a modelar o corpo, melhorar a textura da pele e combater sinais de envelhecimento, sempre com foco em resultados naturais e satisfatórios.</p>
                            </div>
                            <div class="buttons-container">
                                <a href="#"><button class="blur-btn op2">Ver sobre</button></a>
                                <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta"><button class="blur-btn op2">
                                        Agendar
                                    </button></a>
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
        <a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta" class="whatsapp-button" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
            <span>Contato</span>
        </a>
    </div>

    <?php include 'footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="./js/toggle-menu.js"></script>
    <script src="./js/header-effect2.js"></script>
    <script src="./js/message-button.js"></script>

</body>

</html>