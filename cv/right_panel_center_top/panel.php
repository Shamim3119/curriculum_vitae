
<?php
// Right session of cv
$x = 82;
$y = 175;
 
$pdf->SetDrawColor(0, 0, 0);
$pdf->ClippingRoundedRect($x,$y - 2,110,40,5,true);
$pdf->UnsetClipping();

require("job_history.php");

?>