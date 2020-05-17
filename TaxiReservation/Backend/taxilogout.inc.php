<?php

    session_start();
    session_unset();
    session_destroy();

    /*when click on logout: navigate to the taxi login page*/
    header("Location: ../taxilogin.php");
?>