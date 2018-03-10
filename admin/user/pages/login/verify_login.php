<?php
include('../config/db_config.php');
$user = $_POST['username'];
$pass = $_POST['pass'];
$response = array();
$query = "select * from cravings_test_admin where username='$user' and password='$pass'";
if($result = $conn->query($query))
{
    if(mysqli_num_rows($result) == 0)
    {
        $response['status'] = "invalid details";
        $response['message'] = 'No such username/password exists';
    }
    else
    {
        session_start();
        while($row = mysqli_fetch_assoc($result))
        {
            //$_SESSION['cravings_id'] = $row['cravings_id'];
            $_SESSION['admin'] = $user;
        }
        $response['status'] = "success";
        $response['message'] = "successully logged in";
    }
}
else
{
    $response['status'] = "error";
    $response['message'] = $conn->error;
}
echo json_encode($response);
?>
