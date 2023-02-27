<?php

include("connection.php");
session_start();
//fpdf file requirement
require("fpdf/fpdf.php");

    $razorpay_order_id =  $_SESSION['razorpay_order_id'];
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $total = $_SESSION['total'];
    $mob = $_SESSION['mob'];
    $adults = $_SESSION['adults'];
    $childs = $_SESSION['childs'];
    $midchild = $_SESSION['midchilds'];
    date_default_timezone_set('Asia/Calcutta'); 
    $date = date("Y-m-d H:i:s"); // time in India/
                    
    $pdf = new FPDF();
    //$pdf->Rect(5, 5, 200, 287, 'D');
    $pdf-> AddPage();
    $pdf-> SetFont("Arial","B",22);
    $pdf-> Cell(0,20,"TICKET DETAILS",1,1,'C'); // margin(0), hight(20) names, border, newline, center
    $pdf-> SetFont("Arial","",16);
    $pdf-> Cell(10,15,"",0,1,"L");
    $pdf-> Cell(0,15,"Order_id : $razorpay_order_id",0,1,"L");
    $pdf-> Cell(0,15,"Name : $name",0,1,"L");
    $pdf-> Cell(0,15,"Email : $email",0,1,"L");
    $pdf-> Cell(0,15,"Phone-Number : $mob",0,1,"L");
    $pdf-> Cell(0,15,"Email : $email",0,1,"L");
    $pdf-> Cell(0,15,"Adults : $adults",0,1,"L");
    $pdf-> Cell(0,15,"Childs Below 10Yrs : $childs",0,1,"L");
    $pdf-> Cell(0,15,"Childs Below 18Yrs : $midchild",0,1,"L");
    $pdf-> Cell(0,15,"Date  : $date",0,1,"L");
    $pdf-> SetFont("Arial","B",20);
    $pdf-> Cell(0,17,"Total Amount  : $total",0,1,"L");
    $pdf-> SetFont("Arial","",12);
    $pdf-> Cell(0,5,"Please take the ticket pdf with you while going to Waterpark.",0,1,"L");
    $pdf-> Cell(0,5,"Please read and obey all posted signage.",0,1,"L");
    $pdf-> Cell(0,5,"1. Lifeguards are on site for your safety.",0,1,"L");
    $pdf-> Cell(0,5,"2. Ride at your own risk.",0,1,"L");
    $pdf-> Cell(0,5,"3. Please refer to the information available on each attraction for specific height requirements and rider safety information",0,1,"L");
    $pdf-> Cell(0,5,"4. Pregnant women and those with a history of heart or back problems should not use the slides.",0,1,"L");
    $pdf-> Cell(0,5,"Please read and obey all posted signage.",0,1,"L");

    $file = "$name shirpurWaterparkTikcet".'.pdf';

    $pdf -> output($file,'D');
    


?>