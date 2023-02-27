<?php

require("connection.php");

session_start();
if(!isset($_SESSION['AdminLoginId'])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Contact Info</title>
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
   
  

</div>

<center><h1 style="color:black;">User_Contact Data</h1></center>

<table>
  <thead>
  <tr>
    <th>id</th>
    <th>Name</th>
     <th>Mobile Number</th>
     <th>Message</th>
     </tr>
 </thead>
<tbody>
<?php 
include("connection.php");
// error_reporting(0);
$query = "SELECT * FROM `user-contact` ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_array($data);

while($result =  mysqli_fetch_array($data)){
?>
    <tr>
    <td><?php echo $result['id']; ?></td>
    <td><?php echo $result['name']; ?></td>
    <td><?php echo $result['mob']; ?></td>
    <td><?php echo $result['msg']; ?></td>
  </tr>
<?php
}


?>


</tbody>
</table>


</body>
</html>