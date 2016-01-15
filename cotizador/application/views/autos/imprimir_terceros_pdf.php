<?php
header('Content-disposition: attachment; filename='.$_GET['id'].'.pdf');
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
$pdf->Cell(189,8,utf8_decode('De acuerdo a su solicitud, a continuación le presentamos su propuesta.'),0,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,8,utf8_decode('Propuesto asegurado: '.$_GET['nombre']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Teléfono: '.$_GET['telefono']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Celular: '.$_GET['celular']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Correo Electrónico: '.$_GET['email']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Cédula: '.$_GET['cedula']),1,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,8,utf8_decode("Compañía de seguros: ".$_GET['company'].""),1,1,'L');
$pdf->Ln(5);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(59,5,utf8_decode("Cotización No.: ".$_GET['id'].""),1,0,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(65,5,utf8_decode('Ramo: AUTO'),1,0,'C');
$pdf->Cell(65,5,utf8_decode("Fecha: ".$_GET['fecha_solicitud'].""),1,1,'C');
$pdf->Ln(5);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Descripción del Bien Cotizado'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(37,5,utf8_decode('Año del Vehículo'),1,0,'C');
$pdf->Cell(37,5,utf8_decode('Marca'),1,0,'C');
$pdf->Cell(37,5,utf8_decode('Modelo'),1,0,'C');
$pdf->Cell(37,5,utf8_decode('Uso'),1,0,'C');
$pdf->Cell(41,5,utf8_decode('Valor acordado'),1,1,'C');
$pdf->Cell(37,5,utf8_decode($_GET['anio_auto']),1,0,'C');
$pdf->Cell(37,5,utf8_decode($_GET['marca']),1,0,'C');
$pdf->Cell(37,5,utf8_decode($_GET['modelo']),1,0,'C');
$pdf->Cell(37,5,utf8_decode("Particular"),1,0,'C');
$pdf->Cell(41,5,utf8_decode("B/. ".number_format($_GET['precio_venta'], "2", ".", ",").""),1,1,'C');
$pdf->Ln(5);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Coberturas y Límites'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(60,5,utf8_decode('Coberturas:'),1,0,'C');
$pdf->Cell(99,5,utf8_decode('Límites de responsabilidad'),1,0,'C');
$pdf->Cell(30,5,utf8_decode('Deducibles'),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Lesiones corporales'),1,0,'L');
$pdf->Cell(99,5,utf8_decode($_GET['mensaje_lc']),1,0,'L');
$pdf->Cell(30,5,utf8_decode('No aplica.'),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Daños a propiedad ajena'),1,0,'L');
$pdf->Cell(99,5,utf8_decode($_GET['mensaje_dpa']),1,0,'L');
$pdf->Cell(30,5,utf8_decode('No aplica.'),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Gastos Médicos'),1,0,'L');
$pdf->Cell(99,5,utf8_decode($_GET['mensaje_gm']),1,0,'L');
$pdf->Cell(30,5,utf8_decode('No aplica.'),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Comprensivo'),1,0,'L');
$pdf->Cell(99,5,utf8_decode("Valor acordado: B/. ".number_format($_GET['precio_venta'], "2", ".", ",").""),1,0,'L');
$pdf->Cell(30,5,utf8_decode("B/. ".number_format($_GET['dcomprensivo'], "2", ".", ",").""),1,1,'C');

$pdf->Cell(60,5,utf8_decode('Colisión'),1,0,'L');
$pdf->Cell(99,5,utf8_decode("Valor acordado: B/. ".number_format($_GET['precio_venta'], "2", ".", ",").""),1,0,'L');
$pdf->Cell(30,5,utf8_decode("B/. ".number_format($_GET['dcolision'], "2", ".", ",").""),1,1,'C');

$pdf->Ln(5);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,5,utf8_decode('Formas de pago'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(55,5,utf8_decode('Pago Voluntario'),1,0,'C');
$pdf->Cell(99,5,utf8_decode('Hasta 10 pagos mensuales iguales'),1,0,'C');
$pdf->Cell(35,5,utf8_decode("B/. ".number_format($_GET['pago_voluntario'], "2", ".", ",").""),1,1,'C');
$pdf->Cell(55,5,utf8_decode('Pago al contado'),1,0,'C');
$pdf->Cell(99,5,utf8_decode('Un solo pago (al momento de recibir la póliza)'),1,0,'C');
$pdf->Cell(35,5,utf8_decode("B/. ".number_format($_GET['pago_UNPAGO'], "2", ".", ",").""),1,1,'C');
$pdf->Cell(55,5,utf8_decode('Pago con Tarjeta o ACH'),1,0,'C');
$pdf->Cell(99,5,utf8_decode('Hasta 10 pagos iguales mensuales'),1,0,'C');
$pdf->Cell(35,5,utf8_decode("B/. ".number_format($_GET['pago_ACH'], "2", ".", ",").""),1,1,'C');
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
$pdf->Output('solicitudes/'.$_GET['id'].'.pdf', 'D');
$doc = $pdf->Output('solicitudes/'.$_GET['id'].'.pdf', 'S');

//readfile('solicitudes/'.$_GET['id'].'.pdf');



?>