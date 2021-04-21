
<?php 

//Activamos el almacenamiento en el buffer
// ob_start();
// session_start();

// if (!isset($_SESSION['nombre'])) 
// {
//   echo "Tiene que iniciar SesiÃ³n para accder a formularios";;
// }
// else
// {

//require '../../config/connection.php';
//require '../../modelos/funciones.php';
//require_once('../../qrcode/qrcode.class.php');
include 'plantilla.php';


/*$sql = "SELECT alumnos.id_alumno, alumnos.apenom, cursos.id_curso, cursos.nombre_curso,
        cursos.modalidad_curso,cursos.organizador, cursos.fecha_inicio, cursos.hora_inicio,cursos.hora_fin
        FROM asistenciacursos
        INNER JOIN alumnos ON asistenciacursos.id_alumno = alumnos.id_alumno
        INNER JOIN cursos ON asistenciacursos.id_curso = cursos.id_curso
        WHERE cursos.id_curso = '2' ";
        
        */

//$rspta =  ejecutarConsulta($sql);

$tpocertificado = 'ASISTENTE';
$nroCertificado = '226';//para idcurso 2
//$nroCertificado = '441';//para idcurso 4



//$data= Array();

//while ($reg=$rspta->fetch_object()){

    //$duracion = 2;
    //$fechaComoEntero = strtotime($reg->fecha_inicio);
    /////////$qr = $nroCertificado.'-'.$mes = date("m", $fechaComoEntero).'-'.date('Y').'-CV-CSJHCO-PJ-pj';
    //$qr = $nroCertificado.'-'.$mes = date("m", $fechaComoEntero).'-'.'2020-CV-CSJHCO-PJ';
    
    //$apellidos= $reg->apenom;

    $pdf=new PDF('L','mm','A4');
   
    $pdf->AliasNbPages();
    $pdf->SetMargins(25,20);
    $pdf->AddPage();
    
    $pdf->SetFont('Times','B',33);
    $pdf->SetTextColor(165,55,56);
    $pdf->Cell(250,50,utf8_decode('Corte Superior de Justicia de Hu¨¢nuco'),1,1,'C');
    
 /*   $pdf->Ln(20);
    
    $pdf->SetFont('Times','B',65);
    $pdf->SetTextColor(43,50,148);
    $pdf->Cell(250,50,'Certificado ',0,0,'C');
    $pdf->Ln(30);

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor(85, 85, 87); 
    $pdf->Cell(33,54,'Otorgado a:  ',0,0,'C');
    $pdf->Ln(0);

    //$pdf->SetFont('Times','BI',35);
    $pdf->SetFont('Times','BI',33);
    $pdf->SetTextColor(85, 85, 87); 
    
    //$pdf->Cell(280,46,ucwords(strval($apellidos)),0,0,'C');
    $pdf->Cell(280,46,ucwords(strtolower(strval($apellidos))),0,0,'C');
    

    $pdf->Line(65,102,270,102);
    $pdf->Ln(35);

    $pdf->SetFont('Times','',14);
    $pdf->SetTextColor(85, 85, 87); 
    $html = '<p>Por su Participacion como <b>'.$tpocertificado.'</b> en la Conferencia Magistral en la '.$reg->modalidad_curso.' Organizado por '.$reg->organizador.';  tema : <b>"'.$reg->nombre_curso.'"</b> llevada por medio de la plataforma Google Hangouts Meet y transmitida por Facebook Live@cortesuperiorhuanuco, el dia '.fechaSola($reg->fecha_inicio).'. Con una duracion de '.$duracion.' horas lectivas.</p>';
    $pdf->WriteHTML($html);
    
    $pdf->Ln(10); 

    // Firma 1 
    $pdf->Image('../../files/imagenes/firmaPresidente.jpeg', 120, 140, 50 );
    //$pdf->Image('../../files/imagenes/firmaCUPE.jpg', 130, 130, 50 );

    $pdf->SetFont('Arial','',12);
    $pdf->SetTextColor(85, 85, 87); 
    $pdf->Cell(435,30,'Huanuco,'.fechaSola($reg->fecha_inicio),0,0,'C');
    $pdf->Ln(5);

    $pdf->Image('../../files/imagenes/sello_agua.png', 123, 140, 45 );
    $pdf->Image('../../files/imagenes/fono.jpg', 220, 160, 50 );

    $pdf->Image('../../files/imagenes/barra_inferior_pj.jpg', 27, 187, 242 ); 
    
    
    */
    
    
    //$nombreCertificado = $qr.'.pdf';

    //$qrcode = new QRcode( $url.'/certificados/files/certificados/'.$nombreCertificado , 'L'); // error level : L, M, Q, H      
    //$qrcode-> displayFPDF ($pdf, 28, 160,20 );
    
    //$pdf->SetFont('Arial','B',4);
    //$pdf->SetTextColor(85, 85, 87); 
    //$pdf->Text(28, 183, $qr);


    
    //$pdf->OutPut('../../files/certificados/'.$nombreCertificado,'F');
    //$pdf->OutPut();
    
    $pdf->OutPut('../../files/certificados/bb.pdf','F');

    //$consulta = "INSERT INTO certificados (id_curso, id_presidente, id_alumno, tipocertificado, qr_code, pdf_certificado) 
     //                               VALUES ( '$reg->id_curso', '1', '$reg->id_alumno', '$tpocertificado', '$qr', '$nombreCertificado' )";
   // ejecutarConsulta($consulta);

    //$nroCertificado++;
//}





// }

//ob_end_flush();
 ?>
