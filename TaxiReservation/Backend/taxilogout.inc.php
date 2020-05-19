<?php

    session_start();
    session_unset();
    session_destroy();

<<<<<<< HEAD
=======
    /*when click on logout: navigate to the taxi login page*/
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    header("Location: ../taxilogin.php");
?>