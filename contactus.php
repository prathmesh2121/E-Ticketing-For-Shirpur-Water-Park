<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-us</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar-->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="Images/waterlogo1.png" alt="not found"class="main-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link Home" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#Tickets">Tickets And Offers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactus.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="feedback-final.php">Feedback</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
              </ul>
            </div>
          </nav>
    </section>
    <!--Navbar end-->
    
    
    <!--contactus starts-->
    <header>
      <h1 style="padding:20px; font-size: 80px;font-weight: 300;"> Contact us</h1>
    </header>
    
    <div id="form">
    
    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>
    
    <form id="waterform"  method="post">
    
    <div class="formgroup" id="name-form">
        <label for="name">Your name*</label>
        <input type="text" id="name" name="name"  required/>
    </div>
    
    <div class="formgroup" id="email-form">
        <label for="mob">Your Phone-Number*</label>
        <input type="tel" id="mob" name="mob" required />
    </div>
    
    <div class="formgroup" id="message-form">
        <label for="message">Your message</label>
        <textarea id="message" name="msg" required></textarea>
    </div>
    
      <input type="submit" name="submit" value="Send your message!" />
    </form>

    </div>
    
    <?php
if(isset($_POST['submit'])){
      require("connection.php");

      $name= $_POST['name'];
      $email = $_POST['mob'];
      $msg= $_POST['msg'];

      $sql = "INSERT INTO `user-contact`( `name`, `mob`, `msg`)
      VALUES ('$name','$email','$msg')";
      if(mysqli_query($conn,$sql)){
       echo '<script>
        alert("Your Question is sended to WaterPark Admin \n We will inform You..\nThank You.");
        </script>';
      }
     header("location:index.html");
    }
?>
    <!--contactus ends-->

    
        <!-----------------------------waterpark rules ends----------------------->
           <section class="footer">
              <div class="about-col " name="contact" id="contact" style=" text-align: center;">
                  <h2>Get In Touch With Us</h2>
                  <span  class="social">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                  </span>
                      <ul class="footer_links">
                        <li><a>24x7 Live help</a></li>
                        <li><a href="#contact" >Contact us on 10081-12452</a></li>
                      </ul>
              </div>
              <div class="clearfix"> </div>
              <div style="color: black; text-align: center;">
                <p>Copyright © 2021 Shirpur Waterpark. All Rights Reserved  | Design by <a href="http://Shirpurwaterpark.in" style="text-decoration: none; color:burlywood;">Shirpur Waterpark</a></p>
              </div>
              </div>
          </section>
          
    
        <!--Section -->    
</body>
</html>