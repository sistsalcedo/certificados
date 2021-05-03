<?php 

$dni = $_GET['txt_dni'];
$curso = $_GET['id_curso'];

require '../../config/connection.php';
require '../../modelos/funciones.php';
require_once('../../qrcode/qrcode.class.php');
include 'plantilla.php';


$sql = "SELECT * FROM certificados_x_url WHERE  id_curso = '$curso' AND id_alumno = '$dni'";
        
        

$rspta =  ejecutarConsulta($sql);

$tpocertificado = 'ASISTENTE';

//$data= Array();

while ($reg=$rspta->fetch_object()){

    $duracion = 2;
    $fechaComoEntero = strtotime($reg->fecha_inicio);
    /////////$qr = $nroCertificado.'-'.$mes = date("m", $fechaComoEntero).'-'.date('Y').'-CV-CSJHCO-PJ-pj';//con fecha actual
    $qr = $nroCertificado.'-'.$mes = date("m", $fechaComoEntero).'-'.date("Y", $fechaComoEntero).'-CV-CSJHCO-PJ';
    
    $apellidos= $reg->apenom;

    $pdf=new PDF('L','mm','A4');
   
    $pdf->AliasNbPages();
    $pdf->SetMargins(25,20);
    $pdf->AddPage();
    
    $pdf->SetFont('Times','B',33);
    $pdf->SetTextColor(165,55,56);
    //$pdf->Cell(250,50,utf8_decode('Corte Superior de Justicia de Huánuco'),0,0,'C');
    
    $pdf->Ln(20);
    
    $pdf->SetFont('Times','B',65);
    $pdf->SetTextColor(43,50,148);
    $pdf->Cell(250,50,' ',0,0,'C');
    $pdf->Ln(30);

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor(85, 85, 87); 
    $pdf->Cell(33,54,'Otorgado a:  ',0,0,'C');
    $pdf->Ln(0);

    //$pdf->SetFont('Times','BI',35);
    $pdf->SetFont('Times','BI',33);
    $pdf->SetTextColor(85, 85, 87); 
    
    //$pdf->Cell(280,46,ucwords(strval($apellidos)),0,0,'C');
    $pdf->Cell(280,46,ucwords(strtolower(strval($reg->apellidos_nombres))),0,0,'C');
    

    $pdf->Line(65,102,270,102);
    $pdf->Ln(35);

    $pdf->SetFont('Times','',14);
    $pdf->SetTextColor(85, 85, 87); 
    $html = '<p>Por su participación como <b>'.$reg->tpo_certificado.'</b> en la Conferencia Magistral en la '.$reg->modalidad_curso.'. Organizado por la '.$reg->organizador_curso.';  tema : <b>"'.$reg->nombre_curso.'"</b> llevada por medio de la plataforma Google Hangouts Meet y transmitida por Facebook Live@cortesuperiorhuanuco, el día '.fechaSola($reg->fecha_inicio_curso).'. Con una duración de '.$duracion.' horas lectivas.</p>';
    $pdf->WriteHTML(utf8_decode($html));
    //$pdf->Write(5,utf8_decode('áéíóú'));
    
    $pdf->Ln(10); 

    // Firma 1 SANTOS

    $pdf->Image('../../files/imagenes/firmaPresidenteElmer.png', 50+15+5, 140, 50 );

    
    
    // Firma 2 CUPE
  
    $pdf->Image('../../files/imagenes/firmaEloyCupe.png', 120+10+10+10, 140, 50 );
    

    $pdf->SetFont('Arial','',12);
    $pdf->SetTextColor(85, 85, 87); 
    $pdf->Cell(435,30,utf8_decode('Huánuco,').fechaSola($reg->fecha_inicio_curso),0,0,'C');
    $pdf->Ln(5);

    
    $pdf->Image('../../files/imagenes/fono.jpg', 220, 160, 50 );
   
    
    $nombreCertificado = $reg->qr_certificado.'.pdf';

    $qrcode = new QRcode( $url.'/vistas/certificados/certificado_x_url.php?txt_dni='.$reg->id_alumno.'&id_curso='.$reg->id_curso , 'L'); // error level : L, M, Q, H      
    //$qrcode-> displayFPDF ($pdf, 28, 160,20 );//original
    $qrcode-> displayFPDF ($pdf, 32, 160,20 );
    
    $pdf->SetFont('Arial','BU',6);
    $pdf->SetTextColor(85, 85, 87); 
    
    $pdf->SetFont('Arial','BU',6);
    $pdf->SetTextColor(85, 85, 87); 
    $pdf->SetXY(0, 177);
    $pdf->Cell(85,10,utf8_decode('N° ').$reg->qr_certificado,0,0,'C');


    
  //$pdf->OutPut('../../files/certificados/'.$nombreCertificado,'F');
    $pdf->OutPut('D', $reg->nombre_curso.'.pdf');
    
    //$pdf->OutPut('../../files/certificados/bb.pdf','F');

    //$consulta = "INSERT INTO certificados (id_curso, id_presidente, id_alumno, tipocertificado, qr_code, pdf_certificado)   VALUES ( '$reg->id_curso', '1', '$reg->id_alumno', '$tpocertificado', '$qr', '$nombreCertificado' )";
  //  ejecutarConsulta($consulta);

   // $nroCertificado++;
}





// }

//ob_end_flush();
 ?>

































<?php
//require('/fpdf/fpdf.php');

//require '../../fpdf181/fpdf.php';

//require '../../config/connection.php';

//require '../../modelos/funciones.php';
//include 'plantilla.php';
//require_once('../../qrcode/qrcode.class.php');


/*$pdf=new PDF('L','mm','A4');
    
$pdf->AliasNbPages();
$pdf->SetMargins(25,20);
$pdf->AddPage();
$pdf->SetFont('Arial','B',33);
$pdf->SetTextColor(165,55,56);
$pdf->Cell(250,50,utf8_decode('Corte Superior de Justicia de Huánuco Huánuco Huánuco Huánuco '),0,0,'C');

$pdf->OutPut('../../files/certificados/bb.pdf','F');

*/

/*$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('¡Mi primera página pdf con FPDF!'),1,1);
$pdf->SetFont('Times','B',33);
$pdf->SetTextColor(165,55,56);
$pdf->Cell(250,50,'Corte Superior de Justicia de Huánuco ',1,1,'C');*/


?>