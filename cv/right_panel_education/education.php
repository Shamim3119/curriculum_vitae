<?php
 

$pdf->SetXY($x,$y);
$pdf->Ln(2);  
$pdf->SetFont('Arial','B',13);
$pdf->SetDrawColor(0, 51, 153);
$pdf->SetLineWidth(.3);
$pdf->ClippingText($x + 40,$pdf->GetY(),'Education',true);
$pdf->UnsetClipping();
$pdf->Ln(1);  
$pdf->SetXY($x, $pdf->GetY());
$pdf->Line($pdf->GetX() + 2, $pdf->GetY(), 189, $pdf->GetY()); 


$pdf->Ln(1); 
$pdf->SetXY($x + 5,$pdf->GetY());
$pdf->SetFont('Arial','',7); 
$w = array(35, 20, 15, 15, 20);
$al = array('L', 'C', 'C', 'C', 'C');
$header = array('University', 'Graduation', 'Year', 'CGPA', 'Out Of');

$data = $pdf->LoadData('files/education.txt');
$pdf->FancyTable($header,$data, $w, $al, $x + 2);



 

?>