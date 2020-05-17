<?php
    /*connect to the databae*/
    include 'dbconnection.php';
    $errors = array();
    $success = array();

    /*taxi manager registration process*/
    if(isset($_POST['signup'])){

        /*recieve all inputs values in taxi manager registration form*/
        $username = mysqli_real_escape_string($db,$_POST['uname']);
        $password1 = mysqli_real_escape_string($db,$_POST['password']);
        $password2 = mysqli_real_escape_string($db, $_POST['repassword']);
        $utype = 'taxiDriver';

    /*form validation : ensure that all required inputs are filled*/
    if (empty($username) || empty($password1) || empty($password2)) {
        $errors[] = 'Empty Fields';
    }
    
    /*form validation : ensure that passwords are matching*/
    if ($password1 != $password2) {
        $errors[] = "Confirm password doesn't match with password";
    }
    
    /*add taxi manager details if there are no any errors in the form*/
    if (count($errors) == 0) {
        $sql = "INSERT INTO taxicustomer(username,password,user_type) VALUES('$username','$password1','$utype')";
        mysqli_query($db, $sql);
        $success[] = 'New Taxi Manager has added successfully';
    }

    }

?>