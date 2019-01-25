<?php

include("simple_html_dom.php");

$html = file_get_html('R/programming.html');

$c=$html; 

$A=$html->find("div[class=scrollerItem]");

echo "\n\n".count($A)."\n";

foreach ($A as $k => $e) {
// echo " ".$k." ".$e."\n";
$T=$e->find("h2[class=imors3-0]");

$V=$e->find("div[class=_1rZYMD_4xY3gRcSS3p8ODO]");

$C=$e->find("span[class=FHCV02u6Cp2zYL0fhQPsO]");

echo count($T)." ".$T[0]."\n";
echo count($V)." ".$V[0]."\n".$V[1]."\n";
echo count($C)." ".$C[0]."\n\n";

// var_dump($V);

}


