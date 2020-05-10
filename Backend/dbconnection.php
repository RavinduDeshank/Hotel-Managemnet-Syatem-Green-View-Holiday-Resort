<?php

    $dbhost = 'localhost';
    $dbuser = '';
    $dbpass = '';
    $dbname = 'greenview';

    $db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if (mysqli_connect_errno()) {
        die('Database Connection Failed' . mysqli_connect_error());
    }


?>
