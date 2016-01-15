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
    <link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />

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
                        <li><a href="contacto.php">CONTÁCTENOS</a></li>
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
                <div class="col-lg-12">
                    <!-- Slider -->
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
                    <div class="gris">
                        Preguntas Frecuentes
                    </div>

                    <!-- end slider -->
                </div>
            </div>
        </div>



    </section>
    <!-- section-->

    <!-- fin section -->
    <section id="content">
        <div class="container">

            <!-- divider -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            <!-- end divider -->
            <!-- Cuerpo-->
            <div class="row"  style="min-height:300px;">
                <div class="col-lg-12">
                    <div class="col-lg-12 ocultar_mov">
                        <div class="col-lg-3" align="center">
                            <ul class="nav nav-tabs tabs-left" style="padding-top:50px; padding-left:10px; padding-right:0px; width:180px; height:400px; z-index:50000000000000; margin-bottom:50px; background-color:#428bca; -webkit-border-top-right-radius: 10px; -webkit-border-bottom-right-radius: 10px; -moz-border-radius-topright: 10px; -moz-border-radius-bottomright: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px;">
                                <li class="active">
                                    <a class="cambioColor"  data-toggle="tab" href="#PreguntasFrecuentes">Preguntas Frecuentes</a>

                                </li>
                                <li class="">
                                    <a class="cambioColor" data-toggle="tab" href="#sev">¿Por qué Contratar un Seguro de Vida?</a>

                                </li>
                                <li class="link1">
                                    <a class="cambioColor"  data-toggle="tab" href="#siniestro">¿Que Hacer en Caso de un Siniestro?</a>

                                </li>
                                <li class="">
                                    <a class="cambioColor"  data-toggle="tab" href="#reclamos">Formularios de Reclamos de Auto y Conozca su Cliente</a>

                                </li>
                                <li class="">
                                    <a class="cambioColor"  data-toggle="tab" href="#asociacion">Asociaciones a las que Pertenecemos</a>

                                </li>
                            </ul>
                        </div>
                        <style>
                            .ui-accordion .ui-accordion-header-active
                            {
                                background: red;
                            }
                        </style>
                        <div class="col-lg-9">
                            <div class="tab-content">
                                <div id="PreguntasFrecuentes" class="tab-pane active ac">
                                    <div class="col-lg-8">
                                        <div>

                                            <div class="accordion ui-accordion ui-widget ui-helper-reset" id="preguntas">
                                                <div class="accordion-group">
                                                    <div class="accordion-heading ui-widget ui-accordion-header  cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta1">
                                                            ¿Quién es www.seguroteconviene.com?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta1" class="accordion-body collapse" style="height: 0px; ">
                                                        <div class="accordion-inner">
                                                            R: La marca comercial www.seguroteconviene.com es propiedad de la firma JIMFOR, S.A., empresa dedicada al corretaje de seguros desde 1978, con vasta experiencia en el mercado asegurador panameño.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-state  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta2">
                                                            ¿Cómo se cotizan los seguros a través de esta página?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta2" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: En www.seguroteconviene.com queremos hacerte la vida más fácil a la hora de escoger tu póliza de Auto, Vida e Incendio; en la comodidad de tu residencia, oficina o donde estés, con solo brindarnos la información relevante al seguro que necesitas en tres simples pasos podrás comparar en minutos las primas de las mejores compañías de seguros del País.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta3">
                                                            ¿Qué tipo de seguros puedo cotizar a través de este sitio?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Los seguros que puedes cotizar a través de nuestra página web son las pólizas de Auto (Cobertura Completa o Daños a Terceros solamente), seguro de Incendio residencial para Estructura, Seguro de Vida a Término y el Plan Hipotecario (Incendio + Vida).
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta4">
                                                            ¿Antes de asegurar mi auto con cobertura completa necesito que inspeccionen el mismo?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Si su auto es usado la compañía de seguros exige una inspección completa, en donde se le tomaran fotos y se revisará las condiciones del mismo. Si el auto es cero kilómetros solo necesitamos nos envíe la proforma o factura del auto nuevo.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta5">
                                                            ¿Hasta cuántos años de antigüedad de mi auto puedo asegurarlo con cobertura completa?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: La mayoría de las compañías de seguros ofrecen cobertura completa para autos hasta los 8 años de uso, sin embargo es posible conseguirle cobertura completa a autos que tengan hasta 10 años de uso según su condición.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta6">
                                                            ¿Pueden mis hijos y cónyuge conducir mi auto?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta6" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Sí, toda persona autorizada por el propietario del auto podrá conducir el mismo siempre y cuando cumpla con las condiciones estipuladas en la póliza. Es recomendable que en caso de que otras personas, que no sean el asegurado nombrado en la póliza, estén manejando el auto de su propiedad sean notificadas a la compañía de seguros para ser incluidas como conductores adicionales, esto no conlleva prima adicional.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta7">
                                                            ¿Qué opciones tengo para pagar mis pólizas?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Las pólizas pueden ser pagadas voluntariamente en nuestras oficinas o en la compañía de seguros, a través de descuentos bancarios (ACH) o descuento a tarjeta de crédito. Dependiendo del tipo de póliza y medio utilizado para la transacción, las frecuencias de pago pueden ser Anuales, Semestrales, Trimestrales o Mensuales (hasta 10 pagos iguales).
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta8">
                                                            ¿Luego de adquirida la póliza quién me dará respaldo a la hora presentar un reclamo?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta8" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: www.seguroteconviene.com forma parte de la empresa de corretaje JIMFOR, S.A., corredores de seguros por más de tres décadas, con personal altamente capacitado quienes estarán a sus enteras órdenes para atender cualquier consulta que usted tenga y ayudarlo a presentar y darle seguimiento a sus reclamaciones.   </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta9">
                                                            ¿Cuándo debo presentar mis reclamos?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta9" class="accordion-body collapse">
                                                        <div class="accordion-inner  ">
                                                            R: A la hora de un siniestro el Asegurado deberá notificar inmediatamente a nuestras oficinas y a la compañía de seguros para empezar el trámite del reclamo. Si ha tenido un accidente de tránsito deberá comunicarse con la empresa encargada de asistir a la compañía de seguros. Favor revisar en nuestra página en dónde podrá encontrar más información de cómo presentar sus reclamos.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta10">
                                                            ¿Es posible reducir aún más el costo de la prima de mi auto si le aumento el deducible?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta10" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Sí es posible. Con aumentar el deducible en las coberturas de colisión y comprensivo, usted podrá optar por otras opciones a las presentadas en este sitio para reducir el costo de su prima anual. Para ello debe llamar a nuestras oficinas y notificarle al personal de nuestra empresa y con gusto le presentaremos las diferentes opciones para su evaluación. </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta11">
                                                            Definiciones para las coberturas de Auto:
                                                        </a>
                                                    </div>
                                                    <div id="pregunta11" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Lesiones Corporales:</b>
                                                            Le brinda cobertura hasta el límite contratado en caso de que usted lesione corporalmente a terceros en caso de accidente.
                                                            <br>
                                                            <br>
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Daños a la Propiedad Ajena:</b>
                                                            Esta cobertura se extiende para cubrir los daños ocasionados por su auto a bienes propiedad de terceros.
                                                            <br>
                                                            <br>
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Gastos Médicos:</b>
                                                            Ampara el pago de gastos médicos como consecuencia de lesiones corporales que sufra el Asegurado, o cualquier persona ocupante del auto, a consecuencia de un accidente de tránsito cubierto por la póliza.
                                                            <br>
                                                            <br>
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Colisión o vuelco:</b>
                                                            Cubre los daños físicos causados a su auto como consecuencia de un accidente de tránsito cubierto por la póliza.
                                                            <br>
                                                            <br>
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Comprensivo:</b>
                                                            Esta cobertura ampara su auto contra riesgos como Robo parcial o total de su vehículo, Inundación e Incendio del mismo.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>






                                    </div>


                                    <div class="col-lg-4">
                                        <div>
                                            <div id="side-b" class="activarPanel" align="center">
                                                <a href="#siniestro">
                                                    <img class="img-thumbnail banners" src="img/3.jpg">
                                                </a>
                                                <br>
                                                <br>
                                                <a href="cotizador_a.php">
                                                    <img class="img-thumbnail" src="img/4.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="sev" class="tab-pane">
                                    <div class="col-lg-8">
                                        <div>
                                            <b>1. ¿Por qué contratar un Seguro de Vida?</b>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            El seguro de vida es la mejor herencia que usted le puede dejar a sus seres queridos, es un legado de Amor.
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Al contratar un seguro de vida usted le deja a los suyos la tranquilidad financiera necesaria para hacerle frente a sus obligaciones comerciales, personales y educacionales, reduciendo el impacto económico que se produce al momento de su muerte.
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Al momento de solicitar un seguro de vida el Asegurado tiene la posibilidad de incluir dentro de las coberturas principales contratos complementarios como los son la incapacidad total y permanente para trabajar y la cobertura de enfermedades graves, en las cuales la compañía de seguros le indemnizará en vida directamente al asegurado luego de comprobarse dichas condiciones.
                                            <br>
                                            <br>
                                            <b>2. Ventajas de una póliza de Vida Individual vs la póliza del colectivo bancario:</b>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            La póliza individual es tuya y puedes administrarla de la forma que desees.
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            La póliza del banco solo cubre el saldo de la deuda, pero la prima que te cobran es siempre la misma. La póliza individual mantiene la suma asegurada inicial y en caso de fallecimiento pagará el saldo adeudado al banco y la diferencia a tus beneficiarios.
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            En caso de querer cambiar de banco puedes utilizar tu póliza de vida individual sin tener que pasar por pruebas médicas, tienes tu asegurabilidad garantizada.
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Si estuvieras en la póliza de vida del Banco y llegarás a tener un problema de salud grave, es muy seguro que no fueras sujeto elegible para otra póliza de vida, por lo que no podrías cambiarte de este banco por el resto de tu vida, perdiendo las oportunidades que ofrecen los otros bancos del mercado. Si tienes una póliza de Vida individual, tú eres el dueño de tu destino.
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Por lo general, la prima de una póliza de vida individual es menor a la póliza que te cobran en la entidad bancaria, con mejores beneficios y es de tu propiedad.
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                             La ley No. 12 que regula la actividad de seguros en Panamá te da derecho de adquirir las pólizas que necesitas en la compañía de seguros de tu elección y obliga a la entidad bancaria a recibirlas sin penalidad alguna.
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <div id="side-b"class="activarPanel" align="center">
                                                <a href="#siniestro">
                                                    <img class="img-thumbnail banners" src="img/3.jpg">
                                                </a>
                                                <br>
                                                <br>
                                                <a href="cotizador_a.php">
                                                    <img class="img-thumbnail" src="img/4.jpg">
                                                </a>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div id="siniestro" class="tab-pane link1">
                                    <div class="col-lg-8">
                                        <p>
                                            <b style="color:#FFA500;font-size:18px;">¿Qué hacer en caso de siniestro?</b>
                                            <br>
                                            <br>
                                            <b style="color:#FFA500;">AUTOMÓVIL</b>
                                            <br>
                                            <br>
                                            <img src="img/quehacer-automovil.jpg">
                                            <br>
                                            <font size="4">En caso de que usted se vea involucrado en un accidente de tránsito le recomendamos los siguientes pasos a seguir.</font>
                                            <br>
                                            <br>
                                        <div class="accordion" id="accordion2">
                                            <div class="accordion-group">
                                                <div class="accordion-heading">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                                        Mas Información aqui...
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
                                                    <div class="accordion-inner">
                                                        <div style="color:black;">
                                                            <div style="color:black;">
                                                                <p>
                                                                    <b style="color:#FFA500;">Que debe hacer en caso de un accidente de tránsito menor</b>
                                                                    <br>
                                                                    <br>
                                                                    Se considera accidente de tránsito menor, toda colisión donde los vehículos involucrados en la misma puedan ser desplazados de la vía por sus propios conductores, sin ningún tipo de auxilio mecánico (reparaciones, uso de grúas, etc.), y que los ocupantes o terceros involucrados en el hecho no resulten con algún tipo de lesión.
                                                                    <br>
                                                                    <br>
                                                                    1. Lo primero que usted debe hacer en caso de accidente es llamar al número de asistencia de su compañía de seguros, informar del accidente y seguir las indicaciones que le brindará su personal. El personal de la compañía de seguros le solicitará el número de póliza, por lo que le recomendamos tener copia de la misma dentro de su automóvil. A continuación los números de teléfono para asistencia en caso de accidente de las diferentes compañías de seguros:
                                                                    <br>
                                                                </p>
                                                                <table cellspacing="1" cellpadding="2" border="0" width="460" align="center">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td bgcolor="#E5E5E5" width="195">
                                                                        <td bgcolor="#E5E5E5" width="116" align="center">
                                                                        <td bgcolor="#E5E5E5" width="121" align="center">
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#F8F8F8">Internacional de Seguros</td>
                                                                        <td bgcolor="#F8F8F8" align="center">800-4400</td>
                                                                        <td bgcolor="#F8F8F8" align="center">265-2881</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#F8F8F8">Assa Compañía de Seguros</td>
                                                                        <td bgcolor="#F8F8F8" align="center">300-2424</td>
                                                                        <td bgcolor="#F8F8F8" align="center"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#EFEFEF">Banistmo Seguros</td>
                                                                        <td bgcolor="#EFEFEF" align="center">300-2445</td>
                                                                        <td bgcolor="#EFEFEF" align="center">265-8255</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#EFEFEF">Assicurazioni Generali</td>
                                                                        <td bgcolor="#EFEFEF" align="center">800-4357</td>
                                                                        <td bgcolor="#EFEFEF" align="center"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#EFEFEF">Seguros SURA</td>
                                                                        <td bgcolor="#EFEFEF" align="center">800-8888</td>
                                                                        <td bgcolor="#EFEFEF" align="center"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#F8F8F8">Banesco Seguros</td>
                                                                        <td bgcolor="#F8F8F8" align="center">366-8585</td>
                                                                        <td bgcolor="#F8F8F8" align="center"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#F8F8F8">Acerta Compañía de Seguros</td>
                                                                        <td bgcolor="#F8F8F8" align="center">307-3030</td>
                                                                        <td bgcolor="#F8F8F8" align="center"> </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <br>
                                                                <br>
                                                                2. Los conductores involucrados en el accidente de tránsito menor, de ser posible, sustentarán los hechos mediante la captación de vistas fotográficas, videos o, a través de cualquier herramienta tecnológica que facilite la descripción del accidente. Si no tiene cámara haga un diagrama o dibujo de la posición final de los mismos.
                                                                <br>
                                                                <br>
                                                                3. Los conductores involucrados en un accidente de tránsito menor deberán mover los vehículos de la vía, aún en caso de que uno de los conductores no esté de acuerdo en cómo se dieron los hechos o no se acepte responsabilidad. Aquellos que incumplan con dicha obligación, serán sancionados por obstrucción del tránsito con cincuenta balboas (B/.50.00).
                                                                <br>
                                                                <br>
                                                                4. Cada conductor debe llenar su propio
                                                                <a target="_blank" href="pdf/fud.pdf" style="color:#0066cc;">Formato Único y Definitivo (FUD)</a>
                                                                , conservar el original e intercambiar copia del formulario con la contraparte.
                                                                <br>
                                                                <br>
                                                                El Formulario Único y Definitivo es un documento que deben completar los conductores de los vehículos involucrados en un accidente menor, en donde se detallan todas las generalidades del vehículo y del conductor, al igual que se describe lo ocurrido en el accidente, y le brinda la posibilidad, a cualquiera de los conductores, a que acepte voluntariamente su responsabilidad por la colisión ocurrida.
                                                                <br>
                                                                <br>
                                                                Los datos y manifestaciones plasmadas por los conductores o propietarios en el Formato Único y Definitivo (FUD) se considerarán declaración jurada de los hechos acontecidos.
                                                                <br>
                                                                <br>
                                                                Usted debe leer todo el formulario que le estén entregando antes de firmarlo y verificar que la información que allí se detalla esté correcta y que no queden espacios en blanco. Entre más información exista, más fácil será para la compañía de seguros atender el reclamo. No se proclame responsable del accidente al menos que usted esté completamente convencido de su responsabilidad.
                                                                <br>
                                                                <br>
                                                                5. Si los conductores involucrados en un accidente de tránsito menor no lograsen llegar a un acuerdo en cuanto a la responsabilidad del hecho, entonces se requerirá la presencia de un Inspector de Tránsito para el levantamiento del parte policivo. Para ello debe llamar a la línea del tránsito 311 y a su vez llenar el FUD (el mismo será utilizado por la ATTT para levantar el parte policivo). Igualmente si alguno de los conductores involucrados no presenta póliza de seguros de auto vigente se debe llamar al 311.
                                                                <br>
                                                                <br>
                                                                6. En caso de no ser atendido por su compañía de seguros en la escena del accidente, favor acudir a sus oficinas de inmediato, o al siguiente día hábil, para presentar el reclamo y entregar el FUD. Igualmente debe notificar a JIMFOR, S.A. dentro de las 24 horas siguientes al accidente para poder brindarle el asesoramiento debido y seguimiento a su reclamo.
                                                                <br>
                                                                <br>
                                                                <b>NO DEBE MOVER EL AUTO EN LOS SIGUIENTES CASOS</b>
                                                                <br>
                                                                <br>
                                                                1. Cuando la colisión se dé contra un objeto fijo.
                                                                <br>
                                                                2. Cuando existan lesionados o heridos en cualquiera de los vehículos involucrados.
                                                                <br>
                                                                3. Si cualquiera de los vehículos involucrados en el accidente no puede moverse por sus propios medios.
                                                                <br>
                                                                4. Cuando a su criterio, alguno de los conductores de los vehículos involucrados en la colisión se encuentre bajo la influencia de alcohol o drogas.
                                                                <br>
                                                                <br>
                                                                Cuando se dé uno de estos cuatro casos se debe esperar al inspector del tránsito antes de mover los autos. Siempre llame a la asistencia de la compañía de seguros para que un ajustador se presente al lugar del accidente y pueda levantar el informe de reclamos correspondiente.
                                                                <br>
                                                                <br>
                                                                DOCUMENTOS QUE DEBE MANTENER EN EL AUTO
                                                                <br>
                                                                <br>
                                                                Todo propietario de vehículos a motor deberá mantener dentro de su vehículo los siguientes documentos:
                                                                <br>
                                                                <br>
                                                                o Copia del Registro Único de Propiedad Vehicular
                                                                <br>
                                                                o Copia vigente de la póliza del auto
                                                                <br>
                                                                o Reglamento del Tránsito
                                                                <br>
                                                                o Formulario Único y Definitivo (FUD) - Preferiblemente dos copias adicionales.
                                                                <br>
                                                                <br>
                                                                Los propietarios o conductores de vehículos a motor que al momento de la ocurrencia de un accidente de tránsito no posean el seguro de Responsabilidad Civil vigente serán sancionados con multa de cien balboas (B/.100.00) a imponer por los jueces de tránsito.
                                                                <br>
                                                                <br>
                                                                Nota: Este documento solo representa una interpretación que JIMFOR, S.A. le da al Decreto Ejecutivo No. 958 (10 de Diciembre de 2010), tomando como base el decreto y las reuniones y seminarios asistidos por nuestro personal, por lo que el mismo no crea responsabilidad alguna para JIMFOR, S.A. por las acciones u omisiones en las que haya incurrido el Asegurado por su observancia.
                                                                <br>
                                                                <br>
                                                                <p></p>
                                                            </div>
                                                            </td>

                                                            </td>
                                                            </tr>
                                                            </tbody>
                                                            </table>




                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

















                                        <br>
                                        <br>
                                        <b style="color:#FFA500;">INCENDIO</b>
                                        <br>
                                        <br>
                                        <img src="img/quehacer-incendio.jpg">
                                        <br>
                                        <font size="4">Al tener conocimiento de un siniestro que pueda causar daños o pérdidas de los bienes asegurados en la póliza, el Asegurado tendrá la obligación de hacer todo lo que sea posible tendiente a evitar o disminuir el daño.</font>
                                        <br>
                                        <br>

                                        <div class="accordion" id="accordion3">
                                            <div class="accordion-group">
                                                <div class="accordion-heading">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#informacion2">
                                                        Mas Información aqui...
                                                    </a>
                                                </div>
                                                <div id="informacion2" class="accordion-body collapse" style="height: 0px; ">
                                                    <div class="accordion-inner">
                                                        <div style="color:black;">

                                                            <p>
                                                                <b style="color:#FFA500;">
                                                                    <font size="4">Qué debe hacer en caso de un siniestro de Incendio</font>
                                                                </b>
                                                                <br>
                                                                <br>
                                                                <font size="4">Al tener conocimiento de un siniestro que pueda causar daños o pérdidas de los bienes asegurados en la póliza, el Asegurado tendrá la obligación de hacer todo lo que sea posible tendiente a evitar o disminuir el daño, y de notificarlo inmediatamente a JIMFOR, S.A. y a su Compañía de Seguros. Dentro de los treinta (30) días calendarios subsiguientes a la fecha del siniestro, el Asegurado deberá presentar a la Compañía de Seguros los siguientes documentos:</font>
                                                                <br>
                                                                <br>
                                                                <font size="4">
                                                                    1. Un informe sobre el siniestro, indicando el lugar, fecha y hora aproximada en que ocurrió, la causa probable del siniestro y las circunstancias en las que se produjo.
                                                                    <br>
                                                                    <br>
                                                                    2. Una relación detallada de cualesquiera otros seguros que amparen cualquier parte de los bienes asegurados.
                                                                    <br>
                                                                    <br>
                                                                    3. Un inventario detallado y exacto de los bienes destruidos y el importe de la pérdida en cada caso, sin incluir ganancia alguna.
                                                                    <br>
                                                                    <br>
                                                                    4. El interés del Asegurado y de cualquier otro sobre los bienes afectados.
                                                                    <br>
                                                                    <br>
                                                                </font>
                                                                <br>
                                                                <br>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <div id="side-b" class="activarPanel" align="center">
                                                <a href="#siniestro">
                                                    <img class="img-thumbnail banners" src="img/3.jpg">
                                                </a>
                                                <br>
                                                <br>
                                                <a href="cotizador_a.php">
                                                    <img class="img-thumbnail" src="img/4.jpg">
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div id="reclamos" class="tab-pane">
                                    <div class="col-lg-8">
                                        <div class="col-lg-6" >

                                            <b style="color:#FFA500;">Formularios de Reclamos de Auto:</b>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Informe de accidente de ACERTA:
                                            <a target="_blank" href="pdf/accidenteacerta.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Informe de accidente de ASSA:
                                            <a target="_blank" href="pdf/accidenteassa.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Informe de accidente de Banesco:
                                            <a target="_blank" href="pdf/accidentebanesco.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Informe de accidente de Generali:
                                            <a target="_blank" href="pdf/accidentegenerali.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Informe de accidente de Banistmo:
                                            <a target="_blank" href="pdf/accidentehsbc.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Informe de accidente de IS:
                                            <a target="_blank" href="pdf/accidenteis.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Informe de accidente de SURA:
                                            <a target="_blank" href="pdf/accidentesura.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>

                                        </div>
                                        <div clas="col-lg-6">

                                            <b style="color:#FFA500;">Conozca su Cliente:</b>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Formulario de Conozca su Cliente:
                                            <a target="_blank" href="pdf/conocetucliente.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                            <b style="color:#FFA500;">FUD y Decreto 958:</b>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Formulario único y definitivo (FUD):
                                            <a target="_blank" href="pdf/fud.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                            <img src="img/gancho.png">
                                            Decreto ejecutivo de ley 958:
                                            <a target="_blank" href="pdf/decreto958.pdf" style="color:#0066cc;">Descargar</a>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <div id="side-b" class="activarPanel" align="center">
                                                <a href="#siniestro">
                                                    <img class="img-thumbnail banners" src="img/3.jpg">
                                                </a>
                                                <br>
                                                <br>
                                                <a href="cotizador_a.php">
                                                    <img class="img-thumbnail" src="img/4.jpg">
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div id="asociacion" class="tab-pane">
                                    <div class="col-lg-8">
                                        <p>
                                            <b>Asociaciones a las que pertenecemos:</b>
                                            <br>
                                            <br>
                                            <b>JIMFOR, S.A.</b>
                                            propietaria de
                                            <b>www.seguroteconviene.com</b>
                                            pertenece y participa activamente en las siguientes asociaciones:
                                            <br>
                                            <br>
                                            <img src="img/conalprose.jpg">
                                            Colegio Nacional de Productores de Seguros
                                            <br>
                                            <br>
                                            <img src="img/unitas.jpg">
                                            Cámara Panameña de Empresas de Corretaje de Seguros (CAPECOSE)
                                            <br>
                                            <br>
                                            <img src="img/camara.jpg">
                                            Cámara de Comercio Industrias y agricultura de Panamá
                                        </p>

                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <div id="side-b" class="activarPanel"align="center">
                                                <a href="#siniestro">
                                                    <img class="img-thumbnail banners" src="img/3.jpg">
                                                </a>
                                                <br>
                                                <br>
                                                <a href="cotizador_a.php">
                                                    <img class="img-thumbnail" src="img/4.jpg">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>




                    <div class="tabs-container tabla_oculta ">
                        <div class="tabs-left">

                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab-5" data-toggle="tab" aria-expanded="true">Preguntas Frecuentes</a>
                                </li>
                                <li class="">
                                    <a href="#tab-6" data-toggle="tab" aria-expanded="true">¿Por qué Contratar un Seguro de Vida?</a>
                                </li>
                                <li class="">
                                    <a href="#tab-7" data-toggle="tab" aria-expanded="false">¿Que Hacer en Caso de un Siniestro?</a>
                                </li>
                                <li class="">
                                    <a href="#tab-8" data-toggle="tab" aria-expanded="false">Formularios de Reclamos de Auto y Conozca su Cliente</a>
                                </li>
                                <li class="">
                                    <a href="#tab-9" data-toggle="tab" aria-expanded="false">Asociaciones a las que Pertenecemos</a>
                                </li>
                            </ul>
                            <div class="tab-content ">
                                <div id="tab-5" class="tab-pane active">
                                    <div class="">
                                        <strong></strong>
                                        <div>
                                            <div class="accordion ui-accordion ui-widget ui-helper-reset" id="preguntas">
                                                <div class="accordion-group">
                                                    <div class="accordion-heading ui-widget ui-accordion-header  cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta1">
                                                            ¿Quién es www.seguroteconviene.com?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta1" class="accordion-body collapse" style="height: 0px; ">
                                                        <div class="accordion-inner">
                                                            R: La marca comercial www.seguroteconviene.com es propiedad de la firma JIMFOR, S.A., empresa dedicada al corretaje de seguros desde 1978, con vasta experiencia en el mercado asegurador panameño.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-state  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta2">
                                                            ¿Cómo se cotizan los seguros a través de esta página?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta2" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: En www.seguroteconviene.com queremos hacerte la vida más fácil a la hora de escoger tu póliza de Auto, Vida e Incendio; en la comodidad de tu residencia, oficina o donde estés, con solo brindarnos la información relevante al seguro que necesitas en tres simples pasos podrás comparar en minutos las primas de las mejores compañías de seguros del País.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta3">
                                                            ¿Qué tipo de seguros puedo cotizar a través de este sitio?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Los seguros que puedes cotizar a través de nuestra página web son las pólizas de Auto (Cobertura Completa o Daños a Terceros solamente), seguro de Incendio residencial para Estructura, Seguro de Vida a Término y el Plan Hipotecario (Incendio + Vida).
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta4">
                                                            ¿Antes de asegurar mi auto con cobertura completa necesito que inspeccionen el mismo?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Si su auto es usado la compañía de seguros exige una inspección completa, en donde se le tomaran fotos y se revisará las condiciones del mismo. Si el auto es cero kilómetros solo necesitamos nos envíe la proforma o factura del auto nuevo.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta5">
                                                            ¿Hasta cuántos años de antigüedad de mi auto puedo asegurarlo con cobertura completa?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: La mayoría de las compañías de seguros ofrecen cobertura completa para autos hasta los 8 años de uso, sin embargo es posible conseguirle cobertura completa a autos que tengan hasta 10 años de uso según su condición.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta6">
                                                            ¿Pueden mis hijos y cónyuge conducir mi auto?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta6" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Sí, toda persona autorizada por el propietario del auto podrá conducir el mismo siempre y cuando cumpla con las condiciones estipuladas en la póliza. Es recomendable que en caso de que otras personas, que no sean el asegurado nombrado en la póliza, estén manejando el auto de su propiedad sean notificadas a la compañía de seguros para ser incluidas como conductores adicionales, esto no conlleva prima adicional.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta7">
                                                            ¿Qué opciones tengo para pagar mis pólizas?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Las pólizas pueden ser pagadas voluntariamente en nuestras oficinas o en la compañía de seguros, a través de descuentos bancarios (ACH) o descuento a tarjeta de crédito. Dependiendo del tipo de póliza y medio utilizado para la transacción, las frecuencias de pago pueden ser Anuales, Semestrales, Trimestrales o Mensuales (hasta 10 pagos iguales).
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta8">
                                                            ¿Luego de adquirida la póliza quién me dará respaldo a la hora presentar un reclamo?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta8" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: www.seguroteconviene.com forma parte de la empresa de corretaje JIMFOR, S.A., corredores de seguros por más de tres décadas, con personal altamente capacitado quienes estarán a sus enteras órdenes para atender cualquier consulta que usted tenga y ayudarlo a presentar y darle seguimiento a sus reclamaciones.   </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta9">
                                                            ¿Cuándo debo presentar mis reclamos?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta9" class="accordion-body collapse">
                                                        <div class="accordion-inner  ">
                                                            R: A la hora de un siniestro el Asegurado deberá notificar inmediatamente a nuestras oficinas y a la compañía de seguros para empezar el trámite del reclamo. Si ha tenido un accidente de tránsito deberá comunicarse con la empresa encargada de asistir a la compañía de seguros. Favor revisar en nuestra página en dónde podrá encontrar más información de cómo presentar sus reclamos.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta10">
                                                            ¿Es posible reducir aún más el costo de la prima de mi auto si le aumento el deducible?
                                                        </a>
                                                    </div>
                                                    <div id="pregunta10" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            R: Sí es posible. Con aumentar el deducible en las coberturas de colisión y comprensivo, usted podrá optar por otras opciones a las presentadas en este sitio para reducir el costo de su prima anual. Para ello debe llamar a nuestras oficinas y notificarle al personal de nuestra empresa y con gusto le presentaremos las diferentes opciones para su evaluación. </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading  ui-widget  ui-accordion-header cambioImg SeleccionAcor">
                                                        <a class="accordion-toggle cambioColor2" data-toggle="collapse" data-parent="#preguntas" href="#pregunta11">
                                                            Definiciones para las coberturas de Auto:
                                                        </a>
                                                    </div>
                                                    <div id="pregunta11" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Lesiones Corporales:</b>
                                                            Le brinda cobertura hasta el límite contratado en caso de que usted lesione corporalmente a terceros en caso de accidente.
                                                            <br>
                                                            <br>
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Daños a la Propiedad Ajena:</b>
                                                            Esta cobertura se extiende para cubrir los daños ocasionados por su auto a bienes propiedad de terceros.
                                                            <br>
                                                            <br>
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Gastos Médicos:</b>
                                                            Ampara el pago de gastos médicos como consecuencia de lesiones corporales que sufra el Asegurado, o cualquier persona ocupante del auto, a consecuencia de un accidente de tránsito cubierto por la póliza.
                                                            <br>
                                                            <br>
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Colisión o vuelco:</b>
                                                            Cubre los daños físicos causados a su auto como consecuencia de un accidente de tránsito cubierto por la póliza.
                                                            <br>
                                                            <br>
                                                            <span class="glyphicon glyphicon-asterisk"></span>
                                                            <b>Comprensivo:</b>
                                                            Esta cobertura ampara su auto contra riesgos como Robo parcial o total de su vehículo, Inundación e Incendio del mismo.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="tab-6" class="tab-pane active">
                                    <div class="">
                                        <strong></strong>
                                        <div>
                                            <p  align="justify"style="font-size:18px; color:#000; font-family:Arial, Helvetica, sans-serif;">

                                                <b>1. ¿Por qué contratar un Seguro de Vida?</b>
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                El seguro de vida es la mejor herencia que usted le puede dejar a sus seres queridos, es un legado de Amor.
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                Al contratar un seguro de vida usted le deja a los suyos la tranquilidad financiera necesaria para hacerle frente a sus obligaciones comerciales, personales y educacionales, reduciendo el impacto económico que se produce al momento de su muerte.
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                Al momento de solicitar un seguro de vida el Asegurado tiene la posibilidad de incluir dentro de las coberturas principales contratos complementarios como los son la incapacidad total y permanente para trabajar y la cobertura de enfermedades graves, en las cuales la compañía de seguros le indemnizará en vida directamente al asegurado luego de comprobarse dichas condiciones.
                                                <br>
                                                <br>
                                                <b>2. Ventajas de una póliza de Vida Individual vs la póliza del colectivo bancario:</b>
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                La póliza individual es tuya y puedes administrarla de la forma que desees.
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                La póliza del banco solo cubre el saldo de la deuda, pero la prima que te cobran es siempre la misma. La póliza individual mantiene la suma asegurada inicial y en caso de fallecimiento pagará el saldo adeudado al banco y la diferencia a tus beneficiarios.
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                En caso de querer cambiar de banco puedes utilizar tu póliza de vida individual sin tener que pasar por pruebas médicas, tienes tu asegurabilidad garantizada.
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                Si estuvieras en la póliza de vida del Banco y llegarás a tener un problema de salud grave, es muy seguro que no fueras sujeto elegible para otra póliza de vida, por lo que no podrías cambiarte de este banco por el resto de tu vida, perdiendo las oportunidades que ofrecen los otros bancos del mercado. Si tienes una póliza de Vida individual, tú eres el dueño de tu destino.
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                Por lo general, la prima de una póliza de vida individual es menor a la póliza que te cobran en la entidad bancaria, con mejores beneficios y es de tu propiedad.
                                                <br>
                                                <br>
                                                <img src="img/gancho.png">
                                                La ley No. 12 que regula la actividad de seguros en Panamá te da derecho de adquirir las pólizas que necesitas en la compañía de seguros de tu elección y obliga a la entidad bancaria a recibirlas sin penalidad alguna.

                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div id="tab-7" class="tab-pane">
                                    <div class="">
                                        <strong></strong>
                                        <p>
                                            <b style="color:#FFA500;font-size:18px;">¿Qué hacer en caso de siniestro?</b>
                                            <br>
                                            <br>
                                            <b style="color:#FFA500;">AUTOMÓVIL</b>
                                            <br>
                                            <br>
                                            <img src="img/quehacer-automovil.jpg">
                                            <br>
                                            <font size="4">En caso de que usted se vea involucrado en un accidente de tránsito le recomendamos los siguientes pasos a seguir.</font>
                                            <br>
                                            <br>
                                        <div class="accordion" id="accordion2">
                                            <div class="accordion-group">
                                                <div class="accordion-heading">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                                        Mas Información aqui...
                                                    </a>
                                                </div>
                                                <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
                                                    <div class="accordion-inner">
                                                        <div style="color:black;">
                                                            <div style="color:black;">
                                                                <p>
                                                                    <b style="color:#FFA500;">Que debe hacer en caso de un accidente de tránsito menor</b>
                                                                    <br>
                                                                    <br>
                                                                    Se considera accidente de tránsito menor, toda colisión donde los vehículos involucrados en la misma puedan ser desplazados de la vía por sus propios conductores, sin ningún tipo de auxilio mecánico (reparaciones, uso de grúas, etc.), y que los ocupantes o terceros involucrados en el hecho no resulten con algún tipo de lesión.
                                                                    <br>
                                                                    <br>
                                                                    1. Lo primero que usted debe hacer en caso de accidente es llamar al número de asistencia de su compañía de seguros, informar del accidente y seguir las indicaciones que le brindará su personal. El personal de la compañía de seguros le solicitará el número de póliza, por lo que le recomendamos tener copia de la misma dentro de su automóvil. A continuación los números de teléfono para asistencia en caso de accidente de las diferentes compañías de seguros:
                                                                    <br>
                                                                </p>
                                                                <table cellspacing="1" cellpadding="2" border="0" width="460" align="center">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td bgcolor="#E5E5E5" width="195">
                                                                        <td bgcolor="#E5E5E5" width="116" align="center">
                                                                        <td bgcolor="#E5E5E5" width="121" align="center">
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#F8F8F8">Internacional de Seguros</td>
                                                                        <td bgcolor="#F8F8F8" align="center">800-4400</td>
                                                                        <td bgcolor="#F8F8F8" align="center">265-2881</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#F8F8F8">Assa Compañía de Seguros</td>
                                                                        <td bgcolor="#F8F8F8" align="center">300-2424</td>
                                                                        <td bgcolor="#F8F8F8" align="center"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#EFEFEF">Banistmo Seguros</td>
                                                                        <td bgcolor="#EFEFEF" align="center">300-2445</td>
                                                                        <td bgcolor="#EFEFEF" align="center">265-8255</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#EFEFEF">Assicurazioni Generali</td>
                                                                        <td bgcolor="#EFEFEF" align="center">800-4357</td>
                                                                        <td bgcolor="#EFEFEF" align="center"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#EFEFEF">Seguros SURA</td>
                                                                        <td bgcolor="#EFEFEF" align="center">800-8888</td>
                                                                        <td bgcolor="#EFEFEF" align="center"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#F8F8F8">Banesco Seguros</td>
                                                                        <td bgcolor="#F8F8F8" align="center">366-8585</td>
                                                                        <td bgcolor="#F8F8F8" align="center"> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td bgcolor="#F8F8F8">Acerta Compañía de Seguros</td>
                                                                        <td bgcolor="#F8F8F8" align="center">307-3030</td>
                                                                        <td bgcolor="#F8F8F8" align="center"> </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <br>
                                                                <br>
                                                                2. Los conductores involucrados en el accidente de tránsito menor, de ser posible, sustentarán los hechos mediante la captación de vistas fotográficas, videos o, a través de cualquier herramienta tecnológica que facilite la descripción del accidente. Si no tiene cámara haga un diagrama o dibujo de la posición final de los mismos.
                                                                <br>
                                                                <br>
                                                                3. Los conductores involucrados en un accidente de tránsito menor deberán mover los vehículos de la vía, aún en caso de que uno de los conductores no esté de acuerdo en cómo se dieron los hechos o no se acepte responsabilidad. Aquellos que incumplan con dicha obligación, serán sancionados por obstrucción del tránsito con cincuenta balboas (B/.50.00).
                                                                <br>
                                                                <br>
                                                                4. Cada conductor debe llenar su propio
                                                                <a target="_blank" href="pdf/fud.pdf" style="color:#0066cc;">Formato Único y Definitivo (FUD)</a>
                                                                , conservar el original e intercambiar copia del formulario con la contraparte.
                                                                <br>
                                                                <br>
                                                                El Formulario Único y Definitivo es un documento que deben completar los conductores de los vehículos involucrados en un accidente menor, en donde se detallan todas las generalidades del vehículo y del conductor, al igual que se describe lo ocurrido en el accidente, y le brinda la posibilidad, a cualquiera de los conductores, a que acepte voluntariamente su responsabilidad por la colisión ocurrida.
                                                                <br>
                                                                <br>
                                                                Los datos y manifestaciones plasmadas por los conductores o propietarios en el Formato Único y Definitivo (FUD) se considerarán declaración jurada de los hechos acontecidos.
                                                                <br>
                                                                <br>
                                                                Usted debe leer todo el formulario que le estén entregando antes de firmarlo y verificar que la información que allí se detalla esté correcta y que no queden espacios en blanco. Entre más información exista, más fácil será para la compañía de seguros atender el reclamo. No se proclame responsable del accidente al menos que usted esté completamente convencido de su responsabilidad.
                                                                <br>
                                                                <br>
                                                                5. Si los conductores involucrados en un accidente de tránsito menor no lograsen llegar a un acuerdo en cuanto a la responsabilidad del hecho, entonces se requerirá la presencia de un Inspector de Tránsito para el levantamiento del parte policivo. Para ello debe llamar a la línea del tránsito 311 y a su vez llenar el FUD (el mismo será utilizado por la ATTT para levantar el parte policivo). Igualmente si alguno de los conductores involucrados no presenta póliza de seguros de auto vigente se debe llamar al 311.
                                                                <br>
                                                                <br>
                                                                6. En caso de no ser atendido por su compañía de seguros en la escena del accidente, favor acudir a sus oficinas de inmediato, o al siguiente día hábil, para presentar el reclamo y entregar el FUD. Igualmente debe notificar a JIMFOR, S.A. dentro de las 24 horas siguientes al accidente para poder brindarle el asesoramiento debido y seguimiento a su reclamo.
                                                                <br>
                                                                <br>
                                                                <b>NO DEBE MOVER EL AUTO EN LOS SIGUIENTES CASOS</b>
                                                                <br>
                                                                <br>
                                                                1. Cuando la colisión se dé contra un objeto fijo.
                                                                <br>
                                                                2. Cuando existan lesionados o heridos en cualquiera de los vehículos involucrados.
                                                                <br>
                                                                3. Si cualquiera de los vehículos involucrados en el accidente no puede moverse por sus propios medios.
                                                                <br>
                                                                4. Cuando a su criterio, alguno de los conductores de los vehículos involucrados en la colisión se encuentre bajo la influencia de alcohol o drogas.
                                                                <br>
                                                                <br>
                                                                Cuando se dé uno de estos cuatro casos se debe esperar al inspector del tránsito antes de mover los autos. Siempre llame a la asistencia de la compañía de seguros para que un ajustador se presente al lugar del accidente y pueda levantar el informe de reclamos correspondiente.
                                                                <br>
                                                                <br>
                                                                DOCUMENTOS QUE DEBE MANTENER EN EL AUTO
                                                                <br>
                                                                <br>
                                                                Todo propietario de vehículos a motor deberá mantener dentro de su vehículo los siguientes documentos:
                                                                <br>
                                                                <br>
                                                                o Copia del Registro Único de Propiedad Vehicular
                                                                <br>
                                                                o Copia vigente de la póliza del auto
                                                                <br>
                                                                o Reglamento del Tránsito
                                                                <br>
                                                                o Formulario Único y Definitivo (FUD) - Preferiblemente dos copias adicionales.
                                                                <br>
                                                                <br>
                                                                Los propietarios o conductores de vehículos a motor que al momento de la ocurrencia de un accidente de tránsito no posean el seguro de Responsabilidad Civil vigente serán sancionados con multa de cien balboas (B/.100.00) a imponer por los jueces de tránsito.
                                                                <br>
                                                                <br>
                                                                Nota: Este documento solo representa una interpretación que JIMFOR, S.A. le da al Decreto Ejecutivo No. 958 (10 de Diciembre de 2010), tomando como base el decreto y las reuniones y seminarios asistidos por nuestro personal, por lo que el mismo no crea responsabilidad alguna para JIMFOR, S.A. por las acciones u omisiones en las que haya incurrido el Asegurado por su observancia.
                                                                <br>
                                                                <br>
                                                                <p></p>
                                                            </div>
                                                            </td>

                                                            </td>
                                                            </tr>
                                                            </tbody>
                                                            </table>




                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

















                                        <br>
                                        <br>
                                        <b style="color:#FFA500;">INCENDIO</b>
                                        <br>
                                        <br>
                                        <img src="img/quehacer-incendio.jpg">
                                        <br>
                                        <font size="4">Al tener conocimiento de un siniestro que pueda causar daños o pérdidas de los bienes asegurados en la póliza, el Asegurado tendrá la obligación de hacer todo lo que sea posible tendiente a evitar o disminuir el daño.</font>
                                        <br>
                                        <br>


                                        <div class="accordion" id="accordion3">
                                            <div class="accordion-group">
                                                <div class="accordion-heading">
                                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#informacion2">
                                                        Mas Información aqui...
                                                    </a>
                                                </div>
                                                <div id="informacion2" class="accordion-body collapse" style="height: 0px; ">
                                                    <div class="accordion-inner">
                                                        <div style="color:black;">

                                                            <p>
                                                                <b style="color:#FFA500;">
                                                                    <font size="4">Qué debe hacer en caso de un siniestro de Incendio</font>
                                                                </b>
                                                                <br>
                                                                <br>
                                                                <font size="4">Al tener conocimiento de un siniestro que pueda causar daños o pérdidas de los bienes asegurados en la póliza, el Asegurado tendrá la obligación de hacer todo lo que sea posible tendiente a evitar o disminuir el daño, y de notificarlo inmediatamente a JIMFOR, S.A. y a su Compañía de Seguros. Dentro de los treinta (30) días calendarios subsiguientes a la fecha del siniestro, el Asegurado deberá presentar a la Compañía de Seguros los siguientes documentos:</font>
                                                                <br>
                                                                <br>
                                                                <font size="4">
                                                                    1. Un informe sobre el siniestro, indicando el lugar, fecha y hora aproximada en que ocurrió, la causa probable del siniestro y las circunstancias en las que se produjo.
                                                                    <br>
                                                                    <br>
                                                                    2. Una relación detallada de cualesquiera otros seguros que amparen cualquier parte de los bienes asegurados.
                                                                    <br>
                                                                    <br>
                                                                    3. Un inventario detallado y exacto de los bienes destruidos y el importe de la pérdida en cada caso, sin incluir ganancia alguna.
                                                                    <br>
                                                                    <br>
                                                                    4. El interés del Asegurado y de cualquier otro sobre los bienes afectados.
                                                                    <br>
                                                                    <br>
                                                                </font>
                                                                <br>
                                                                <br>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                                <div id="tab-8" class="tab-pane">
                                    <div class="">
                                        <strong><a href="formularios.php" style="color:#428bca;">Formularios de Reclamos de Auto y Conozca su Cliente</a></strong>
                                        <b style="color:#FFA500;">Formularios de Reclamos de Auto:</b>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Informe de accidente de ACERTA:
                                        <a target="_blank" href="pdf/accidenteacerta.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Informe de accidente de ASSA:
                                        <a target="_blank" href="pdf/accidenteassa.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Informe de accidente de Banesco:
                                        <a target="_blank" href="pdf/accidentebanesco.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Informe de accidente de Generali:
                                        <a target="_blank" href="pdf/accidentegenerali.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Informe de accidente de Banistmo:
                                        <a target="_blank" href="pdf/accidentehsbc.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Informe de accidente de IS:
                                        <a target="_blank" href="pdf/accidenteis.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Informe de accidente de SURA:
                                        <a target="_blank" href="pdf/accidentesura.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <b style="color:#FFA500;">Conozca su Cliente:</b>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Formulario de Conozca su Cliente:
                                        <a target="_blank" href="pdf/conocetucliente.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <b style="color:#FFA500;">FUD y Decreto 958:</b>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Formulario único y definitivo (FUD):
                                        <a target="_blank" href="pdf/fud.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                        <img src="img/gancho.png">
                                        Decreto ejecutivo de ley 958:
                                        <a target="_blank" href="pdf/decreto958.pdf" style="color:#0066cc;">Descargar</a>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <div id="tab-9" class="tab-pane">
                                    <div class="">

                                        <p>
                                            <b>Asociaciones a las que pertenecemos:</b>
                                            <br>
                                            <br>
                                            <b>JIMFOR, S.A.</b>
                                            propietaria de
                                            <b>www.seguroteconviene.com</b>
                                            pertenece y participa activamente en las siguientes asociaciones:
                                            <br>
                                            <br>
                                            <img src="img/conalprose.jpg">
                                            Colegio Nacional de Productores de Seguros
                                            <br>
                                            <br>
                                            <img src="img/unitas.jpg">
                                            Cámara Panameña de Empresas de Corretaje de Seguros (CAPECOSE)
                                            <br>
                                            <br>
                                            <img src="img/camara.jpg">
                                            Cámara de Comercio Industrias y agricultura de Panamá
                                        </p>

                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>







                </div>
            </div>

            <!-- fin cuepo !-->
            <!-- divider -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>
            <!-- end divider -->
            <!-- divider -->
            <div class="row">
                <div class="col-lg-12">
                    <div id="marquePic" class=" marque-box">
                        <table cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                            <tr>
                                <td data-marqueebox="1">
                                    <div class="marque-main">
                                        <ul>
                                            <li><a href="#" target="_blank"><img src="img/logos/sura.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/acerta.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/iseguros.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/assa.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/generali.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/banesco.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/Logo_NASE.JPG"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/palig.png"></a></li>

                                        </ul>
                                    </div>
                                </td>
                                <td data-marqueebox="2">
                                    <div class="marque-main">
                                        <ul>
                                            <li><a href="#" target="_blank"><img src="img/logos/sura.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/acerta.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/iseguros.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/assa.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/generali.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/banesco.png"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/Logo_NASE.JPG"></a></li>
                                            <li><a href="#" target="_blank"><img src="img/logos/palig.png"></a></li>

                                        </ul>
                                    </div>

                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end divider -->









        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h5 class="widgetheading">Comuniquese con Nosotros</h5>
                        <address>
                            <strong>	PARA MAYOR INFORMACIÓN CONTACTENOS</strong><br>
                        </address>
                        <p>
                            <i class="icon-phone"></i>AL 227 7777 O ESCRIBANOS  <br>
                            <i class="icon-envelope-alt"></i> A INFO@SEGUROTECONVIENE.COM
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h5 class="widgetheading">Páginas</h5>
                        <ul class="link-list">
                            <li><a href="#">INICIO</a></li>
                            <li><a href="#">QUIENES SOMOS</a></li>
                            <li><a href="#">PREGUNTAS FRECUENTES</a></li>
                            <li><a href="#">PÓLIZA</a></li>
                            <li><a href="#">COTIZADOR</a></li>
                            <li><a href="#">CONTÁCTENOS</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h5 class="widgetheading"></h5>
                        <ul class="link-list">
                            <li><a href="#">EL USO DE ESTE SITIO CONSTITUYE UN ACUERDO A TODOS LOS TÉRMINOS Y CONDICIONES DEL MISMO, LE RECOMENDAMOS LEERLO ANTES DE UTILIZARLO.
                                    SEGUROTECONVIENE.COM ES UNA MARCA REGISTRADA EN LA REPÚBLICA DE PANAMA Y FORMA PARTE DE LA EMPRESA DE CORRETAJE JIMFOR, S.A.
                                </a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>
                                <span>&copy; SeguroTeConviene.com </span><a href="http://www.seguroteconviene.com" target="_blank">SeguroTeConviene.com</a>
                            </p>
                            <!--
                                All links in the footer should remain intact.
                                Licenseing information is available at: http://bootstraptaste.com/license/
                                You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Moderna
                            -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="https://www.facebook.com/SeguroTeConviene?fref=ts" target="_blank" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/segurotconviene" target="_blank" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div id="ModalVideo" class="modal fade" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                <h4 class="modal-title">Seguro Te Conviene</h4>
            </div>
            <div class="modal-body">
                <div id="player" class="full-frame " style="width: 100%; height: 500px; overflow: hidden;">
                    <embed id="player1" width="100%" height="100%" flashvars="allow_embed=1&enablejsapi=1&length_seconds=263&advideo=1&eurl=http%3A%2F%2Fwww.help.cms-tool.net%2Fwebapps%2Fi%2F64314%2F71303%2F379062&hl=es_ES&title=100%25%20Pure%20New%20Zealand&iurl=http%3A%2F%2Fi1.ytimg.com%2Fvi%2Feh-0knDpn5g%2Fhqdefault.jpg&allow_ratings=1&avg_rating=4.88370118846&idpj=-1&sw=1.0&fexp=900161%2C902408%2C924222%2C930008%2C934024%2C934030%2C941361&ldpj=-26&iurlmq=http%3A%2F%2Fi1.ytimg.com%2Fvi%2Feh-0knDpn5g%2Fmqdefault.jpg&view_count=1521883&watch_xlb=http%3A%2F%2Fs.ytimg.com%2Fyts%2Fxlbbin%2Fwatch-strings-es_ES-vflfV2KsV.xlb&iurlhq=http%3A%2F%2Fi1.ytimg.com%2Fvi%2Feh-0knDpn5g%2Fhqdefault.jpg&cr=US&video_id=eh-0knDpn5g&index=0&rel=1&el=embedded&is_html5_mobile_device=false&loaderUrl=http%3A%2F%2Fwww.help.cms-tool.net%2Fwebapps%2Fi%2F64314%2F71303%2F379062&playerapiid=player1&framer=http%3A%2F%2Fwww.help.cms-tool.net%2Fwebapps%2Fi%2F64314%2F71303%2F379062" bgcolor="#000000" allowfullscreen="true" allowscriptaccess="always" wmode="opaque" src="https://www.youtube.com/v/DODYmcUtVWo" type="application/x-shockwave-flash" tabindex="0" name="player1">
                </div>
            </div>
        </div>



    </div>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
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
<script src="js/jquery-ui.min.js"></script>
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
<script>

    $(function() {

        $( "#accordion" ).accordion({
            heightStyle: "content"
        });






        $( "#button" ).button();
        $( "#radioset" ).buttonset();






    });

</script>

<script>
    $(function() {

        $('.accordion').on('show', function (e) {
            $(e.target).prev('.accordion-heading').addClass('accordion-opened');
        });

        $('.accordion').on('hide', function (e) {
            $(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
        });

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



    });
    $(".accordion-heading").click(function(event){
        $(".SeleccionAcor").removeClass("ui-state-active");
        $(this).addClass("ui-state-active");
    });






</script>

</body>
</html>
