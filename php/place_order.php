<?php
session_start();
include ('config/db_config.php');
date_default_timezone_set("Asia/Kolkata");

$cravings_id= 1;

$cake_id = $_POST['cake_id'];
$type = $_POST['type'];
$weight = $_POST['weight'];
$message = $_POST['message'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$date_today = date('y-m-d h:i:s');
//echo $cake_id."<br>".$type."<br>".$weight."<br>".$message."<br>".$address."<br>".$phone;

$query= "insert into cravings_test_orders_details(cake_id, weight, type, message, address, phone, placed_on) "
    ."values($cake_id, '$weight' , '$type', '$message', '$address', '$phone', '$date_today')";
if($result = $conn->query($query))
{
    $order_no = $conn->insert_id;
    $query = "insert into cravings_test_orders(order_no, cravings_id) values($order_no, $cravings_id)";
    if($result = $conn->query($query))
    {
        echo "done";
    }
    else
    {
        echo $conn->error;
    }
}
else
{
    echo $conn->error;
}
?>
