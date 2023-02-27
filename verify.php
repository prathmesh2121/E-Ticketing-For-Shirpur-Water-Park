<?php

require('config.php');
include("connection.php");
session_start();
//database connection
$conn = mysqli_connect($host,$username,$password,$dbname);


require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

  $razorpay_order_id =  $_SESSION['razorpay_order_id'];
 //   $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $total = $_SESSION['total'];
    $mob = $_SESSION['mob'];
    $adults = $_SESSION['adults'];
    $childs = $_SESSION['childs'];
    $midchild = $_SESSION['midchilds'];
    date_default_timezone_set('Asia/Calcutta'); 
    $date = date("Y-m-d H:i:s"); // time in India
   
if ($success === true)
{
    
    // INSERT INTO `payment_data`(`id`, `order_id`, `status`, `email`, `name`, `phone-no`, `adults`, `childs_below_10yrs`, `childs_below_18yrs`, `amount`, `date`) 
    // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])

// new with all data
    $sql ="INSERT INTO `payment_data`( `order_id`, `status`, `email`, `name`, `phone-no`, `adults`, `childs_below_10yrs`, `childs_below_18yrs`, `amount`, `date`) 
    VALUES ('$razorpay_order_id','Success','$email','$name','$mob','$adults','$childs','$midchild','$total','$date')";
    echo "Payment successfully done!!!";
    if(mysqli_query($conn, $sql))
    {
        echo '<script>alert("Congradulations your Tickets booking is successfully done..")</script>';
        header("location: ticketpdf.php");
    }
    else{
        echo mysqli_error($conn);

        echo '<script>alert("Data not inserted!??")</script>'.mysqli_error($conn);
    }
  
}
else
{
    echo "Ooops payment is failed !!!";
  
    $sql ="INSERT INTO `payment_data`( `order_id`, `status`, `email`, `name`, `phone-no`, `adults`, `childs_below_10yrs`, `childs_below_18yrs`, `amount`, `date`) 
    VALUES ($razorpay_order_id,'Failed','$email','$name','$mob','$adults','$childs','$midchild','$total','$mob','$date')";
    echo '<script>alert("Payment is Failled.\n plealse contact with us on MOB-NO-1234567891")</script>'.mysqli_error($sql);
    header("location: booknow.html");
   
}

?>