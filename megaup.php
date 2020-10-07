<?php


require ("simple_html_dom.php");
$html=new simple_html_dom();

$html->load_file("https://megaup.net/T75a/The.Racer.2020.720p_%7BCM%7D_.mp4");

$script=$html->find('script[!src][!type]',0);


$pattern="/href='(.*?)'/";
preg_match($pattern,$script,$matches);
$downloadlink=$matches[1];

echo $downloadlink;
