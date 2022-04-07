<?php

    $x = 86;
    $pdf->Ln(3);  
    $pdf->SetXY($x,$pdf->GetY());
    $pdf->SetFont('Arial','B',10);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(80,2,"Full-stack web development:-",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 2,$pdf->GetY());
    $pdf->SetFont('Arial','B',9);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(80,2,"Development Tools:",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 4,$pdf->GetY());
    $pdf->SetFont('Arial','B',8);
    $pdf->SetTextColor(0, 51, 153);
    $pdf->Cell(80,2,"PHP,MySql,Sql,Laravel,JavaScript,JQuery,Ajax.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"1.Central Management System of cross world ERP Solution",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"2.Online Topup,Mobile Banking, Bank Transfer, Bill Pay, Prepaid Card.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"3.HRM Solution Employee,Attendance,Loan & Advance,Payroll Management.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"4.Coaching Solution Admission,Attendance,Accounts,Result,SMS,Payroll.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"5.Voip switch Billing Web Manager, Level Manager, CDR Panel.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"6.Money Talker Job Complete MLM Solution with E Wallet Systems.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"7.Quick Trade Inventory Management Systems",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"8.Complete SMS Marketing Systems.",0,0,'L');

    $pdf->Ln(4);  
    $pdf->SetXY($x + 6,$pdf->GetY());
    $pdf->SetFont('Arial','',8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(100,2,"9.Group User Prediction game .",0,0,'L');

    

?>