<?php
$json['cake']=array();
$main_count=0;
$sub_count=0;

$json['cake'][$main_count]['type']="Anniversary";
$json['cake'][$main_count]['sub_type']="25th Anniversary";
$json['cake'][$main_count++]['location']="images/cakes/anniversary/25-anniversary/";

$json['cake'][$main_count]['type']="Anniversary";
$json['cake'][$main_count]['sub_type']="50th Anniversary";
$json['cake'][$main_count++]['location']="images/cakes/anniversary/50-anniversary/";

$json['cake'][$main_count]['type']="Anniversary";
$json['cake'][$main_count]['sub_type']="other";
$json['cake'][$main_count++]['location']="images/cakes/anniversary/other/";


$json['cake'][$main_count]['type']="Baptism";
$json['cake'][$main_count++]['location']="images/cakes/baptism/";


$json['cake'][$main_count]['type']="Birthday";
$json['cake'][$main_count]['sub_type']="1st Birthday";
$json['cake'][$main_count++]['location']="images/cakes/birthday/1-birthday/";

$json['cake'][$main_count]['type']="Birthday";
$json['cake'][$main_count]['sub_type']="21st Birthday";
$json['cake'][$main_count++]['location']="images/cakes/birthday/21-birthday/";

$json['cake'][$main_count]['type']="Birthday";
$json['cake'][$main_count]['sub_type']="50th Birthday";
$json['cake'][$main_count++]['location']="images/cakes/birthday/50-birthday/";

$json['cake'][$main_count]['type']="Birthday";
$json['cake'][$main_count]['sub_type']="football";
$json['cake'][$main_count++]['location']="images/cakes/birthday/football/";

$json['cake'][$main_count]['type']="Birthday";
$json['cake'][$main_count]['sub_type']="Kids";
$json['cake'][$main_count++]['location']="images/cakes/birthday/kids/";

$json['cake'][$main_count]['type']="Birthday";
$json['cake'][$main_count]['sub_type']="other";
$json['cake'][$main_count++]['location']="images/cakes/birthday/other/";




$json['cake'][$main_count]['type']="Communion";
$json['cake'][$main_count++]['location']="images/cakes/communion/";

$json['cake'][$main_count]['type']="Wedding";
$json['cake'][$main_count++]['location']="images/cakes/wedding/";

$json['cake'][$main_count]['type']="Adult";
$json['cake'][$main_count++]['location']="images/cakes/adult/";

$json['cake'][$main_count]['type']="other";
$json['cake'][$main_count++]['location']="images/cakes/other/";


echo json_encode($json);
?>
