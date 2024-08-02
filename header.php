<header id="page-header" <?php if ($_SESSION["page"] === "home")
                                echo 'class="transparente"'; ?>>

    <div class="header-container">

        <a class="logo" href="index.php"><img src="./img/logo.png" alt="Palazzo logo"></a>
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

            <li><a href="index.php" <?php if ($_SESSION["page"] === "home")
                                        echo 'class="active"'; ?>>Início</a></li>
            <li><a href="clinica.php" <?php if ($_SESSION["page"] === "clinica")
                                            echo 'class="active"'; ?>>Clínica</a>
            </li>
            <li><a href="tratamentos.php" <?php if ($_SESSION["page"] === "tratamentos")
                                                echo 'class="active"'; ?>>Tratamentos</a></li>
            <li><a href="equipe.php" <?php if ($_SESSION["page"] === "equipe")
                                            echo 'class="active"'; ?>>Equipe</a></li>
            <li><a href="https://api.whatsapp.com/send?phone=5579991769191&text=Ol%C3%A1!%20Vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20agendar%20uma%20consulta%20%" target="_blank">Agendar consulta</a></li>
            <!--
            <li><a href="tecnologias.php" <?php // if ($_SESSION["page"] === "tecnologias")
                                            // echo 'class="active"'; 
                                            ?>>Tecnologias</a></li> -->

        </ul>

        <div class="redes-sociais">

            <ul>

                <li style="margin-right: 10px;"><a href="https://api.whatsapp.com/send?phone=5579991769191"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="https://www.instagram.com/palazzoclinica/"><i class="fa-brands fa-instagram"></i></a></li>

            </ul>

        </div>
    </div>

</div>