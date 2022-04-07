
<?php
// Right session of cv
$x = 82;
$y = $pdf->GetY() + 8;
 
$pdf->SetDrawColor(0, 0, 0);
$pdf->ClippingRoundedRect($x,$y - 2,110,23,5,true);
$pdf->UnsetClipping();

 require("education.php");

?>