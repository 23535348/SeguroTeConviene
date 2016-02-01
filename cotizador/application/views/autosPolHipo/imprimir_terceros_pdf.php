<?php
header('Content-disposition: attachment; filename='.$_GET["id"].'.pdf');
header('Content-type: application/pdf');
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
$pdf->Cell(189,5,utf8_decode('De acuerdo a su solicitud, a continuación le presentamos su propuesta.'),0,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,8,utf8_decode('Propuesto asegurado: '.$_GET['nombre_completo']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Teléfono: '.$_GET['telefono']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Celular: '.$_GET['celular']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Correo Electrónico: '.$_GET['email']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Cédula: '.$_GET['cedula']),1,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,5,utf8_decode('Compañía de seguros: '.$_GET['company']),1,1,'L');
$pdf->Ln(3);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(59,5,utf8_decode("Cotización No.: ".$_GET["id"].""),1,0,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(65,5,utf8_decode('Ramo: Plan Hipotecario'),1,0,'C');
$pdf->Cell(65,5,utf8_decode("Fecha: ".$_GET['fecha_solicitud'].""),1,1,'C');
$pdf->Ln(3);
$pdf->SetFillColor(0,102,204);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(40,5,("POLIZA DE VIDA"),1,1,'C',true);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Generales del Asegurado'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(63,8,utf8_decode('Fecha de nacimiento'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Fumador'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Genero'),1,1,'C');
$pdf->Cell(63,8,utf8_decode($_GET['fecha_nac']),1,0,'C');
$pdf->Cell(63,8,utf8_decode($mensaje_fumador),1,0,'C');
$pdf->Cell(63,8,utf8_decode($mensaje_sexo),1,1,'C');
$pdf->Ln(3);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Coberturas, Límites y Término máximo de cobertura'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(63,8,utf8_decode('Cobertura principal:'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Suma asegurada'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Término máximo de cobertura'),1,1,'C');
$pdf->Cell(63,8,utf8_decode('Muerte por cualquier causa'),1,0,'C');
$pdf->Cell(63,8,utf8_decode("B/. ".number_format($_GET['suma_asegurada_vida'], "2", ".", ",").""),1,0,'C');
$pdf->Cell(63,8,utf8_decode($_GET['termino']),1,1,'C');
$pdf->Cell(189,8,utf8_decode('Otras coberturas: No aplica'),1,1,'C');
$pdf->Ln(3);
$pdf->SetFillColor(0,102,204);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(40,5,("POLIZA DE INCENDIO"),1,1,'C',true);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Generales del Bien Asegurado'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(63,8,utf8_decode('Tipo de Bien'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Tipo de Construcción'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Sector'),1,1,'C');
$pdf->Cell(63,8,utf8_decode($mensaje_bien),1,0,'C');
$pdf->Cell(63,8,utf8_decode($_GET['tipo_construccion']),1,0,'C');
$pdf->Cell(63,8,utf8_decode($mensaje_sector),1,1,'C');
$pdf->Ln(3);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Tipo de Plan, Suma Asegurada, Prima Anual'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(63,8,utf8_decode('Plan:'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Suma asegurada'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Prima Anual'),1,1,'C');
$pdf->Cell(63,8,utf8_decode("Hipotecario"),1,0,'C');
$pdf->Cell(63,8,utf8_decode("B/. ".number_format($_GET['suma_asegurada_incendio'], "2", ".", ",").""),1,0,'C');
$pdf->Cell(63,8,utf8_decode("B/. ".number_format($_GET['prima_planeada'], "2", ".", ",").""),1,1,'C');
$pdf->Ln(3);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(0,5,utf8_decode('Coberturas'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(63,5,utf8_decode('- Incendio y/o impacto de rayo'),0,0,'L');
$pdf->Cell(63,5,utf8_decode('- Remoción de escombros'),0,0,'L');
$pdf->Cell(63,5,utf8_decode(''),0,1,'L');
$pdf->Cell(63,5,utf8_decode('- Humo u hollín'),0,0,'L');
$pdf->Cell(63,5,utf8_decode('- Terremoto y vendaval'),0,0,'L');
$pdf->Cell(63,5,utf8_decode(''),0,1,'L');
$pdf->Cell(63,5,utf8_decode('- Explosión'),0,0,'L');
$pdf->Cell(63,5,utf8_decode('- Inundación y daños por agua'),0,0,'L');
$pdf->Cell(63,5,utf8_decode(''),0,1,'L');
$pdf->Cell(63,5,utf8_decode('- Impacto de vehículos aéreos'),0,0,'L');
$pdf->Cell(63,5,utf8_decode(''),0,0,'L');
$pdf->Cell(63,5,utf8_decode(''),0,1,'L');
$pdf->Cell(63,5,utf8_decode('- Objetos caídos del cielo'),0,0,'L');
$pdf->Cell(63,5,utf8_decode(''),0,0,'L');
$pdf->Cell(63,5,utf8_decode(''),0,1,'L');
$pdf->Ln(5);
$pdf->SetFillColor(255,0,0);
$pdf->Cell(189,5,("PROPUESTA VALIDA POR 7 DIAS"),1,1,'C',true);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(189,5,utf8_decode('Para la pronta emisión de su póliza necesitamos nos presente los siguiente documentos:'),0,1,'C');
$pdf->Cell(189,5,utf8_decode('1. Formulario Conozca su cliente'),1,1,'L');
$pdf->Cell(189,5,utf8_decode('2. Fotocopia de Cédula del Asegurado y Contratante'),1,1,'L');
$pdf->Cell(189,5,utf8_decode('3. Solicitud de Póliza (Será entregada a usted por un ejecutivo nuestro)'),1,1,'L');
$pdf->Cell(189,5,utf8_decode('4. Formulario de descuento (Será entregada a usted por un ejecutivo nuestro)'),1,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,5,utf8_decode('Llámenos al: 227-7777'),0,1,'L');
$pdf->Cell(189,5,utf8_decode('Escríbanos a: info@seguroteconviene.com'),0,1,'L');
$pdf->Output('solicitudes/'.$_GET["id"].'.pdf', 'D');
$doc = $pdf->Output('solicitudes/'.$_GET["id"].'.pdf', 'S');

readfile('solicitudes/'.$_GET["id"].'.pdf');

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
/*$mail->AddReplyTo($AddReplyTo,"Seguro Te Conviene");
$mail->SetFrom($SetFrom,"Seguro Te Conviene");
$address = $_GET['email'];
$mail->AddAddress($address);
$mail->SMTPDebug = true;
$mail->Subject    = "Solicitud creada";
$mail->MsgHTML($body);
$mail->AddStringAttachment($doc, 'solicitudes/'.$_GET["id"].'.pdf', 'base64', 'application/pdf');
//$mail->AddAttachment("$doc");
//$mail->AddAttachment("solicitudes/".$_GET["id"]."","solicitudes/".$_GET["id"].".pdf"); // attachment
$mail->Send();*/


?>