<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'greenview';

<<<<<<< HEAD
=======
    /*database connection*/
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    $db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if (mysqli_connect_errno()) {
        die('Database Connection Failed' . mysqli_connect_error());
    }


?>
