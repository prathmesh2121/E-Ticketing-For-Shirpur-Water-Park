<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();



// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

// Form fileds catching
$total = $_POST['total'];
$mob = $_POST['mob'];
$name = $_POST['fname']. " " . $_POST['lname'];
$email = $_POST['email'];
$adults= $_POST['adults'];
$childs = $_POST['childs'];
$midchild = $_POST['midchilds'];
$date = $_POST['date'];

$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['total'] = $total;
$_SESSION['mob'] = $mob;
$_SESSION['adults'] = $adults;
$_SESSION['childs'] = $childs;
$_SESSION['midchilds'] = $midchild;
$_SESSION['total'] = $total;
$_SESSION['date'] = $date;


$orderData = [
    'receipt'         => 3456,
    'amount'          => $total * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}
$checkout = 'manual';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "SHIRPUR WATERPARK",
    "description"       => "Best holiday park.",
    "image"             => "IMG/logo-payment.png",
    "prefill"           => [
    "name"              => $name,
    "email"             => $email,
    "contact"           => $mob,
    ],
    "notes"             => [
    "address"           => "Welcome to  shirpur waterpark",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);
require("checkout/{$checkout}.php");

?>

 