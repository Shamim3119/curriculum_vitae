<?php

$pdf->SetXY($x,$y);
$pdf->Ln(2);  
$pdf->SetFont('Arial','B',16);
$pdf->SetDrawColor(0, 51, 153);
$pdf->SetLineWidth(.5);
$pdf->ClippingText($x + 40,$pdf->GetY(),'Experience',true);
$pdf->UnsetClipping();
$pdf->Ln(3);  
$pdf->SetXY($x, $pdf->GetY());

$pdf->Line($pdf->GetX() + 5, $pdf->GetY(), 187, $pdf->GetY()); 




?>