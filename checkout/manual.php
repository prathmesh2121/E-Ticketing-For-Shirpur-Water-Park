<!-- Booking-checkout.html -->
<!DOCTYPE html>
<html lang="en">
<title>Checkout form</title>
<style>
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

    </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<div class="w3-grey w3-animate-zoom" style="padding:20px 50px; margin:0px;
background-size:cover;">

<div class="w3-section w3-row-padding">

  <div class="w3-twothird">
    <div class="w3-card-4">
      <div style="background-color:cadetblue;"class="w3-display-container">
        <img src="IMG/waterlogo.png" alt="Car" style="width:100%">
        <div  class="w3-display-bottomleft w3-container  w3-xlarge "></div>
      </div>
      <div class="w3-container w3-light-grey">
        <h1>Your Order Details:</h1>
        <h3> Name :<?php echo " ".$_SESSION['name']; ?></h3>
        <h3> Email :<?php echo " ".$_SESSION['email'];?></h3>
        <h3> Contact Number : <?php echo " ".$_SESSION['mob'];?></h3>
        <h3> Number of Adults :<?php echo " ".$_SESSION['adults'];?></h3>
        <h3> Childs Below 10Yrs :<?php echo " ".$_SESSION['childs'];?></h3>
        <h3> Childs Below 18Yrs :<?php echo " ".$_SESSION['midchilds'];?></h3>
        <h2>Total Amount is <?php echo "₹".$_SESSION['total']; ?></h2>
      

    </div>
    </div>
  </div>
  <div class="w3-third w3-container w3-center" style="font-weight=20px; padding:15px">
    <div class="w3-card-4">
      <div class="w3-container">
       <h1> Total count is<br>
        <?php echo "₹". $_SESSION['total']; ?></h1>
    </div>
      <div class="w3-container w3-white" style="font-weight=20px;padding:10px 15px">
      <button class="button" id="rzp-button1">CONTINUE</button>
       
      </div>
    </div>
</div>




</div>


</body>
</html>




<!-- Booking-checkout.html -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="verify.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>
<script>
// Checkout details as a json
var options = <?php echo $json?>;

/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};

// Boolean whether to show image inside a white frame. (default: true)
options.theme.image_padding = false;

options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    // Boolean indicating whether pressing escape key 
    // should close the checkout form. (default: true)
    escape: true,
    // Boolean indicating whether clicking translucent blank
    // space outside checkout form should close the form. (default: false)
    backdropclose: false
};

var rzp = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>


