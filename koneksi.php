<?php
/* //jika dilab 
$xhost="192.168.10.250";
$xuser="a111509163";
$xdb="a111509163";*/

$xhost="localhost";
$xuser="root";
$xdb="sinemate_farhan";
$xpass="";

$konek=mysql_connect($xhost,$xuser,$xpass);

if($konek)
{
}
$dbkon=mysql_select_db($xdb,$konek);
if($dbkon)
{
}

?>