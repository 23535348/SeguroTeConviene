<?php
//header('Content-disposition: attachment; filename='.$solicitud.'.pdf');
//header('Content-type: application/pdf');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$url=base_url();
$INC_DIR = $url."img/";
$pdf->Image($INC_DIR.'logo.png',10,6,40);
//$pdf->Image('img/logo.png',10,6,40);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(80);
$pdf->Cell(30,8,"Gracias por preferirnos",0,0,'C');
$pdf->SetY(35);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189,8,utf8_decode('De acuerdo a su solicitud, a continuación le presentamos su propuesta.'),0,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,8,utf8_decode('Propuesto asegurado: '.$nombre),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Teléfono: '.$telefono),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Celular: '.$celular),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Correo Electrónico: '.$email),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Cédula: '.$cedula),1,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,8,utf8_decode("Compañía de seguros: ".$company.""),1,1,'L');
$pdf->Ln(5);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(59,5,utf8_decode("Cotización No.: ".$solicitud.""),1,0,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(65,5,utf8_decode('Ramo: AUTO'),1,0,'C');
$pdf->Cell(65,5,utf8_decode("Fecha: ".$fecha_solicitud.""),1,1,'C');
$pdf->Ln(5);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Descripción del Bien Cotizado'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(37,5,utf8_decode('Año del Vehículo'),1,0,'C');
$pdf->Cell(37,5,utf8_decode('Marca'),1,0,'C');
$pdf->Cell(37,5,utf8_decode('Modelo'),1,0,'C');
$pdf->Cell(37,5,utf8_decode('Uso'),1,0,'C');
$pdf->Cell(41,5,utf8_decode('Valor acordado'),1,1,'C');
$pdf->Cell(37,5,utf8_decode($anio_auto),1,0,'C');
$pdf->Cell(37,5,utf8_decode($marca),1,0,'C');
$pdf->Cell(37,5,utf8_decode($modelo),1,0,'C');
$pdf->Cell(37,5,utf8_decode("Particular"),1,0,'C');
$pdf->Cell(41,5,utf8_decode("B/. ".number_format($precio_venta, "2", ".", ",").""),1,1,'C');
$pdf->Ln(5);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Coberturas y Límites'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(60,5,utf8_decode('Coberturas:'),1,0,'C');
$pdf->Cell(99,5,utf8_decode('Límites de responsabilidad'),1,0,'C');
$pdf->Cell(30,5,utf8_decode('Deducibles'),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Lesiones corporales'),1,0,'L');
$pdf->Cell(99,5,utf8_decode($mensaje_lc),1,0,'L');
$pdf->Cell(30,5,utf8_decode('No aplica.'),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Daños a propiedad ajena'),1,0,'L');
$pdf->Cell(99,5,utf8_decode($mensaje_dpa),1,0,'L');
$pdf->Cell(30,5,utf8_decode('No aplica.'),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Gastos Médicos'),1,0,'L');
$pdf->Cell(99,5,utf8_decode($mensaje_gm),1,0,'L');
$pdf->Cell(30,5,utf8_decode('No aplica.'),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Comprensivo'),1,0,'L');
$pdf->Cell(99,5,utf8_decode("Valor acordado: B/. ".number_format($precio_venta, "2", ".", ",").""),1,0,'L');
$pdf->Cell(30,5,utf8_decode("B/. ".number_format($dcomprensivo, "2", ".", ",").""),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Colisión'),1,0,'L');
$pdf->Cell(99,5,utf8_decode("Valor acordado: B/. ".number_format($precio_venta, "2", ".", ",").""),1,0,'L');
$pdf->Cell(30,5,utf8_decode("B/. ".number_format($dcolision, "2", ".", ",").""),1,1,'C');

$pdf->Ln(5);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Formas de pago'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(55,5,utf8_decode('Pago Voluntario'),1,0,'C');
$pdf->Cell(99,5,utf8_decode('Hasta 10 pagos mensuales iguales'),1,0,'C');
$pdf->Cell(35,5,utf8_decode("B/. ".number_format($pago_voluntario, "2", ".", ",").""),1,1,'C');
$pdf->Cell(55,5,utf8_decode('Pago al contado'),1,0,'C');
$pdf->Cell(99,5,utf8_decode('Un solo pago (al momento de recibir la póliza)'),1,0,'C');
$pdf->Cell(35,5,utf8_decode("B/. ".number_format($pago_UNPAGO, "2", ".", ",").""),1,1,'C');
$pdf->Cell(55,5,utf8_decode('Pago con Tarjeta o ACH'),1,0,'C');
$pdf->Cell(99,5,utf8_decode('Hasta 10 pagos iguales mensuales'),1,0,'C');
$pdf->Cell(35,5,utf8_decode("B/. ".number_format($pago_ACH, "2", ".", ",").""),1,1,'C');
$pdf->Ln(5);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(40,5,utf8_decode('Beneficios incluidos'),1,1,'L');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',6);

while ($counter_coberturas > 0) {
// $pdf->Cell(63,3,utf8_decode($cobertura_especial[$counter_coberturas-1]),0,1,'L');
$pdf->Cell(63,3,$cobertura_especial[$counter_coberturas-1],0,1,'L');
$counter_coberturas = $counter_coberturas - 1;
}
$pdf->SetFont('Arial','B',10);
$pdf->Ln(3);
$pdf->SetFillColor(255,0,0);
$pdf->Cell(189,5,("ESTA COTIZACION ES VALIDA POR 7 DIAS"),1,1,'C',true);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(189,5,utf8_decode('Esta cotización está sujeta a la inspección del automóvil y'),0,1,'C');
$pdf->Cell(189,5,utf8_decode('verificación de historial de tránsito del contratante o asegurado.'),0,1,'C');
$pdf->Ln(2);
$pdf->Cell(189,5,utf8_decode('Para la pronta emisión de su póliza necesitamos nos presente los siguiente documentos:'),0,1,'C');
$pdf->Cell(189,5,utf8_decode('1. Formulario Conozca su cliente'),1,1,'L');
$pdf->Cell(189,5,utf8_decode('2. Fotocopia de Cédula del Asegurado y Contratante'),1,1,'L');
$pdf->Cell(189,5,utf8_decode('3. Solicitud de Póliza (Será entregada a usted por un ejecutivo nuestro)'),1,1,'L');
$pdf->Cell(189,5,utf8_decode('4. Formulario de descuento (Será entregada a usted por un ejecutivo nuestro)'),1,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,5,utf8_decode('Llámenos al: 227-7777'),0,1,'L');
$pdf->Cell(189,5,utf8_decode('Escríbanos a: info@seguroteconviene.com'),0,1,'L');
//$pdf->Output('solicitudes/'.$solicitud.'.pdf', 'D');
$doc = $pdf->Output('solicitudes/'.$solicitud.'.pdf', 'S');

//readfile('solicitudes/'.$solicitud.'.pdf');

$mail= new Mailer(); // defaults to using php "mail()"
$mail->IsSendmail(); // telling the class to use SendMail transport
$body = "<table><tr><td width='20%' align='left'><img src='http://166.78.253.30/jimforstc/img/logo.png' alt='Seguro te conviene'></td><td width='80%' align='center'><font size='6'>Felicidades!!</font></td></tr></table><br>
Has tomado la decisi&oacute;n correcta, ahora eres parte de las miles de personas que han utilizado www.seguroteconviene.com como su proveedor de seguros.<br><br>
En las pr&oacute;ximas 24 horas laborables uno de nuestros ejecutivos te estar&aacute; llamando al tel&eacute;fono que nos proporcionaste para poder terminar el proceso <br>y entregarte la p&oacute;liza que nos has solicitado.<br><br>
Te estamos muy agradecidos por la oportunidad que nos brindas de servirte, y te damos la m&aacute;s cordial bienvenida a nuestro grupo exclusivo de clientes.<br><br>
De tener alguna pregunta o consulta sobre el servicio que te prestamos no dudes en llamarnos o escribirnos y con gusto te ayudaremos.<br><br><img src='http://166.78.253.30/jimforstc/img/footeremail.jpg' alt='Seguro te conviene Footer'>";


//$body = eregi_replace("[\]",'',$body);
//$mail->AddReplyTo("info@stc.com","Seguro Te Conviene");
//$mail->SetFrom("info@stc.com","Seguro Te Conviene");
$mail->AddReplyTo($AddReplyTo,"Seguro Te Conviene");
$mail->SetFrom($SetFrom,"Seguro Te Conviene");
$address = $email;
$mail->AddAddress($address);
$mail->SMTPDebug = true;
$mail->Subject    = "Solicitud creada";
$mail->MsgHTML($body);
$mail->AddStringAttachment($doc, 'solicitudes/'.$solicitud.'.pdf', 'base64', 'application/pdf');
//$mail->AddAttachment("$doc");
//$mail->AddAttachment("solicitudes/".$_GET["id"]."","solicitudes/".$_GET["id"].".pdf"); // attachment
$mail->Send();


?>