<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Seguro te Conviene </title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />

	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/complemento_scroll_marquee.css" rel="stylesheet" />
	<link href="css/jquery.picMarque.css" rel="stylesheet" />
	<link rel="shortcut icon" type="image/x-icon" href="img/favicono.ico">
	<!-- Theme skin -->
	<link href="skins/default.css" rel="stylesheet" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<script src="js/jquery.scrollbox.js"></script>

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
                    <a class="navbar-link" href="index.php"><span><img src="img/logo.png" height="100"></span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio</a></li>
						<li><a href="qs.php">QUIÉNES SOMOS</a></li>
						<li><a href="faq.php">PREGUNTAS FRECUENTES</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">PÓLIZAS<b class=" icon-angle-down"></b></a>
							<ul class="dropdown-menu">
								<li><a href="vehiculos.php">SEGURO DE AUTO</a></li>
								<li><a href="vida.php">SEGURO DE VIDA</a></li>
								<li><a href="seguro_incendio.php">SEGURO DE INCENDIO</a></li>
								<li><a href="hipoteca.php">SEGURO HIPOTECARIO</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">COTIZADOR<b class=" icon-angle-down"></b></a>
							<ul class="dropdown-menu">
								<li><a href="cotizador/index.php/Autos/form">PÓLIZAS DE AUTOS (Cobertura completa)</a></li>
								<li><a href="cotizador/index.php/AutosDanio/form">PÓLIZAS DE AUTOS (Daños a Terceros)</a></li>
								<li><a href="cotizador/index.php/AutosPolVida/form">PÓLIZA DE VIDA</a></li>
								<li><a href="cotizador/index.php/AutosPolIncendio/form">SEGURO DE INCENDIO</a></li>
								<li><a href="cotizador/index.php/AutosPolHipo/form">SEGURO PLAN HIPOTECARIO</a></li>

							</ul>
						</li>
						<li><a href="contacto.php">CONT�?CTENOS</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
	<!-- Slider -->
        <div class="col-sm-12">
            <div id="main-slider" class="flexslider">
                <ul class="slides fondo-slider">
                  <li class="">
                    <img class="img-responsive" src="img/slides/imagenes1.png" alt="" width=""/>

                  </li>
                  <li>
                    <img class="img-responsive" src="img/slides/imagenes2.png" alt="" />

                  </li>
                  <li>
                    <img class="img-responsive" src="img/slides/imagenes3.png" alt="" />

                  </li>
                                    <li>
                                            <img class="img-responsive" src="img/slides/imagenes4.png" alt="" />

                                    </li>
                </ul>
            </div>
        </div>


	<div class="row">
            <div class="col-xs-12">
                <div class="col-xs-6">
                    <a href="cotizador/index.php/Autos/form" style="text-decoration:none;">
                       <!-- <img  class="img-responsive cotizadores"  onmouseout="this.src='img/vehiculos.png';" onmouseover="this.src='img/auto1.png';" src="img/auto.png"> -->
                        <img  class="img-responsive cotizadores"   src="img/auto.png">
                    </a>
                </div>
                
                <div class="col-xs-6">
                    <a href="cotizador/index.php/AutosDanio/form" style="text-decoration:none;">
                      <!--  <img  class="img-responsive cotizadores" onmouseout="this.src='img/terceros.png';" onmouseover="this.src='img/terceros.png';" src="img/terceros.png"> -->
                       <img  class="img-responsive cotizadores"  src="img/terceros.png"> 
                    </a>
                </div>

            </div>
	</div>
        <div class="row">
                <div class="col-xs-12">

                        <div class="col-xs-6">
                                <a href="cotizador/index.php/AutosPolVida/form" style="text-decoration:none;">
                                        <!-- <img class=" img-responsive cotizadores" onmouseout="this.src='img/vida.png';" onmouseover="this.src='img/vida1.png';" src="img/vida.png"> -->
                                    <img class=" img-responsive cotizadores"  src="img/vida.png">
                                </a>
                        </div>
                        <div class="col-xs-6">
                                <a href="cotizador/index.php/AutosPolIncendio/form" style="text-decoration:none;">
                                        <!-- <img  class="img-responsive cotizadores" onmouseout="this.src='img/incendio.png';" onmouseover="this.src='img/incendio1.png';" src="img/incendio.png"> -->
                                    <img  class="img-responsive cotizadores" src="img/incendio.png">
                                </a>
                        </div>

                </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                    <div class="col-xs-6">
                            <a href="cotizador/index.php/AutosPolHipo/form" style="text-decoration:none;">
                                    <!-- <img  class="img-responsive cotizadores" onmouseout="this.src='img/hipotecario.png';" onmouseover="this.src='img/hipotecario1.png';" src="img/hipotecario.png"> -->
                                <img  class="img-responsive cotizadores"  src="img/hipotecario.png"> 
                            </a>
                    </div>
                    <div class="col-xs-6">
                            <a href="cotizador/index.php/Pol_salud/form" style="text-decoration:none;">
                                    <!-- <img  class="img-responsive cotizadores"  onmouseout="this.src='img/salud.png';" onmouseover="this.src='img/salud1.png';" src="img/salud.png"> -->
                                <img  class="img-responsive cotizadores"   src="img/salud.png">
                            </a>
                    </div>

            </div>
        </div>

</div>


	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>
<!-- section-->
<!-- fin section -->





		<!-- fin cuepo !-->
		<!-- divider -->

		<!-- end divider -->









	</div>
	</section>

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.picMarque.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		var picData = [
			{
				image:'img/logos/sura.png',
				title:'',
				link:'#'
			},
			{
				image:'img/logos/acerta.png',
				title:'',
				link:'#'
			},
			{
				image:'img/logos/iseguros.png',
				title:'',
				link:'#'
			},
			{
				image:'img/logos/assa.png',
				title:'',
				link:'#'
			},
			{
				image:'img/logos/generali.png',
				title:'',
				link:'#'
			},
			{
				image:'img/logos/banesco.png',
				title:'',
				link:'#'
			},
			{
				image:'img/logos/Logo_NASE.JPG',
				title:'',
				link:'#'
			},
			{
				image:'img/logos/palig.png',
				title:'',
				link:'#'
			}]

		$("#marquePic").picMarque({
			speed: 60,//scroll speed?ms?
			errorimg: 'nophoto.jpg',//error image path
			data: picData
		})
	});
</script>
<script type='text/javascript'>
	$(document).ready(function() {
		//    $(".tab-pane").hide(); //Ocultar capas contenido_tab
		//  $("ul.tabs li:first").addClass("active").show(); //Activar primera pestaña
		// $(".contenido_tab:first").show(); //Mostrar contenido primera pestaña

// Sucesos al hacer click en una pestaña
		$(".activarPanel").click(function() {
			$("ul.tabs-left li").removeClass("active"); //Borrar todas las clases "activa"
			$(".tablaTabs").removeClass("active");
			$(".tab-pane").removeClass("active");
			$(".link1").addClass("active");//Añadir clase "activa" a la pestaña seleccionada
			$(".link1").remove("display: none");
			$(".tab-pane").hide(); //Ocultar todo el contenido de la pestaña

			$("tablaTabs").show();
			var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa
			$(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
			return false;
		});
		$(".activarPane2").click(function() {
			$("ul.tabs-left li").removeClass("active"); //Borrar todas las clases "activa"
			$(".tablaTabs").removeClass("active");
			$(".tab-pane").removeClass("active");
			$(".link2").addClass("active");//Añadir clase "activa" a la pestaña seleccionada
			$(".link2").remove("display: none");
			$(".tab-pane").hide(); //Ocultar todo el contenido de la pestaña

			$("tablaTabs").show();
			var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa
			$(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
			return false;
		});

	});
</script>
</body>
</html>

<?//scroll-img?>