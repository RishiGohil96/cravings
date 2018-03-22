<?php
include ('../config/db_config.php');
$branches = $_POST['branches'];
$cakes = $_POST['cakes'];
$customers = $_POST['customers'];
$orders = $_POST['orders'];

$query = "UPDATE cravings_test_stats set branches=$branches, cakes_baked=$cakes, customers=$customers, orders=$orders where stats_id=1";
if($conn->query($query))
{
    echo "stats updated";
}
else
{
    echo $conn->error;
}
?>
