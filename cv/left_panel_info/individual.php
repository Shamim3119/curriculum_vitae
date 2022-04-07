<?php

// Iamge section 

    $pdf->ClippingRoundedRect($x,$y - 3,$y,30,15,false);
    $pdf->Image('images/shamim.jpg',$x,$y - 3,$y);
    $pdf->UnsetClipping();
    
// End Image Section

// Name section 
    $x = $x - 5;
    $y = $y + 32;
    $pdf->SetFont('Arial','B',15);
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->SetLineWidth(.6);
    $pdf->ClippingText($x,$y,'Shamim Ahmed',true);
    $pdf->UnsetClipping();
// End name section 

?>