<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- <?php echo"<script>alert(\"Hello admin\")</script>"; ?> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
/*  Table data*/
body{
    margin:0px;
}
.nav{
    font-family:poppins;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0px 60px;
    background-color:#404040;
}
h1{
    color:white;
}
div.nav button{
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:8px;

  }

    </style>

</head>
<body>
    <div class="nav">
	<h1>WELCOME TO ADMIN PANEL - <?php echo $_SESSION['AdminLoginId'] ?></h1>
  <form method="POST">
    <button onclick="window.open('https://dashboard.razorpay.com/app/payments','_blank','resizable=yes')"> PAYMENT DATA</button>
    <button name="logout"> LOG OUT</button>
    <button name="user-contact" onclick="window.open('user-contact.php','_blank','resizable=yes')">User_Contact Info</button>

</form>
<?php
if(isset($_POST['logout'])){
    session_destroy();
    header("location: index.html");
}
?>

</div>

<center><h1 style="color:black;">DATA</h1></center>

<table>
  <thead>
  <tr>
    <th>Payment-id</th>
    <th>Order id</th>
     <th>Status</th>
     <th>Email</th>
     <th>Name</th>
     <th>Phone_number</th>
     <th>Adults</th>
     <th>Childs Below 10yrs</th>
     <th>Childs Below 18yrs</th>
     <th>Amount</th>
     <th>Date</th>
  </tr>
 </thead>
<tbody>
<?php 
include("connection.php");
// error_reporting(0);
$query = "SELECT * FROM payment_data ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_array($data);
// INSERT INTO `payment_data`(`id`, `order_id`, `status`, `email`, `name`, `phone-no`, `adults`, `childs_below_10yrs`, `childs_below_18yrs`, `amount`, `date`) 
    // VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])


while($result =  mysqli_fetch_array($data)){
?>
    <tr>
    <td><?php echo $result['id']; ?></td>
    <td><?php echo $result['order_id']; ?></td>
    <td><?php echo $result['status']; ?></td>
    <td><?php echo $result['email']; ?></td>
    <td><?php echo $result['name']; ?></td>
    <td><?php echo $result['phone-no']; ?></td>
    <td><?php echo $result['adults']; ?></td>
    <td><?php echo $result['childs_below_10yrs']; ?></td>
    <td><?php echo $result['childs_below_18yrs']; ?></td>
    <td><?php echo $result['amount']; ?></td>
    <td><?php echo $result['date']; ?></td>
  </tr>
<?php
}


?>


</tbody>
</table>


</body>
</html>