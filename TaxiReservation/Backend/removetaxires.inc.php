<?php
    /*connect to the  database*/
    include 'dbconnection.php';

    /*delete selected taxi reservation from the database*/
    if(isset($_GET['id'])){
        $sql = "DELETE FROM taxicustomer WHERE user_type='taxiCustomer' and user_id= ". $_GET['id']." ";
        mysqli_query($db,$sql);

        header("Location: ../removetaxires.php");
    }

?>