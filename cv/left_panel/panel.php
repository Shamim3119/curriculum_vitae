<?php

    $x = 35;
    $y = 25;
    $pdf->ClippingRoundedRect(20,$y - 5,60,250,5,true);
    $pdf->UnsetClipping();

    require("individual.php");

    require("contact.php");

    require("primary_skills.php");

    require("secondary_skills.php");

    require("languages.php");

?>