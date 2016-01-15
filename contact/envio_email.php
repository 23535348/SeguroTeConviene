<?php
require("class.phpmailer.php"); //Importamos la función PHP class.phpmailer

$mail = new PHPMailer();


$nombre=$_POST['nombre'];
$Email=$_POST['email'];
$telefono=$_POST['telefono'];
$contenido=$_POST['mensaje'];

//Luego tenemos que iniciar la validación por SMTP:
    $mail->IsSMTP();
    $mail->SMTPAuth = true; // True para que verifique autentificación de la cuenta o de lo contrario False
    $mail->Username = "deivisjose.d@gmail.com"; // Cuenta de e-mail
    $mail->Password = "victorveliz"; // Password


    $mail->Host = "smtp.gmail.com";
    $mail->Port = 995;// por defecto es 25 este es de gmail 465;
    $mail->From = "deivisjose.d@gmail.com";
    $mail->FromName = "Nombre a mostrar del Remitente";
    $mail->Subject = "Asunto";
    $mail->AddAddress($Email, $nombre);

//$mail->WordWrap = 50;

    $body = "Content-type: text/html;charset=utf-8\r\n\r\n";
    $body .= " 	<center>
        	<table style=' height:100% !important; margin:0; padding:0; width:100% !important;' id='backgroundTable' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%'>
            	<tbody><tr>
                	<td style='padding-top:20px;' align='center' valign='top'>
                    	<table style=' border: 1px solid #DDDDDD;' border='0' cellpadding='0' cellspacing='0' width='600'>
                        	<tbody><tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Header \\ -->
                                	<table style=' background-color:#FFFFFF;
				 border-bottom:0;' border='0' cellpadding='0' cellspacing='0' width='600'>
                                        <tbody><tr>
                                            <td style=' color:#202020;
font-family:Arial; font-size:34px; font-weight:bold; line-height:100%;
padding:0;text-align:center;vertical-align:middle;'>
                                            <br>
                                            	<!-- // Begin Module: Standard Header Image \\ -->
                                            	<a style=' padding:0;' href='http://www.seguroteconviene.com'>
                    <img alt='Tienda En Linea' src='http://162.209.57.159/desarrollos/AppJimfor/img/logo.png' height='30%' width='80%'>
                </a>
                                            	<!-- // End Module: Standard Header Image \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Body \\ -->
                                	<table id='templateBody' border='0' cellpadding='0' cellspacing='0' width='600'>
                                    	<tbody><tr>
                                            <td valign='top'>

                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border='0' cellpadding='20' cellspacing='0' width='100%'>
                                                    <tbody><tr>
                                                        <td style=' background-color:#FFFFFF;
color:#505050; font-family:Arial; font-size:14px; line-height:150%; text-align:left;
' valign='top'>

                   <h1 style=' color:#202020;display:block;font-family:Arial;font-size:26px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' class='h3'>Te Damos la Bienvenida a SportLine</h1>
                   <h2  style=' color:#202020;display:block;font-family:Arial;font-size:22px;font-weight:bold;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;' class='h4'>Sr.(a):$datos_f</h2>
   <strong>Usted Nos Ha Dejado Los siguientes Datos:</strong> <br>


   $nombre
   <br>
  $telefono
  <br>
  Información:
  $contenido
  <br>


 Gracias por visitar nuestro sitio
                             <br>
                                                                <br>

														</td>
                                                    </tr>
                                                    <tr>
                                                    	<td style='padding-top:0;' align='center' valign='top'>
            <table style=' -moz-border-radius:3px;-webkit-border-radius:3px;background-color:#336699;border:0;border-collapse:separate !important;border-radius:3px;color:#FFFFFF;font-family:Arial;font-size:15px; font-weight:bold;letter-spacing:-.5px;line-height:100%;text-align:center;text-decoration:none;' class='templateButton' border='0' cellpadding='15' cellspacing='0'>
                                                            	<tbody><tr>
                                                                	<td class='templateButtonContent' valign='middle'  >
                                                                    	<div mc:edit='std_content01'>
                                                                        	<a style=' padding:0; color: #ffffff;
    font-family: Arial;
    font-size: 15px;
    font-weight: bold;
    letter-spacing: -0.5px;
    line-height: 100%;
    text-align: center;
    text-decoration: none;' href='http://www.seguroteconviene.com' target='_blank'>Ingrese Ahora</a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <!-- // End Module: Standard Content \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align='center' valign='top'>
                                    <!-- // Begin Template Footer \\ -->
            <table style=' background-color:#FFFFFF; border-top:0;' id='templateFooter' border='0' cellpadding='10' cellspacing='0' width='600'>
                                    	<tbody><tr>
                                        	<td class='footerContent' style=' color: #707070;
    font-family: Arial;
    font-size: 12px;
    line-height: 125%;
    text-align: center;' valign='top'>

                                                <!-- // Begin Module: Transactional Footer \\ -->
                                                <table border='0' cellpadding='10' cellspacing='0' width='100%'>
                                                    <tbody><tr>
                                                        <td valign='top'>
                                                            <div mc:edit='std_footer'>
					<em>				Esta es una cuenta de correo no monitoreada. Por favor, no responda o reenvie mensajes a esta dirección.
Para mayor información comuníquese con nosotros a través de la siguiente cuenta de correo: 	</em><br>
<strong>prueba.@mail.com</strong><br>						<em>Copyright © *|$anio| SeguroTeConviene, Todos Los Derechos Reservados.</em>
																<br>

																<br>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td  style=' background-color:#FFFFFF;border:0;' id='utility' valign='middle'>
                                                            <div mc:edit='std_utility'>
                                                                &nbsp;<a href='http://www.seguroteconviene.com' target='_blank'>Visite Nuestra Pagina</a> | <a href='http://www.sportline.com.pa/reclutamiento/'>Actualiza tus Datos</a>&nbsp;
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                <!-- // End Module: Transactional Footer \\ -->

                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </tbody></table>
                        <br>
                    </td>
                </tr>
            </tbody></table>
        </center>";

    $body .= "<font color='red'> mensaje de prueba</font>";

    $mail->Body = $body;

    $mail->Send();


// Notificamos al usuario del estado del mensaje

    if (!$mail->Send()) {
        echo "No se pudo enviar el Mensaje.";
    } else {
        echo "Mensaje enviado";
    }

?>