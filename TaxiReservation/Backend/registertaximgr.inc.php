<?php
    include 'dbconnection.php';
    $errors = array();
    $success = array();

    if(isset($_POST['signup'])){

        $username = mysqli_real_escape_string($db,$_POST['uname']);
        $password1 = mysqli_real_escape_string($db,$_POST['password']);
        $password2 = mysqli_real_escape_string($db, $_POST['repassword']);
        $utype = 'taxiDriver';

    if (empty($username) || empty($password1) || empty($password2)) {
        $errors[] = 'Empty Fields';
    }
    if ($password1 != $password2) {
        $errors[] = "Confirm password doesn't match with password";
    }
    if (count($errors) == 0) {
        $sql = "INSERT INTO taxicustomer(username,password,user_type) VALUES('$username','$password1','$utype')";
        mysqli_query($db, $sql);
        $success[] = 'New Taxi Manager has added successfully';
    }

    }

?>