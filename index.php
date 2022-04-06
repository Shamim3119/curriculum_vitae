<?php

require('clipping.php');

$pdf = new PDF_Clipping();

$pdf->AddPage();

require("cv/left_panel.php");
 
require("cv/right_panel.php");

//End right session of cv

$pdf->Output();

?>