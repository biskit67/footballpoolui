<?php
 $istype16='No';
 $useArrows='Yes';
 $crossOut='Yes';
 $linkPlayer='Yes';
 $useSort='Yes';
 $basedisplay = 50;
$round=2;
$topLine = '<p>';
$topLine .= 'Round ';
if(file_exists('standings1.inc')) {$topLine .= '<a class="show" href="standings.php?round=1">1</a> ';}
if(file_exists('standings2.inc')) {$topLine .= '<a class="show" href="standings.php?round=2">2</a> ';}
$topLine .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$topLine .= '<a class="show" href="javascript:openPrintStand(\'REPLACEPRINT\')">Printable</a>';
$topLine .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 $topLine .= '<form name="find" style="display:inline;" method="GET" action="standings.php">';
 $topLine .= '<input type="text" name="find" value="'.$find.'" size=15 maxlength=25 />';
 $topLine .= '<input type="submit" value="Find Player" />';
 $topLine .= '</form> ';
$topLine .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 $topLine .= 'REPLACEPAGES';
 $topLine .= '</p>';
 $topLine16 = '<p>';
 $topLine16 .= '<a class="show" href="javascript:openPrintStand(\'REPLACEPRINT\')">Printable</a>';
$topLine16 .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 $topLine16 .= '<form name="find" style="display:inline;" method="GET" action="standings.php">';
 $topLine16 .= '<input type="text" name="find" value="'.$find.'" size=15 maxlength=25 />';
 $topLine16 .= '<input type="hidden" name="round" value="16" />';
 $topLine16 .= '<input type="submit" value="Find Player" />';
 $topLine16 .= '</form> ';
$topLine16 .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
 $topLine16 .= 'REPLACEPAGES';
 $topLine16 .= '</p>';

$listOfElim = array("No Pick","na","MVSU/WKU","Connecticut","Wichita St","New Mexico St","UNLV","S Dakota St","Notre Dame","Duke","LIU","Memphis","Long Beach St","Davidson","Colorado St","BYU/Iona","Virginia","Missouri","UNC Asheville","Southern Miss","Harvard","Montana","Texas","St. Bonaventure","W Virginia","Loyola Md","Lamar/Vermont","Alabama","Temple","Michigan","San Diego St","Belmont","St. Marys","Detroit","Iowa St","VCU","Colorado","Lehigh","St. Louis","New Mexico","Murray St","Norfolk St","Kansas St","Vanderbilt","Gonzaga","Creighton","Cal/USF","Georgetown","Purdue");
$updateOK='Yes';
 ?>
