<?php 

//Activamos el almacenamiento en el buffer
// ob_start();
// session_start();

// if (!isset($_SESSION['nombre'])) 
// {
//   echo "Tiene que iniciar Sesión para accder a formularios";;
// }
// else
// {

require '../../config/connection.php';
include 'plantilla.php';




    

    
    $pdf = new PDF('L','mm','A4');
    $pdf->AliasNbPages();
    $pdf->SetMargins(25,20);
    $pdf->AddPage();
    
    $pdf->SetFont('Times','B',33);
    $pdf->SetTextColor(165,55,56);
    $pdf->Cell(250,54,'Corte Superior de Justicia de Huanuco ',0,0,'C');
    $pdf->Ln(20);
    
    $pdf->SetFont('Times','B',70);
    $pdf->SetTextColor(43,50,148);
    $pdf->Cell(250,60,'Certificado ',0,0,'C');
    $pdf->Ln(30);

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor(85, 85, 87); 
    $pdf->Cell(33,54,'Otorgado a:  ',0,0,'C');
    $pdf->Ln(35);

    $pdf->SetFont('Times','',14);
    $pdf->SetTextColor(85, 85, 87); 
    $html = '<p >Por su Participacion como <b>ASISTENTE</b> en la Conferencia Magistral en la modalidad Virtual Organizado por el Modulo de Familia de la Corte Superior de Justicia de Huanuco;  tema  <b>"Criterios para dictar el interamiento en la Justicia penal juvenil durante la emergencia sanitaria"</b> llevada por medio de la plataforma Google Hangouts Meet y transmitida por Facebook Live@cortesuperiorhuanuco el dia 06 de Mayo de 2020. Con una duracion de dos horas lectivas.</p>';
    $pdf->WriteHTML($html);    
    $pdf->Ln(10);

    // Firma 1 
    $pdf->Image('../../files/imagenes/firmaPresidente.jpeg', 120, 140, 50 );
    //$pdf->Image('../../files/imagenes/firmaCUPE.jpg', 130, 130, 50 );

    $pdf->SetFont('Arial','',12);
    $pdf->SetTextColor(85, 85, 87); 
    $pdf->Cell(435,30,'Huanuco, 06 de Mayo de 2020  ',0,0,'C');
    $pdf->Ln(5);

    $pdf->Image('../../files/imagenes/sello_agua.png', 123, 140, 45 );
    $pdf->Image('../../files/imagenes/fono.jpg', 220, 160, 50 );


    $pdf->Image('../../files/imagenes/barra_inferior_pj.jpg', 27, 187, 242 );
    require_once('../../qrcode/qrcode.class.php');
    $qrcode = new QRcode('your message here', 'L'); // error level : L, M, Q, H
    $qrcode-> displayFPDF ($pdf, 28, 160,20 );
   
    $pdf->SetFont('Arial','BI',4);
    $pdf->SetTextColor(85, 85, 87); 
    $pdf->Text(28, 183, '300-05-2020-CV-CSJHCO-PJ');



    $pdf->Output();

// }

ob_end_flush();
 ?>
