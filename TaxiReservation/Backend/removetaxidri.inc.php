<?php
    include 'dbconnection.php';


    if(isset($_GET['id'])){
        $sql = "DELETE FROM taxidriver WHERE user_type='taxiDriver' and user_id= ". $_GET['id']." ";
        mysqli_query($db,$sql);

        header("Location: ../removetaxidriver.php");
    }

?>