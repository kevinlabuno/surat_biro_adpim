
<?php
use setasign\Fpdi\Fpdi; 

// Source file and watermark config 
$file = 'uploads/Surat Undangan Rapat2022-11-22.pdf'; 
$text_image = 'image/ttd/TTDkevin123.png'; 
header('Content-type: application/pdf');

// Set source PDF file 
$pdf = new Fpdi(); 
if(file_exists("./".$file)){ 
    $pagecount = $pdf->setSourceFile($file); 
}else{ 
    die('Source PDF not found!'); 
} 
 
// Add watermark image to PDF pages 
     for($i=1;$i<=$pagecount;$i++){ 
    $tpl = $pdf->importPage($i); 
    $size = $pdf->getTemplateSize($tpl); 
    $pdf->addPage(); 
    $pdf->useTemplate($tpl, 1, 1, $size['width'], $size['height'], TRUE); 
     
    //Put the watermark 
    $xxx_final = ($size['width']-200); 
    $yyy_final = ($size['height']-100); 
    $pdf->Image($text_image, $xxx_final, $yyy_final, 50, 50, 'png'); 
} 
 
// Output PDF with watermark 
$pdf->Output();
?>