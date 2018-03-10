<?php
include('config/db_config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$birthday =  implode("-", array_reverse(explode("/", $birthday)));

$query= "INSERT into cravings_test_customers(name, birthday, phone, address) values ('$name', '$birthday', '$phone', '$address')";
if($conn->query($query))
{
    echo "done";
}
else
{
    echo $conn->error;
}
?>
