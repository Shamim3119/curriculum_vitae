
<?php
// Right session of cv
$x = 82;
$y = 25;

$pdf->SetDrawColor(0, 0, 0);
$pdf->ClippingRoundedRect($x,$y - 5,110,150,5,true);
$pdf->UnsetClipping();

require("experience.php");

?>