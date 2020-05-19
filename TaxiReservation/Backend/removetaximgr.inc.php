<?php
<<<<<<< HEAD
    include 'dbconnection.php';


=======
    /*connect to the database*/
    include 'dbconnection.php';

    /*delete selected taxi manager from the database*/
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_GET['id'])){
        $sql = "DELETE FROM taxicustomer WHERE user_type='taxiManager' and user_id= ". $_GET['id']." ";
        mysqli_query($db,$sql);

        header("Location: ../removetaximanager.php");
    }

?>