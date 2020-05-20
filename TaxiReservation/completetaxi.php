<?php require_once('Backend/dbconnection.php'); ?>
<?php
    
    if(isset($_GET['reservation_id'])) {
        //getting user information
        $reservation_id = mysqli_real_escape_string($db, $_GET['reservation_id']);
        $query = "UPDATE taxicustomer SET is_complete = '1' WHERE user_id ={$reservation_id} ";

            $result = mysqli_query($db, $query);

            if ($result) {
<<<<<<< HEAD
                //reservation did
=======
                //remeve reservation when completed
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
               header('Location: taxidriver.php?msg=reservation_did');
               //echo mysqli_error($db);
            } else {
                header('Location:taxidriver.php?msg=done_failed');
                //echo mysqli_error($db);
            }

        }

    
?>