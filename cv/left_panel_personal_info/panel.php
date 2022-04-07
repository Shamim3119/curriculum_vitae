<?php

    $x = 35;
    $y = 253;
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->ClippingRoundedRect(20,$y - 5,60,23,5,true);
    $pdf->UnsetClipping();

    require("personal_info.php");

 

?>