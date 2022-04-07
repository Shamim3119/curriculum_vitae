<?php

    // Secondary Skills Section

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',13);
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->SetLineWidth(.3);
    $pdf->ClippingText($x + 7,$pdf->GetY(),'Secondary Skills',true);
    $pdf->UnsetClipping();
    $pdf->Ln(2);  
    $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), 75, $pdf->GetY()); 



    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 7.3,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(40,1,"C, C++, Java",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 2.7,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(40,1,"React.js, Node.js",0, 'L'); 


    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 2.7,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(40,1,"Angular.js",0, 'L'); 

    //End Secondary Skills Section


?>