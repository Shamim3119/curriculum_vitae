
<?php
// Right session of cv
$x = 82;
$y = $pdf->GetY() + 6;
 
$pdf->SetLineWidth(.1);
$pdf->SetDrawColor(0, 51, 153);
$pdf->ClippingRoundedRect($x,$y - 2, 110, 38, 5,true);
$pdf->UnsetClipping();
 
require("job_history.php");

?>