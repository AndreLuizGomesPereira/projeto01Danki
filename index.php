<?php


include('config.php');
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/all.css">
    <link rel="stylesheet" href="style/fontawesome.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700">
    <link rel="shortcut icon" href="img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição de sistema PHP">
    <title>AleSYS - Serviços de Tecnologia</title>
</head>

<body>
    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;
        case 'servicos':
            echo '<target target="servicos" />';
            break;
    }
    ?>

    <header>
        <div class="center">
            <div class="logo left"><a href="https://github.com/AndreLuizGomesPereira/projeto01Danki">AleSYS</a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="#depoimentos">Depoimentos</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fas fa-bars"></i></div>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="#depoimentos">Depoimentos</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <?php
    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
    } else {
        if ($url != 'depoimentos' && $url != 'servicos') {
            $pagina404 = true;
            include('pages/404.php');
        } else {
            include('pages/home.php');
        }
    }

    ?>
    <footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed";' ?>>
        <div class="center">
            <p>AleSYS - Todos os direitos reservados</p>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
    <?php if ($url == 'home' || $url == '') { ?>
        <script src="js/slider.js"></script>
    <?php  } ?>
    <?php if ($url == 'contato') { ?>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUoT_qH4"></script>
        <script src="js/map.js"></script>
    <?php  } ?>
</body>

</html>