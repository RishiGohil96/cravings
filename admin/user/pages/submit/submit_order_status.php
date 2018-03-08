<?php
include ('../config/db_config.php');

$order_no = $_POST['order_no'];
$status = $_POST['status'];

if($status == 'confirmed')
{
    $cake_mrp = $_POST['cake_mrp'];
    $delivery = $_POST['delivery_charges'];
    $query = "UPDATE cravings_test_orders_details
                SET order_status='confirmed', cake_mrp='$cake_mrp', delivery='$delivery'
                WHERE order_no='$order_no'";
}
elseif ($status == 'cancelled')
{
    $query = "UPDATE cravings_test_orders_details
                SET order_status='cancelled'
                WHERE order_no='$order_no'";
}
if($result = $conn->query($query))
{
    echo "success";
}
else
{
    echo $conn->error;
}
?>
