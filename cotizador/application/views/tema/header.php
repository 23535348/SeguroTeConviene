<?php $url=base_url();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Seguro te Conviene </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=$url?>img/favicono.ico">
    <!-- css -->
    <link href="<?=$url?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=$url?>css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?=$url?>css/jcarousel.css" rel="stylesheet" />
    <link href="<?=$url?>css/flexslider.css" rel="stylesheet" />
    <link href="<?=$url?>css/style.css" rel="stylesheet" />
    <link href="<?=$url?>css/complemento_scroll_marquee.css" rel="stylesheet" />
    <link href="<?=$url?>css/jquery.picMarque.css" rel="stylesheet" />

    <!-- Theme skin -->
    <link href="<?=$url?>skins/default.css" rel="stylesheet" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?=$url?>js/html5.js"></script>
    <script src="<?=$url?>js/jquery.scrollbox.js"></script>

    <![endif]-->

</head>

<body>
<div id="wrapper">
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-link" href="<?=$url?>index.php"><span><img src="<?=$url?>img/logo.png" height="100"></span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?=$url?>index.php">Inicio</a></li>
                        <li><a href="<?=$url?>qs.php">QUIÉNES SOMOS</a></li>
                        <li><a href="<?=$url?>faq.php">PREGUNTAS FRECUENTES</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">PÓLIZAS<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=$url?>vehiculos.php">SEGURO DE AUTO</a></li>
                                <li><a href="<?=$url?>vida.php">SEGURO DE VIDA</a></li>
                                <li><a href="<?=$url?>seguro_incendio.php">SEGURO DE INCENDIO</a></li>
                                <li><a href="<?=$url?>hipoteca.php">SEGURO HIPOTECARIO</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">COTIZADOR<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=$url?>cotizador/index.php/Autos/form">PÓLIZAS DE AUTOS (Cobertura completa)</a></li>
                                <li><a href="<?=$url?>vida.php">SEGURO DE VIDA</a></li>
                                <li><a href="<?=$url?>seguro_incendio.php">SEGURO DE INCENDIO</a></li>
                                <li><a href="<?=$url?>hipoteca.php">SEGURO HIPOTECARIO</a></li>
                            </ul>
                        </li>

                        <li><a href="<?=$url?>contacto.php">CONTÁCTENOS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- fin section -->
    <section id="content">
        <div class="container">