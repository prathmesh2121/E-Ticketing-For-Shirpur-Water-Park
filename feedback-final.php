<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback Form </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        <script>
            function back(){
                open("index.html")

            }

        </script>
       
    </head>
    <body style="background:white;">
        <form role="form" method="post" id="reused_form" method="POST" action="feedback_server.php" >
                    
        <div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
       
                    <h1>Feedback</h1> 
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="name"> Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
   
                    <p> Please provide your feedback below: </p>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="comments1" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input type="button" onclick="back()" value= "back" class="btn btn-lg btn-warning btn-block" />
                            </div>
                            <div class="col-sm-6 form-group">
                                <input type="submit"  class="btn btn-lg btn-warning btn-block" />
                            </div>
                            
                        </div>
                    </form>
                    
                  </div>
            </div>
        </div>

            <br><center><i><b>Previous User's Feedback that may helps you !</b></i></center><br>

            <?php
                require("connection.php");                              // Using database connection file here

                $records = mysqli_query($conn,"select * from feedback_db"); // fetch data from database
                
                while($data = mysqli_fetch_array($records))
                {
            ?>
                    <center><tr>
                        <td><b><?php echo $data['name1']." - "; ?></b></td>
                        <td><?php echo $data['comments1']; ?></td><br><br>
                        
                    <center></tr>	
                    <?php
                }
                
                    ?>



    </body>
</html>