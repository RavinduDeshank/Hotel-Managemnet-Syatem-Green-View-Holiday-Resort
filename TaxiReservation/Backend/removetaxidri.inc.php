<?php
<<<<<<< HEAD
    include 'dbconnection.php';


=======
    /*connect to the database*/
    include 'dbconnection.php';


    /*delete selected taxi driver from the database*/
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_GET['id'])){
        $sql = "DELETE FROM taxidriver WHERE user_type='taxiDriver' and user_id= ". $_GET['id']." ";
        mysqli_query($db,$sql);

        header("Location: ../removetaxidriver.php");
    }

?>