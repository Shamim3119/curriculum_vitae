<?php

    $x = 86;
    $pdf->Ln(8);  
    $pdf->SetXY($x,$pdf->GetY());
    $pdf->SetFont('Arial','B',10);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(80,2,"Android application development:-",0,0,'L');

    $pdf->Ln(5);  
    $pdf->SetXY($x + 2,$pdf->GetY());
    $pdf->SetFont('Arial','B',9);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(80,2,"Development Tools:",0,0,'L');

    $pdf->Ln(5);  
    $pdf->SetXY($x + 4,$pdf->GetY());
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(80,2,"Android Studio with Java.",0,0,'L');

    $pdf->Ln(5);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"1.Reseller systems Topup,Mobile banking,Bank transfer,Bill pay,Prepaid card",0,0,'L');
 
    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->MultiCell(100,3,"2.Mobile recharge,Mobile banking,SMS send,Payment receive \n   fully automation with Sim USD any country of the world.",0, 'L');  
 

?>