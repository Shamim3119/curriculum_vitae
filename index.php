<?php

require('clipping.php');

$pdf = new PDF_Clipping();

$pdf->AddPage();

$pdf->SetXY(0,0);
$pdf->ClippingPolygon(array(0,0,0,25,25,0),true);
$pdf->Image('images/dgn.png',0,0,30);
$pdf->UnsetClipping();

$pdf->SetDrawColor(0, 51, 153);
$pdf->SetLineWidth(.6);
$pdf->Line($pdf->GetX(), $pdf->GetY() + 8, 220, $pdf->GetY() + 8); 
$pdf->Line($pdf->GetX(), $pdf->GetY() + 9.5, 220, $pdf->GetY() + 9.5); 

$pdf->SetLineWidth(.1);

require("cv/left_panel.php");
 
require("cv/right_panel.php");

//End right session of cv

$pdf->ClippingPolygon(array(210,275,185,297,210,297),true);
$pdf->Image('images/dgn.png',180,270,30);
$pdf->UnsetClipping();

$pdf->SetDrawColor(0, 51, 153);
$pdf->SetLineWidth(.6);
$pdf->Line(0, $pdf->GetY() + 19, 220, $pdf->GetY() + 19); 
$pdf->Line(0, $pdf->GetY() + 20.5, 220, $pdf->GetY() + 20.5); 

$pdf->Output();

?>