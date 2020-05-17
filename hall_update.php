<?php

    include('hall_db_connection.php');
    session_start();

    if (isset($_POST['update'])) 
    {
        $userID = $_GET['ID'];
        $CustomerName = $_POST['name_initials'];
        $Mobile = $_POST['mobile_no'];
        $Guests = $_POST['no_of_guests'];
        $EventType = $_POST['event_type'];
        $Venue = $_POST['venue'];
        $Date = $_POST['hall_date'];
        $Time = $_POST['hall_time'];
        $Menu = $_POST['menu'];

        $query = "update hall_booking set name_initials = '".$CustomerName."',  mobile_no = '".$Mobile."', no_of_guests = '".$Guests."', event_type = '".$EventType."', venue = '".$Venue."', hall_date = '".$Date."', hall_time = '".$Time."', menu = '".$Menu."' where user_id = '".$userID."' ";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("location: hall_adminpanal.php");
        }
        else {
            echo 'Please check your query';
        }
    }
    else {
        header("location: hall_adminpanal.php");
    }
?>