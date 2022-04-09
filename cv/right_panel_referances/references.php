<?php

$pdf->SetTextColor(0, 51, 153);
$pdf->SetDrawColor(0, 51, 153);
$pdf->SetXY($x + 10,$y + 1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(80,1,"References",0,0,'C');
 
$pdf->Ln(2);  
$pdf->SetXY($x, $pdf->GetY());
$pdf->Line($pdf->GetX() + 2, $pdf->GetY(), 189, $pdf->GetY()); 
$pdf->Line($pdf->GetX() + 50, $pdf->GetY(), $pdf->GetX() + 50, $pdf->GetY() + 18); 
 
$pdf->SetXY($x + 10,$y + 5);  
$pdf->SetFont('Arial','B',9);
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"M Khairul Anam",0, 'L'); 

$pdf->Ln(3);
$pdf->SetXY($x + 10,$pdf->GetY());  
$pdf->SetFont('Arial','',8);
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"Senior Software Developer",0, 'L'); 

$pdf->Ln(3);
$pdf->SetXY($x + 10,$pdf->GetY());  
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"PacketDNA Technologies Inc. ",0, 'L'); 

$pdf->Ln(3);
$pdf->SetXY($x + 10,$pdf->GetY());  
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"Ottawa, Canada.",0, 'L'); 

$pdf->Ln(3);
$pdf->SetXY($x + 10,$pdf->GetY());  
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"Email: anam741@hotmail.com",0, 'L'); 


 
$pdf->SetXY($x + 60,$y + 5);  
$pdf->SetFont('Arial','B',9);
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"Ahmed Zakaria Amin",0, 'L'); 

$pdf->Ln(3);
$pdf->SetXY($x + 60,$pdf->GetY());  
$pdf->SetFont('Arial','',8);
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"Head of HR, Cefalo Bangladesh",0, 'L'); 

$pdf->Ln(3);
$pdf->SetXY($x + 60,$pdf->GetY());  
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"House no: 12 Road no: 12, Dhaka 1209",0, 'L'); 

$pdf->Ln(3);
$pdf->SetXY($x + 60,$pdf->GetY());  
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"Phone: +880 1708-451289",0, 'L'); 

$pdf->Ln(3);
$pdf->SetXY($x + 60,$pdf->GetY());  
$pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
$pdf->Cell(40,1,"Email: zakaria@cefalo.com",0, 'L'); 
 

?>