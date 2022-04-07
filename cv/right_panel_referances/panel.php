
<?php
// Right session of cv
$x = 82;
$y = $pdf->GetY() + 7;
 
$pdf->SetDrawColor(0, 51, 153);
$pdf->ClippingRoundedRect($x,$y - 2,110,23,5,true);
$pdf->UnsetClipping();

 require("references.php");

?>