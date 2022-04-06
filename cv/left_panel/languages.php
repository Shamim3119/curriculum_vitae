<?php

    // Languages Skills Section

    $pdf->Ln(15);
    $pdf->SetFont('Arial','B',16);
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->SetLineWidth(.2);
    $pdf->ClippingText($x + 15,$pdf->GetY(),'Languages',true);
    $pdf->UnsetClipping();
    $pdf->Ln(3);  
    $pdf->Line($pdf->GetX() + 12, $pdf->GetY(), 78, $pdf->GetY()); 



    $pdf->ClippingRoundedRect($x + 39.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('star.jpg',$x + 39,$pdf->GetY() - 11.9,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 11,$pdf->GetY() + 5);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(40,1,"Bengali:Speaking/Writing",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 39.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('star.jpg',$x + 39,$pdf->GetY() - 7.3,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 11,$pdf->GetY() + 5);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(40,1,"English:Writing",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 39.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('star.jpg',$x + 39,$pdf->GetY() - 2.5,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 11,$pdf->GetY() + 5);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(40,1,"English:Speaking",0, 'L'); 

    // End Languages Skills Section

?>