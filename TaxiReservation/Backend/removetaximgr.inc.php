<?php
    /*connect to the database*/
    include 'dbconnection.php';

    /*delete selected taxi manager from the database*/
    if(isset($_GET['id'])){
        $sql = "DELETE FROM taxicustomer WHERE user_type='taxiManager' and user_id= ". $_GET['id']." ";
        mysqli_query($db,$sql);

        header("Location: ../removetaximanager.php");
    }

?>