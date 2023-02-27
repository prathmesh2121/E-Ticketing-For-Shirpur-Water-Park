<!DOCTYPE html>
<?php
require("Connection.php");

?>
<html>
    <head>
	    <title>Login Form</title>
		   <style>
		    body
            {
			  margin:0;
			  padding:0;
			  font-family: sans-serif;
			 }			
			
			.loginBox
			{
			    position:absolute;
				top:50%;
				left:50%;
				transform: translate(-50%, -50%);
				width:350px;
				height:420px;
				padding:80px 40px;
				box-sizing: border-box;
				background:rgba(0,0,0,0.5);
				
			}
			
			.loginname
			{
			    margin:0;
				padding:0 0 20px;
				color:#125292;
				font-family: Cursive;
				font-weight: 700;
				text-align:center;
				font-size: 2rem;
				font-style: bold;
				
			}
			
			.loginBox p
			{
			     padding:0;
				 margin:0;
				 font-weight:bold;
				 color:#fff;
			}
			
			.loginBox input
			{
			      width:100%;
				  margin-bottom:20px;
			}
			
			.loginBox input[type="text"], .loginBox input[type="password"]
			{
			      border: none;
				  border-bottom: 1px solid #fff;
				  background: transparent;
				  outline:none;
				  height:40px;
				  color:#fff;
				  font-size: 16px;
				  
			}
			
			.loginBox input[type="submit"]
			{
			      border:none;
				  outline:none;
				  height:40px;
				  color:#fff;
				  font-size:16px;
				  background:rgb(255,38,126);
				  cursor:pointer;
				  border-radius:20px;
			}
			
			.loginBox input[type="submit"]:hover
			{
			       background: #efed40;
				   color: #262626;
			}
			
			.loginBox a
			{
			       color: #fff;
				   font-size: 14px;
				   font-weight:bold;
			}
			
			::placeholder
			{
			        color:rgba(255,255,0,5);
			}
			
			
			
		   </style>
	</head>
	
	<body style = "background-image: 'IMG/Slide-1.jpg';">
		<div class="loginBox">
	    
	  <div class="loginname">Login Here </div> 
		<form method="POST">
		   <p>Email</p>
		   <input type="text" require name = "admin-email" placeholder ="Enter Email" required>
		   <p>Password</p>
		   <input type= "password" require name= "admin-password" placeholder ="Enter Password">
		   
		   <input type="submit" name = "signin" value ="sign in">
		</form>
	</div>	
	<?php


if(isset($_POST['signin']))
{
	$admin_email = $_POST['admin-email'];
	$admin_pass = $_POST['admin-password'];

	if($admin_email == "Jayashri Pawar" && $admin_pass == "jaya@321"){
		
		session_start();
		$_SESSION['AdminLoginId']= $_POST['admin-email'];
		header("location: admin panel.php");
		}
	else{
		echo"<script>alert(\"Incorrect Password\")</script>";
	}



}


	?>

</body>
</html>