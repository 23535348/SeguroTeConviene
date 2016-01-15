<!DOCTYPE html>
<html lang="en">
<head>
    <?php $url=base_url();?>
    <meta charset="utf-8">
    <title>Seguro te Conviene </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <link href='<?=$url?>css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href="<?=$url?>css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$url?>css/jcarousel.css">
    <link rel="stylesheet" href="<?=$url?>css/flexslider.css">
    <link href='<?=$url?>css/style.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=$url?>css/complemento_scroll_marquee.css">
    <link rel="stylesheet" href="<?=$url?>css/jquery.picMarque.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?=$url?>img/favicono.ico">
    <link rel="stylesheet" href="<?=$url?>skins/default.css">
    <link rel="stylesheet" href="<?=$url?>cotizador/css/bootstrap-datetimepicker.css"> 

  
    <link href='<?=$url?>icons/css/bootstrap-glyphicons.css' rel='stylesheet' type='text/css'>

    <!--
     <link rel="stylesheet" href="<?=$url?>cotizador/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=$url?>lib/themes/default.css">
    <link rel="stylesheet" href="<?=$url?>lib/themes/default.date.css">
    <link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>

     <link rel="stylesheet" href="<?=$url?>cotizador/css/style.css">
    -->

    <script src="<?=$url?>js/jquery-1.10.1.min.js"></script>
    <script src="<?=$url?>cotizador/js/moment-with-locales-290.js"></script>
    <script src="<?=$url?>cotizador/js/bootstrap.min.js"></script>
    <script src="<?=$url?>cotizador/js/bootstrap-datetimepicker.min.js"></script>
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]><script src="<?=$url?>cotizador/js/jquery-ui.js"></script>
    <script src="js/html5.js"></script>
    <script src="js/jquery.scrollbox.js"></script>

    <![endif]-->


    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/ui/1.8.13/jquery-ui.min.js"></script>

     <link href="../../css/bootstrap.min.css" rel="stylesheet">
     <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="../../css/jquery-ui.css" rel="stylesheet">
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/jquery.min.js"></script>
     <script src="../../js/jquery-1.9.1.js"></script>
     <script src="../../js/jquery-ui.js"></script>
     <script src="../../js/jquery.ui.datepicker-es.js"></script>-->
    <!--
     <script type='text/javascript' src='<?=$url?>js/jquery.min.js'></script>
    <script type='text/javascript' src='<?=$url?>js/jquery-ui.js'></script>
    <script type='text/javascript' src='<?=$url?>js/jquery.ui.datepicker-es.js'></script>
    -->
    <!--<script src="<?=$url?>lib/picker.js"></script>
    <script src="<?=$url?>lib/picker.js"></script>
    <script src="<?=$url?>lib/picker.date.js"></script>
    <script src="<?=$url?>lib/legacy.js"></script>
    <script src="<?=$url?>lib/translations/es_ES.js"></script>-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

</head>

<body>


<div id="wrapper">
    <style>
        .activar {

        }

        .desactivar1 {
            display: none;

        }
        .desactivar2 {


        }

        .basico {
            background: rgba(0, 0, 0, 0) linear-gradient(to bottom, #131921 0%, #131921 0%, #3f4c6b 99%) repeat scroll 0 0;
            color: #ffffff;
            padding-top: 10px;
            text-align: center;
        }
    </style>
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
                                <li><a href="<?=$url?>cotizador/index.php/AutosDanio/form">PÓLIZAS DE AUTOS (Daños a Terceros)</a></li>
                                <li><a href="<?=$url?>cotizador/index.php/AutosPolVida/form">PÓLIZA DE VIDA</a></li>
                                <li><a href="<?=$url?>cotizador/index.php/AutosPolIncendio/form">SEGURO DE INCENDIO</a></li>
                                <li><a href="<?=$url?>cotizador/index.php/AutosPolHipo/form">SEGURO HIPOTECARIO</a></li>
                                <li><a href="<?=$url?>cotizador/index.php/Pol_salud/form">PÓLIZA PLAN SALUD HIPOTECARIO</a></li>
                            </ul>
                        </li>

                        <li><a href="<?=$url?>contacto.php">CONTÁCTENOS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
<hr>
    <!-- fin section -->
    <section id="featured">
        <div class="container">
