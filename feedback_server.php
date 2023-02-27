<?php
        require("connection.php");
        $name1= $_POST['name'];
        $comments1 = $_POST['comments1'];

        
    // $DB_NAME = "feedback_db";
        
        // Create connection
        // $db = mysqli_connect("localhost", "root", "", "feedback_db");
    
        // if($db == True)
        // {
        //     echo "Database connected Successfully to $DB_NAME databse"."<br><br>";
        // }else
        // {
        //     echo "Database Not connected"."<br><br>";
        // }   

        $insert_sql = "INSERT INTO feedback_db (name1, comments1) VALUES ('$name1', '$comments1')";
        if($result = $conn->query($insert_sql)){
            echo "Inseted";
        }

     
        
?>