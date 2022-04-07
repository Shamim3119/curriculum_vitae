<?php

    $pdf->SetXY($x,$y);
    $pdf->Ln(2);  
    $pdf->SetFont('Arial','B',13);
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->SetLineWidth(.4);
    $pdf->ClippingText($x + 40,$pdf->GetY(),'Job History',true);
    $pdf->UnsetClipping();
    $pdf->Ln(1);  
    $pdf->SetXY($x, $pdf->GetY());
    $pdf->Line($pdf->GetX() + 2, $pdf->GetY(), 189, $pdf->GetY()); 


    $pdf->Ln(1); 
    $pdf->SetXY($x + 5,$pdf->GetY());
    $pdf->SetFont('Arial','',7); 
    $w = array(24, 27, 14, 17, 23);
    $al = array('L', 'C', 'C', 'C', 'C');
    $header = array('Company', 'Designation', 'From', 'To', 'Web');
 
    $data = $pdf->LoadData('files/job_history.txt');
    $pdf->FancyTable($header,$data, $w, $al, $x + 2);

 




?>