<?php
include('config/db_config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$address = $_POST['address'];

//$birthday =  implode("-", array_reverse(explode("/", $birthday)));

$query= "INSERT into cravings_test_customers(name, birthday, phone, email, address) values (?, ?, ?, ?, ?)";
if($stmt = $conn->prepare($query))
{
    $stmt->bind_param("sssss", $name, $birthday, $phone, $email, $address);
    if($stmt->execute())
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
