<?php
 

$pdf->SetXY($x,$y);
$pdf->Ln(3);  
$pdf->SetFont('Arial','B',14);
$pdf->SetDrawColor(0, 51, 153);
$pdf->SetLineWidth(.3);
$pdf->ClippingText($x + 40,$pdf->GetY(),'Education',true);
$pdf->UnsetClipping();
$pdf->Ln(2);  
$pdf->SetXY($x, $pdf->GetY());
$pdf->Line($pdf->GetX() + 2, $pdf->GetY(), 189, $pdf->GetY()); 


$pdf->Ln(1); 
$pdf->SetXY($x + 5,$pdf->GetY());
$pdf->SetFont('Arial','',7); 
$w = array(30, 20, 55);
$al = array('L', 'C', 'L');
$header = array('Programming Contest', 'Date', 'Loaction');

$data = $pdf->LoadData('files/participations.txt');
$pdf->FancyTable($header,$data, $w, $al, $x + 2);



 

?>