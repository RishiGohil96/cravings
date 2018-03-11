<?php
include('config/db_config.php');
$cake_id = $_POST['cake_id'];
$response = array();

$query="SELECT location from cravings_test_cake_details where cake_id = $cake_id";
if($result = $conn->query($query))
{
    while($row = mysqli_fetch_assoc($result))
    {
        $location = '../../../'.$row['location'];
    }
    if(!unlink($location))
    {
        $response['state'] = "error";
        $response['message'] = "Couldn't delete file";
    }
    else
    {
        $query = "DELETE from cravings_test_cake_details where cake_id = $cake_id";
        if($conn->query($query))
        {
            $response['state'] = "success";
            $response['message'] = "File deleted successfully";
        }
    }
}
else
{
    $response['state'] = "error";
    $response['message'] = $conn->error;
}

echo json_encode($response);
?>
