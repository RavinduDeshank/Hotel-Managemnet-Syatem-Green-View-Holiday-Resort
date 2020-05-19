<?php
    include 'dbconnection.php';


    if(isset($_GET['id'])){
        $sql = "DELETE FROM laundry WHERE Laundry_ID= ". $_GET['id']." ";
        mysqli_query($db,$sql);

        header("Location: ../remove_Details.php");
    }
