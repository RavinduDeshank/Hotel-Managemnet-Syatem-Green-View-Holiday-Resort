<?php require_once('Backend/dbconnection.php'); ?>
<?php
    
    if(isset($_GET['reservation_id'])) {
        //getting user information
        $reservation_id = mysqli_real_escape_string($db, $_GET['reservation_id']);
        $query = "UPDATE taxicustomer SET is_complete = '1' WHERE user_id ={$reservation_id} ";

            $result = mysqli_query($db, $query);

            if ($result) {
                //remeve reservation when completed
               header('Location: taxidriver.php?msg=reservation_did');
               //echo mysqli_error($db);
            } else {
                header('Location:taxidriver.php?msg=done_failed');
                //echo mysqli_error($db);
            }

        }

    
?>