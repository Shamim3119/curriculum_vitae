<?php

require('fpdf/fpdf.php');

class PDF_Clipping extends FPDF
{
    protected $B = 0;
    protected $I = 0;
    protected $U = 0;
    protected $HREF = '';

    function WriteHTML($html)
    {
        // HTML parser
        $html = str_replace("\n",' ',$html);
        $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
        foreach($a as $i=>$e)
        {
            if($i%2==0)
            {
                // Text
                if($this->HREF)
                    $this->PutLink($this->HREF,$e);
                else
                    $this->Write(5,$e);
            }
            else
            {
                // Tag
                if($e[0]=='/')
                    $this->CloseTag(strtoupper(substr($e,1)));
                else
                {
                    // Extract attributes
                    $a2 = explode(' ',$e);
                    $tag = strtoupper(array_shift($a2));
                    $attr = array();
                    foreach($a2 as $v)
                    {
                        if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                            $attr[strtoupper($a3[1])] = $a3[2];
                    }
                    $this->OpenTag($tag,$attr);
                }
            }
        }
    }

    function OpenTag($tag, $attr)
    {
        // Opening tag
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,true);
        if($tag=='A')
            $this->HREF = $attr['HREF'];
        if($tag=='BR')
            $this->Ln(5);
    }

    function CloseTag($tag)
    {
        // Closing tag
        if($tag=='B' || $tag=='I' || $tag=='U')
            $this->SetStyle($tag,false);
        if($tag=='A')
            $this->HREF = '';
    }

    function SetStyle($tag, $enable)
    {
        // Modify style and select corresponding font
        $this->$tag += ($enable ? 1 : -1);
        $style = '';
        foreach(array('B', 'I', 'U') as $s)
        {
            if($this->$s>0)
                $style .= $s;
        }
        $this->SetFont('',$style);
    }

    function PutLink($URL, $txt)
    {
        // Put a hyperlink
        $this->SetTextColor(0,0,255);
        $this->SetStyle('U',true);
        $this->Write(5,$txt,$URL);
        $this->SetStyle('U',false);
        $this->SetTextColor(0);
    }


    function ClippingText($x, $y, $txt, $outline=false)
    {
        $op=$outline ? 5 : 7;
        $this->_out(sprintf('q BT %.2F %.2F Td %d Tr (%s) Tj ET',
            $x*$this->k,
            ($this->h-$y)*$this->k,
            $op,
            $this->_escape($txt)));
    }

    function ClippingRect($x, $y, $w, $h, $outline=false)
    {
        $op=$outline ? 'S' : 'n';
        $this->_out(sprintf('q %.2F %.2F %.2F %.2F re W %s',
            $x*$this->k,
            ($this->h-$y)*$this->k,
            $w*$this->k,-$h*$this->k,
            $op));
    }

    function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
    {
        $h = $this->h;
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
            $x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
    }

 

    function ClippingRoundedRect($x, $y, $w, $h, $r, $outline=false)
    {
        $k = $this->k;
        $hp = $this->h;
        $op=$outline ? 'S' : 'n';
        $MyArc = 4/3 * (sqrt(2) - 1);
 
        $this->_out(sprintf('q %.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));
        $xc = $x+$w-$r ;
        $yc = $y+$r;
        $this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));

        $this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);
        $xc = $x+$w-$r ;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
        $this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);
        $xc = $x+$r ;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
        $this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);
        $xc = $x+$r ;
        $yc = $y+$r;
        $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
        $this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
        $this->_out(' W '.$op);
    }

    function ClippingEllipse($x, $y, $rx, $ry, $outline=false)
    {
        $op=$outline ? 'S' : 'n';
        $lx=4/3*(M_SQRT2-1)*$rx;
        $ly=4/3*(M_SQRT2-1)*$ry;
        $k=$this->k;
        $h=$this->h;
        $this->_out(sprintf('q %.2F %.2F m %.2F %.2F %.2F %.2F %.2F %.2F c',
            ($x+$rx)*$k,($h-$y)*$k,
            ($x+$rx)*$k,($h-($y-$ly))*$k,
            ($x+$lx)*$k,($h-($y-$ry))*$k,
            $x*$k,($h-($y-$ry))*$k));
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c',
            ($x-$lx)*$k,($h-($y-$ry))*$k,
            ($x-$rx)*$k,($h-($y-$ly))*$k,
            ($x-$rx)*$k,($h-$y)*$k));
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c',
            ($x-$rx)*$k,($h-($y+$ly))*$k,
            ($x-$lx)*$k,($h-($y+$ry))*$k,
            $x*$k,($h-($y+$ry))*$k));
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c W %s',
            ($x+$lx)*$k,($h-($y+$ry))*$k,
            ($x+$rx)*$k,($h-($y+$ly))*$k,
            ($x+$rx)*$k,($h-$y)*$k,
            $op));
    }

    function ClippingCircle($x, $y, $r, $outline=false)
    {
        $this->ClippingEllipse($x, $y, $r, $r, $outline);
    }

    function ClippingPolygon($points, $outline=false)
    {
        $op=$outline ? 'S' : 'n';
        $h = $this->h;
        $k = $this->k;
        $points_string = '';
        for($i=0; $i<count($points); $i+=2){
            $points_string .= sprintf('%.2F %.2F', $points[$i]*$k, ($h-$points[$i+1])*$k);
            if($i==0)
                $points_string .= ' m ';
            else
                $points_string .= ' l ';
        }
        $this->_out('q '.$points_string . 'h W '.$op);
    }

    function UnsetClipping()
    {
        $this->_out('Q');
    }

    function ClippedCell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        if($border || $fill || $this->y+$h>$this->PageBreakTrigger)
        {
            $this->Cell($w,$h,'',$border,0,'',$fill);
            $this->x-=$w;
        }
        $this->ClippingRect($this->x,$this->y,$w,$h);
        $this->Cell($w,$h,$txt,'',$ln,$align,false,$link);
        $this->UnsetClipping();
    }


    function PrintChapter($num, $title, $file)
    {
        $this->AddPage();
        $this->ChapterTitle($num,$title);
        $this->ChapterBody($file);
    }


    // Load data
    function LoadData($file)
    {
        // Read file lines
        $lines = file($file);
        $data = array();
        foreach($lines as $line)
            $data[] = explode(';',trim($line));
        return $data;
    }

    // Simple table
    function BasicTable($header, $data)
    {
        // Header
        foreach($header as $col)
            $this->Cell(40,7,$col,1);
        $this->Ln();
        // Data
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(40,6,$col,1);
            $this->Ln();
        }
    }

    // Better table
    function ImprovedTable($header, $data)
    {
        // Column widths
        $w = array(40, 35, 40, 45);
        // Header
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C');
        $this->Ln();
        // Data
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row[0],'LR');
            $this->Cell($w[1],6,$row[1],'LR');
            $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
            $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
            $this->Ln();
        }
        // Closing line
        $this->Cell(array_sum($w),0,'','T');
    }

    // Colored table
    function FancyTable($header, $data, $w, $al, $X, $link=false, $indx=-1)
    {
        // Colors, line width and bold font
        $this->SetFillColor(0, 51, 153);
        $this->SetTextColor(255);
        $this->SetDrawColor(0, 51, 153);
        $this->SetLineWidth(.1);
        $this->SetFont('Arial','B',7); 
        // Header
        $this->SetXY($X,$this->GetY());
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],5,$header[$i],1,0,'C',true);
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224,235,255);


        // Data
        $fill = true;
        foreach($data as $row)
        {
            $this->SetXY($X,$this->GetY());
            for($i=0;$i<count($header);$i++)
            {
                if($link == true && $indx == $i){
                    $this->SetFont('Arial','U',7); 
                    $this->SetTextColor(0,0,255);
                    $this->Cell($w[$i],6,$row[$i],'LR',0,$al[$i],$fill, "http://".$row[$i]);
                }
                else{
                    $this->SetTextColor(0);
                    $this->SetFont('Arial','',7); 
                    $this->Cell($w[$i],6,$row[$i],'LR',0,$al[$i],$fill);
                }

            }
            $this->Ln();
            $fill = !$fill;
        }
        // Closing line
        $this->SetXY($X,$this->GetY());
        $this->Cell(array_sum($w),0,'','T');
    }








}
?>