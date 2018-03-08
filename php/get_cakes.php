<?php
include("config/db_config.php");
$json['cakes']=array();
$count=0;
$query="select * from cravings_test_cake_details where status='active'";
$result=$conn->query($query);
if(mysqli_num_rows($result) > 0)
{
  //$json['cakes']['message']="1";
  while($row=mysqli_fetch_assoc($result))
  {
    $json['cakes'][$count]['cake_id']=$row['cake_id'];
    $json['cakes'][$count]['title']=$row['title'];
    $json['cakes'][$count]['type']=$row['type_id'];
    $json['cakes'][$count]['subtype']=$row['subtype_id'];
    $json['cakes'][$count]['location']=$row['location'];
    $json['cakes'][$count]['description']=$row['description'];
    $count++;
  }
}
else {
  //$json['cakes']['message']="0";
}
echo json_encode($json);
?>
