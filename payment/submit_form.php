<?php
session_start();
include('../php/config/db_config.php');

if(!isset($_POST['amount'])){header("location: ../index.php");}


// Change the Merchant key here as provided by Payumoney
$MERCHANT_KEY = "rjQUPktU";

// Change the Merchant Salt as provided by Payumoney
$SALT = "e5iIg1jwi8";

$udf1 = $_POST['order_no'];
$phone =$_POST['phone'];
$productinfo =$_POST['productinfo'];
$amount =$_POST['amount'];
$firstname =$_SESSION['first_name'];
$email =$_SESSION['email'];
//$service_provider ="payu_paisa";
//$txnid =1;
//$surl ="http://oceanstarsholidays.com/demo/cravings/payment/success.php";
//$furl ="http://oceanstarsholidays.com/demo/cravings/payment/failure.php";
$surl ="http://localhost/cravings-web/payment/success.php";
$furl ="http://localhost/cravings-web/payment/failure.php";

/////------------------------------------ transaction entry --------------------------------------------------////

$date_today = date('Y-m-d');
$txn_details = "payment for order $udf1";
$query= "insert into cravings_test_transactions(order_no, txn_details, txn_amount, txn_date) values ($udf1, '$txn_details', $amount, '$date_today')";
if($result = $conn->query($query))
{
    $txnid = $conn->insert_id;
}
else
{
    echo $conn->error;
}
/////------------------------------------ //transaction entry ------------------------------------------------////

	$hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$SALT;
	$hash =strtolower(hash("sha512", $hashseq));


?>


    <!DOCTYPE html>
    <html>

    <head>

        <title>Payment Processing</title>
        <link rel="stylesheet" href="../css/sweetalert.css" type="text/css" media="all">
        <script>
            function submitForm() {
                var postForm = document.forms.postForm;
                postForm.submit();
            }
        </script>
        <script src="../js/sweetalert.min.js"></script>
    </head>

    <body onload="showSwal(), submitForm();">

        <!--<div>
            <h2>Payment Gateway Testing Sample</h2>
            <table>
                <tr>
                    <td>Transaction Id</td>
                    <td><strong><?php //echo $txnid; ?></strong></td>
                    <td>Amount: </td>
                    <td><strong>Rs. <?php //echo $amount ?></strong></td>
            </table>
            <div>
                <p>In this page we will genrate hash and send it to payumoney.</p>
                <br>
                <p>Please be patient. this process might take some time,<br />please do not hit refresh or browser back button or close this window</p>
            </div>
        </div>-->

        <div>
            <form name="postForm" action="https://test.payu.in/_payment" method="POST">
                <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
                <input type="hidden" name="hash" value="<?php echo $hash;  ?>" />
                <input type="hidden" name="hash_abc" value="<?php echo $hashseq;  ?>" />
                <input type="hidden" name="txnid" value="<?php echo $txnid  ?>" />
                <input type="hidden" name="amount" value="<?php echo $amount  ?>" />
                <input type="hidden" name="firstname" value="<?php echo $firstname  ?>" />
                <input type="hidden" name="email" value="<?php echo $email  ?>" />
                <input type="hidden" name="phone" value="<?php echo $phone  ?>" />
                <input type="hidden" name="productinfo" value="<?php echo $productinfo  ?>" />
                <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                <input type="hidden" name="surl" value="<?php echo $surl  ?>" />
                <input type="hidden" name="furl" value="<?php echo $furl  ?>" />
            </form>
        </div>
        <script type="text/javascript">
            function showSwal() {
                swal({
                    title: "Redirecting to Payment Gateway",
                    text: "This should take only few seconds",
                    type: "info",
                    showCancelButton: false,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function() {

                });
            }
        </script>
    </body>

    </html>
