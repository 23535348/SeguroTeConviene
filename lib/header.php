<!DOCTYPE html>

<html lang="es">
<head>
<title>Seguro te Conviene</title>
<link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='icons/css/bootstrap-glyphicons.css' rel='stylesheet' type='text/css'>
<link href='css/style.css' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="img/favicono.ico">
<link href="lib/jquery-ui-seguro/css/excite-bike/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="lib/jquery-ui-seguro/js/jquery-1.9.1.js"></script>
	<script src="lib/jquery-ui-seguro/js/jquery-ui-1.10.3.custom.js"></script>
	<script>
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		
		 
		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
	 

 
	});
	</script>
<script src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.8.13/jquery-ui.min.js"></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->

<style>
#wrapper {
	text-align: left;
	margin: 0px auto;
	padding: 0px;
	border:0;
	width: 1100px;
	height:420px;
/*	background: url("/path/to/your/background_cols.gif") repeat;*/
        /*min-width:500px;*/
       /* max-width:700px;*/
}

#form-side-a {
    float: left;
    width: 100px;
}

#side-a {
	float: left;
	width: 300px;
}

#side-b {
	float: right;
	width: 259px;
}

#content2 {
	float: left;
	width:580px;
	margin-left:250px;
    display:block;
}



#content3 {
    float: left;
    width:900px;
    margin-left:190px;
    display:block;
}
#mapa, #form_contact, #direccion {
    float: left;
    width:270px;
    margin-left: 5px;
    margin-right: 5px;
    display:inline;
}
#direccion{

    width: 250px;
}


</style>
</head>


<body style="max-width:1366px;min-width:1366px; margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;">

    <table border="0" width="1366px">
        <tr>
            <td align="Center"width="300px">
               <a href="index.php"><img src="img/logo.png"></a>
            </td> 
            
             <td align="Center" width="966px">
                <ul class="nav nav-pills" style="width:966px;">
                    <li class="active"><a href="index.php">INICIO</a></li>
                    <li><a href="qs.php">QUI&Eacute;NES SOMOS</a></li>
                    <li><a href="faq.php">PREGUNTAS FRECUENTES</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTOS <b class="caret"></b></a>
                            <ul class="dropdown-menu" align="Left">
                                <li><a href="vehiculos.php">SEGURO DE AUTO</a></li>
				<li><a href="vida.php">SEGURO DE VIDA</a></li>
				<li><a href="seguro_incendio.php">SEGURO DE INCENDIO</a></li>
				<li><a href="hipoteca.php">SEGURO HIPOTECARIO</a></li>
                            </ul>
                    </li>
					  
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">COTIZADOR <b class="caret"></b></a>
                            <ul class="dropdown-menu" align="Left">
                                <li><a href="cotizador.php">P&Oacute;LIZA DE AUTOS (Cobertura Completa)</a></li>
                                <li><a href="autos_terceros.php">P&Oacute;LIZA DE AUTOS (Daños a Terceros)</a></li>
				<li  style="text-align:left"><a href="cotizador_a.php">P&Oacute;LIZA DE VIDA</a></li>
				<li><a href="cotizador_b.php">P&Oacute;LIZA DE INCENDIO</a></li>
				<li><a href="cotizador_c.php">P&Oacute;LIZA PLAN HIPOTECARIO</a></li>
                            </ul>
                    </li>
		
                    <li><a href="contacto.php">CONT&Aacute;CTENOS</a></li>
		</ul>
            </td> 
             <td width="100px">
                <img  class="img-thumbnail" src="img/facebook.png">
                <img  class="img-thumbnail" src="img/twitter.png"> 
            </td> 
        </tr>
    </table>
    
    <div class="container1">
        <div class="slider">
            <div id="carousel-example-generic" class="carousel slide">
                <!-- Indicators -->  
                <ol class="carousel-indicators">    
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
  
                <div class="carousel-inner">      
                    <div class="item active foto">
                        <img src="img/familia_sl.png" alt="slide1"> <img class="letras" src="img/texto_familia_sl.png">
                    </div>

                    <div class="item  foto">
                        <img src="img/slide1.png" alt="slide1"> <img class="letras" src="img/letra_auto.png">
                    </div>
      
                    <div class="item foto">
                        <img src="img/imac.png" alt="imac"> <img class="letras" src="img/letra_cotiza.png"> <img class="foto1" src="img/slide2.png" alt="slide2">
                    </div>

                    <div class="item foto">
                        <img src="img/slide3.png" alt="slide1"> <img class="letras" src="img/letra_incendio.png">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="prev"><img src="img/prev.png"></span>
                </a>
  
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="next"><img src="img/next.png"></span>
                </a>
            </div>
        </div>
    </div>

    <script type='text/javascript'>

        $(document).ready(function() {
            $('.carousel').carousel({
            interval: 5000
            })
        });

    </script>
</body>
</html>
