<?php
include ('config/db_config.php');
$cake_id= $_POST['cake_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$response=array();

$query = "update cravings_test_cake_details set title=? , description=? where cake_id=?";
if($sql= $conn->prepare($query))
{
  $sql->bind_param("ssi",$title,$description,$cake_id);
  if($sql->execute())
  {
    $response['state']='success';
    $response['message'] = "Details updated successfully!";
  }
  else
  {
    $response['state']='error';
    $response['message'] = "Oops! Something went wrong.";
  }
}
else
{
  $response['state']='error';
  $response['message'] = "Oops! Something went wrong.";
}
echo json_encode($response);
?>
