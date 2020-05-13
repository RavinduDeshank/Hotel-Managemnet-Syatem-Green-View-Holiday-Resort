<?php require_once('Backend/dbconnection.php'); ?>
<?php
    
    if(isset($_GET['reservation_id'])) {
        //getting user information
        $reservation_id = mysqli_real_escape_string($db, $_GET['reservation_id']);
        $query = "UPDATE taxicustomer SET is_deleted = '1' WHERE user_id ={$reservation_id} LIMIT 1";

            $result = mysqli_query($db, $query);

            if ($result) {
                //reservation deleted
               header('Location: viewtaxi.php?msg=reservation_deleted');
               //echo mysqli_error($db);
            } else {
                header('Location:viewtaxi.php?msg=delete_failed');
                //echo mysqli_error($db);
            }

        }

    
?>
	
	