<?php

    $pdf->SetXY($x,$y);
    $pdf->SetFont('Arial','B',13);
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->SetLineWidth(.5);
    $pdf->ClippingText($x + 40,$pdf->GetY(),'Experience',true);
    $pdf->UnsetClipping();
    $pdf->Ln(2);  
    $pdf->SetXY($x, $pdf->GetY());
    $pdf->Line($pdf->GetX() + 2, $pdf->GetY(), 189, $pdf->GetY()); 

    require("experience/web.php");

    require("experience/android.php");

    require("experience/windows.php");

    // End address section 




?>