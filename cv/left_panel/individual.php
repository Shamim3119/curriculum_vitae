<?php

// Iamge section 

    $pdf->ClippingRoundedRect($x,$y - 2,$y + 5,30,15,false);
    $pdf->Image('images/shamim.jpg',$x,$y - 2,$y + 5);
    $pdf->UnsetClipping();
    
// End Image Section

// Name section 
    $pdf->SetFont('Arial','B',15);
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->SetLineWidth(.6);
    $x = $x - 5;
    $y = $y + 35;
    $pdf->ClippingText($x,$y,'Shamim Ahmed',true);
    $pdf->UnsetClipping();
// End name section 

?>