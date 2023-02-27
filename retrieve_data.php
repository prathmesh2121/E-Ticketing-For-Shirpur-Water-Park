<?php

    $db = mysqli_connect("localhost", "root", "", "feedback_db");

    if(!$db)
    {
        die("Connection failed: " . mysqli_connect_error());
    }



?>