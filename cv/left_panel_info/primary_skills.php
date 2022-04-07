<?php


    // Primary Skills Section
    $x = 20;
    $pdf->Ln(8);
    $pdf->SetFont('Arial','B',13);
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->SetLineWidth(.4);
    $pdf->ClippingText($x + 12,$pdf->GetY(),'Primary Skills',true);
    $pdf->UnsetClipping();
    $pdf->Ln(2);  
    $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), 75, $pdf->GetY()); 
    
    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 16.6,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(40,1,"PHP, C#.Net",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 16.6,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->Cell(40,1,"Laravel, JavaScript",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 16.6,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->Cell(40,1,"MySQL, SQL Server",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 11.9,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->Cell(40,1,"Vue.js, jQuery, Ajax",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 11.9,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->Cell(40,1,"Android Studio Java",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 11.9,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->Cell(40,1,"VB.Net,Crystal Reports",0, 'L'); 


    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 11.9,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->Cell(40,1,"Html,CSS,Xml,Dhtml",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 11.9,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->Cell(40,1,"Windows, Linux",0, 'L'); 

    $pdf->Ln(.1);

    $pdf->ClippingRoundedRect($x + 36.5,$pdf->GetY() + 3,19,4,2,false);
    $pdf->Image('images/star.jpg',$x + 36,$pdf->GetY() - 7.3,20);
    $pdf->UnsetClipping();
    $pdf->SetXY($pdf->GetX() + 14,$pdf->GetY() + 5);
    $pdf->Cell(40,1,"Docker, Git",0, 'L'); 

    // End Primary Skills Section


?>