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
$pdf->Cell(189,8,utf8_decode('De acuerdo a su solicitud le hacemos, a continuación le presentamos su propuesta.'),0,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,8,utf8_decode('Propuesto asegurado: '.$_GET['nombre_completo']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Teléfono: '.$_GET['telefono']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Celular: '.$_GET['celular']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Correo Electrónico: '.$_GET['email']),1,1,'L');
$pdf->Cell(189,8,utf8_decode('Cédula: '.$_GET['cedula']),1,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,8,utf8_decode('Compañía de seguros: '.$_GET['company']),1,1,'L');
$pdf->Ln(3);
$pdf->SetTextColor(255,0,0);
$pdf->Cell(59,8,utf8_decode("Cotización No.: ".$_GET['id'].""),1,0,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(65,8,utf8_decode('Ramo: Incendio'),1,0,'C');
$pdf->Cell(65,8,utf8_decode("Fecha: ".$_GET['fecha_solicitud'].""),1,1,'C');
$pdf->Ln(3);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,8,utf8_decode('Generales del Bien Asegurado'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(63,8,utf8_decode('Tipo de Bien'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Tipo de Construcción'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Sector'),1,1,'C');
$pdf->Cell(63,8,utf8_decode($mensaje_bien),1,0,'C');
$pdf->Cell(63,8,utf8_decode($_GET['tipo_construccion']),1,0,'C');
$pdf->Cell(63,8,utf8_decode($mensaje_sector),1,1,'C');
$pdf->Ln(3);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(189,8,utf8_decode('Tipo de Plan, Suma Asegurada, Prima Anual'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(63,8,utf8_decode('Plan:'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Suma asegurada'),1,0,'C');
$pdf->Cell(63,8,utf8_decode('Prima Anual'),1,1,'C');
$pdf->Cell(63,8,utf8_decode($_GET['plan']),1,0,'C');
$pdf->Cell(63,8,utf8_decode("B/. ".number_format($_GET['suma_asegurada'], "2", ".", ",").""),1,0,'C');
$pdf->Cell(63,8,utf8_decode("B/. ".number_format($_GET['suma'], "2", ".", ",").""),1,1,'C');
$pdf->Ln(3);
$pdf->SetTextColor(0,102,204);
$pdf->Cell(0,8,utf8_decode('Coberturas'),1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Cell(63,8,utf8_decode('- Incendio y/o impacto de rayo'),0,0,'L');
$pdf->Cell(63,8,utf8_decode('- Remoción de escombros'),0,0,'L');
$pdf->Cell(63,8,utf8_decode(''),0,1,'L');
$pdf->Cell(63,8,utf8_decode('- Humo u hollín'),0,0,'L');
$pdf->Cell(63,8,utf8_decode('- Terremoto y vendaval'),0,0,'L');
$pdf->Cell(63,8,utf8_decode(''),0,1,'L');
$pdf->Cell(63,8,utf8_decode('- Explosión'),0,0,'L');
$pdf->Cell(63,8,utf8_decode('- Inundación y daños por agua'),0,0,'L');
$pdf->Cell(63,8,utf8_decode(''),0,1,'L');
$pdf->Cell(63,8,utf8_decode('- Impacto de vehículos aéreos'),0,0,'L');
$pdf->Cell(63,8,utf8_decode('- Desórdenes públicos (SOLO APLICA AL PLAN GOLD)'),0,0,'L');
$pdf->Cell(63,8,utf8_decode(''),0,1,'L');
$pdf->Cell(63,8,utf8_decode('- Objetos caídos del cielo'),0,0,'L');
$pdf->Cell(63,8,utf8_decode('- Daños por maldad (SOLO APLICA AL PLAN GOLD)'),0,0,'L');
$pdf->Cell(63,8,utf8_decode(''),0,1,'L');
$pdf->Ln(5);
$pdf->SetFillColor(255,0,0);
$pdf->Cell(189,8,("PROPUESTA VALIDA POR 7 DIAS"),1,1,'C',true);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(189,8,utf8_decode('Para la pronta emisión de su póliza necesitamos nos presente los siguiente documentos:'),0,1,'C');
$pdf->Cell(189,8,utf8_decode('1. Formulario Conozca su cliente'),1,1,'L');
$pdf->Cell(189,8,utf8_decode('2. Fotocopia de Cédula del Asegurado y Contratante'),1,1,'L');
$pdf->Cell(189,8,utf8_decode('3. Solicitud de Póliza (Será entregada a usted por un ejecutivo nuestro)'),1,1,'L');
$pdf->Cell(189,8,utf8_decode('4. Formulario de descuento (Será entregada a usted por un ejecutivo nuestro)'),1,1,'L');
$pdf->Ln(3);
$pdf->Cell(189,8,utf8_decode('Llámenos al: 227-7777'),0,1,'L');
$pdf->Cell(189,8,utf8_decode('Escríbanos a: info@seguroteconviene.com'),0,1,'L');
$pdf->Output('solicitudes/'.$_GET["id"].'.pdf', 'D');
$doc = $pdf->Output('solicitudes/'.$_GET["id"].'.pdf', 'S');


?>