<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cravings | Payment | Success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../css/sweetalert.css" rel="stylesheet" type="text/css" media="all">
    <!-- sweet alert -->
    <script src="../js/sweetalert.min.js"></script>
</head>

<body>
    <?php
    include ('../php/config/db_config.php');
    $status=$_POST["status"];
    $firstname=$_POST["firstname"];
    $amount=$_POST["amount"];
    $txnid=$_POST["txnid"];
    $posted_hash=$_POST["hash"];
    $key=$_POST["key"];
    $productinfo=$_POST["productinfo"];
    $email=$_POST["email"];
    $salt="e5iIg1jwi8";
    // Salt should be same Post Request

    If (isset($_POST["additionalCharges"]))
    {
        $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
    }
    else
    {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
    }
    $hash = hash("sha512", $retHashSeq);
    if ($hash != $posted_hash)
    {
        ?>
        <script type="text/javascript">
            swal({
                    title: "Invalid Transaction!",
                    text: "Something went wrong for your payment with transaction ID <?php echo $txnid ?>.",
                    type: 'error',
                    showCancelButton: false
                },
                function() {
                    window.location = '../orders.php';
                });
        </script>
        <?php
    }
    else
    {
        $query = "UPDATE cravings_test_transactions, cravings_test_orders_details
        SET
        cravings_test_transactions.txn_status = 'done',
        cravings_test_orders_details.payment_status = 'done'
        WHERE
        cravings_test_transactions.txn_id=$txnid
        AND cravings_test_transactions.order_no = cravings_test_orders_details.order_no";
        if($conn->query($query))
        {
            ?>
            <script type="text/javascript">
                swal({
                        title: "Payment Done!",
                        text: "Your payment with transaction ID <?php echo $txnid ?> has been approved.",
                        type: 'success',
                        showCancelButton: false
                    },
                    function() {
                        window.location = '../orders.php';
                    });
            </script>
            <?php
        }
        else
        {
            echo "Something went wrong.<br>".$conn->error;
        }
    }
?>
                If you're not redirected, <a href="../orders.php">click here</a>.

</body>

</html>
