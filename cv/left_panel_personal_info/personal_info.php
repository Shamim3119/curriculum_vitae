<?php

    // Address section
    $x = 10;
    $pdf->SetTextColor(0, 51, 153);
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->SetXY($x,$y - 2);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(80,1,"Personal Information",0,0,'C');
    $pdf->Ln(2);  
    $pdf->Line($pdf->GetX() + 15, $pdf->GetY(), 75, $pdf->GetY()); 
    $pdf->Ln(2);
    $pdf->SetXY($pdf->GetX() + 20, $pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetXY($pdf->GetX() - 5, $pdf->GetY());
    $pdf->Cell(40,1,"Father's Name   :   Md. Abdur Rouf",0, 'L'); 
    $pdf->Ln(3);
    $pdf->SetXY($pdf->GetX() + 15, $pdf->GetY());
    $pdf->Cell(40,1,"Mother's Name  :   Rebeka Sultana",0, 'L'); 
    $pdf->Ln(3);
    $pdf->SetXY($pdf->GetX() + 15, $pdf->GetY());
    $pdf->Cell(40,1,"Birth Date          :   12th Jan, 1984",0, 'L'); 
    $pdf->Ln(3);
    $pdf->SetXY($pdf->GetX() + 15, $pdf->GetY());
    $pdf->Cell(40,1,"Nationality         :   Bangladeshi",0, 'L'); 
    $pdf->Ln(3);
    $pdf->SetXY($pdf->GetX() + 15, $pdf->GetY());
    $pdf->Cell(40,1,"Marital Status    :   Married",0, 'L'); 

    
    // End address section 

 
 
    //End key skills section

?>