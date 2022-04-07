
<?php
// Right session of cv
$x = 82;
$y = 32;

$pdf->SetDrawColor(0, 51, 153);
$pdf->ClippingRoundedRect($x,$y - 5,110,132,5,true);
$pdf->UnsetClipping();

require("experience.php");

?>