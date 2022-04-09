<?php

    $x = 86;
    $pdf->Ln(7);  
    $pdf->SetXY($x,$pdf->GetY());
    $pdf->SetFont('Arial','B',10);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(80,2,"Full-stack windows application development:-",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 2,$pdf->GetY());
    $pdf->SetFont('Arial','B',9);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(80,2,"Development Tools:",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 4,$pdf->GetY());
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(80,2,"C#.Net,VB.Net,Ms SQL,MySql,Crystal Reports.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"1.Business Talker ERP solution",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"2.Accounting Systems.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"3.Trade Express POS Systemes.",0,0,'L');
    
    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"4.Offline Mobile Recharge Systems.",0,0,'L');
        
    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"5.Offline SMS Marketing Systems.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->MultiCell(100,3,"6.Mobile recharge,Mobile banking,SMS send,Payment receive \n   fully automation with Sim USD any country of the world.",0, 'L');  
 

?>