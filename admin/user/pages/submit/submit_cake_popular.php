<?php
include('../config/db_config.php');
$cake_id = $_POST['cake_id'];
$popular_status = $_POST['popular_status'];
$response = array();

if($popular_status == 0)
{
    $popular_status = 1;
    $success_message = "Added to Popular Cakes";
}
else
{
    $popular_status = 0;
    $success_message = "Removed from Popular Cakes";
}

$query = "UPDATE cravings_test_cake_details set popular=$popular_status where cake_id=$cake_id";
if($conn->query($query))
{
    $response['state'] = "success";
    $response['message'] = $success_message;
}
else
{
    $response['state'] = "error";
    $response['message'] = "Something went wrong. Error: ".$conn->error;
}

echo json_encode($response);
?>
