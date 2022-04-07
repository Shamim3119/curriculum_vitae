<?php

    $x = 35;
    $y = 32;
    $pdf->SetDrawColor(0, 51, 153);
    $pdf->ClippingRoundedRect(20,$y - 5,60,219,5,true);
    $pdf->UnsetClipping();

    require("individual.php");

    require("contact.php");

    require("primary_skills.php");

    require("secondary_skills.php");

    require("languages.php");

?>