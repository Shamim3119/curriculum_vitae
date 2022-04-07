
<?php
// Right session of cv
$x = 82;
$y = $pdf->GetY() + 6;
 
$pdf->SetDrawColor(0, 51, 153);
$pdf->ClippingRoundedRect($x,$y - 2,110,26,5,true);
$pdf->UnsetClipping();

 require("participations.php");

?>