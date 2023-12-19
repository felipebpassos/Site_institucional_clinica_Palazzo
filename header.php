<div class="top-header">

    <div class="redes-sociais">

        <ul>

            <li><a href=""><button><i class="fa-brands fa-facebook"></i></button></a></li>
            <li><a href="https://www.instagram.com/palazzoclinica/"><button><i
                            class="fa-brands fa-instagram"></i></button></a></li>

        </ul>

    </div>

</div>

<header>

    <div class="header-container">

        <button class="agendamento">Agende uma consulta</button>

        <a class="logo" href="index.php"><img src="./img/logo.png" alt="Palazzo logo"></a>

        <button class="toggle-menu" id="menu-toggle">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>

</header>

<div class="menu">

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
        <li><a href="tecnologias.php" <?php if ($_SESSION["page"] === "tecnologias")
            echo 'class="active"'; ?>>Tecnologias</a></li>

    </ul>

</div>