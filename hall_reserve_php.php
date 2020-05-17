<?php
    include('hall_db_connection.php');
    session_start();

        //Set values into variables
        if(isset($_POST['submit'])){
            $name_initials = $_POST['name_initials']; 
            $mobile_no = $_POST['mobile_no'];
            $no_of_guests = $_POST['no_of_guests'];
            $event_type = $_POST['event_type'];
            $venue = $_POST['venue'];            
            $hall_date = $_POST['hall_date'];      
            $hall_time = $_POST['hall_time'];
            $menu = $_POST['menu'];

            //Insert the data into database
            $myquery="INSERT INTO hall_booking (name_initials,mobile_no,no_of_guests,event_type,venue,hall_date,hall_time,menu)VALUES('".$name_initials."','".$mobile_no."','".$no_of_guests."','".$event_type."','".$venue."','".$hall_date."','".$hall_time."','".$menu."')";
                        if (!mysqli_query($con,$myquery))
                        {
                        echo("Error description: " . mysqli_error($con));
                        }else {
                            $_SESSION['success'] = "Your booking has been submited";
                            $_SESSION['id'] = $con->user_id;

                            //Display the confirmation of the booking
                            echo "<br/>";
                            echo "<h1><center> Hall booking confirmation </center></h1>";
                            echo "<br/>";
                            echo "<div style= 'padding-left:280px';>";
                            echo " Name with initials : " .$name_initials. "<br/>";
                            echo "<br/>";
                            echo " Mobile number      : " .$mobile_no. "<br/>";
                            echo "<br/>";
                            echo " No of guests       : " .$no_of_guests. "<br/>";
                            echo "<br/>";
                            echo " Event type         : " .$event_type. "<br/>";
                            echo "<br/>";
                            echo " Venue              : " .$venue. "<br/>";
                            echo "<br/>";
                            echo " Date               : " .$hall_date. "<br/>";
                            echo "<br/>";
                            echo " Time               : " .$hall_time. "<br/>";
                            echo "<br/>";
                            echo " Menu               : " .$menu. "<br/>";
                            echo "<br/>";
                            echo "<br/>";
                            echo "      If you want to change the reservation details or cancel the reservation,";
                            echo "      please contact our administration";
                            echo "<br/>";
                            echo "<br/>";
                            echo "      Tell : +9478 893 38 67";
                            echo "<br/>";
                            echo "      Skype: Green View Holiday";
                            echo "<br/>";
                            echo "      Web : Reservations@greenviewholiday.com";
                            echo "<br/>";
                            echo "<br/>";
                            echo("<div style = 'padding-right:300px'; ><button onclick=\"location.href='index.php'\">Back to Home</button></div>");
                            echo "</div>";
                            exit();
                        }
        }    

    ?> 

    