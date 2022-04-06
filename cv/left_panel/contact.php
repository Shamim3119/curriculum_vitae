<?php

    // Address section
    $x = 10;
    $pdf->SetXY($x,$y);
    $pdf->Ln(3);  
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(80,2,"Address",0,0,'C');
    $pdf->Ln(3);  
    $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), 70, $pdf->GetY()); 
    $pdf->Ln(2);
    $pdf->SetXY($pdf->GetX() + 20, $pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->MultiCell(40,3,"37/1 West Vashantak Dhaka Cantonment, Dhaka -1206",0, 'C');  
    // End address section 

    // Cell section
    $x = 10;
    $pdf->SetXY($x,$pdf->GetY());
    $pdf->Ln(3);  
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(80,2,"Cell",0,0,'C');
    $pdf->Ln(3);  
    $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), 70, $pdf->GetY()); 
    $pdf->Ln(2);
    $pdf->SetXY($pdf->GetX() + 20,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->MultiCell(40,3,"+88 01727360427\n+8801911638946",0, 'C');  
    //End cell address section 


    // email section
    $x = 10;
    $pdf->SetXY($x,$pdf->GetY());
    $pdf->Ln(3);  
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(80,2,"E-Mail",0,0,'C');
    $pdf->Ln(3);  
    $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), 70, $pdf->GetY()); 
    $pdf->Ln(2);
    $pdf->SetXY($pdf->GetX() + 20,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->MultiCell(40,3,"shamim.3119@gmail.com\nshamim_rud@hotmail.com",0, 'C');  
    // End email address section 


    // Key skills section
    $x = 10;
    $pdf->SetXY($x,$pdf->GetY());
    $pdf->Ln(5);  
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(80,2,"Key Skills",0,0,'C');
    $pdf->Ln(3);  
    $pdf->Line($pdf->GetX() + 20, $pdf->GetY(), 70, $pdf->GetY()); 
    $pdf->Ln(2);
    $pdf->SetXY($pdf->GetX() + 20,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->MultiCell(45,3,"-> Honesty & Ethics\n-> Leadership, teamwork\n-> Hard work\n-> Training & Study/Research\n-> Communicative",0, 'L');  

    //End key skills section

?>