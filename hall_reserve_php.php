<?php
    include('hall_db_connection.php');
    session_start();


    if(isset($_POST['submit'])){
        $name_initials = $_POST['name_initials']; 
        $mobile_no = $_POST['mobile_no'];
        $no_of_guests = $_POST['no_of_guests'];
        $event_type = $_POST['event_type'];
        $venue = $_POST['venue'];            
        $hall_date = $_POST['hall_date'];      
        $hall_time = $_POST['hall_time'];
        $menu = $_POST['menu'];

        $myquery="INSERT INTO hall_booking (name_initials,mobile_no,no_of_guests,event_type,venue,hall_date,hall_time,menu)VALUES('".$name_initials."','".$mobile_no."','".$no_of_guests."','".$event_type."','".$venue."','".$hall_date."','".$hall_time."','".$menu."')";
                    if (!mysqli_query($con,$myquery))
                    {
                    echo("Error description: " . mysqli_error($con));
                    }else {
                        $_SESSION['success'] = "Your booking has been submited";
                        $_SESSION['id'] = $con->user_id;
                        header('Location:hall_booking_details.php');
                        exit();
                    }

    }    

?> 

