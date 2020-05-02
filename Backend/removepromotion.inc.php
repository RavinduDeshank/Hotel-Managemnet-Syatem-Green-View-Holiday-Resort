<?php
    include 'dbconnection.php';


    if(isset($_GET['id'])){
        $sql = "DELETE FROM promotion WHERE pid= ". $_GET['id']." ";
        mysqli_query($db,$sql);

        header("Location: ../removePromotion.php");
    }

?>