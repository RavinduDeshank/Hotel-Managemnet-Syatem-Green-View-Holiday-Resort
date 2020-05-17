<?php
    /*connect to the database*/
    include 'dbconnection.php';
    $errors = array();
    $success = array();

    /*taxi driver registration process*/
    if(isset($_POST['signup'])){

        /*recieve all input values from the add driver form*/
        $username = mysqli_real_escape_string($db,$_POST['uname']);
        $password1 = mysqli_real_escape_string($db,$_POST['password']);
        $password2 = mysqli_real_escape_string($db, $_POST['repassword']);
        $licence_num = mysqli_real_escape_string($db,$_POST['licence_num']);
        $full_name = mysqli_real_escape_string($db,$_POST['full_name']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $tel_num = mysqli_real_escape_string($db, $_POST['tel_num']);
        $NIC = mysqli_real_escape_string($db, $_POST['NIC']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $utype = 'taxiDriver';

    /*form validation : ensure that all required inputs are filled*/
    if (empty(empty($username) || empty($password1) || $licence_num) || empty($full_name) || empty($email)|| empty($tel_num) || empty($NIC) || empty($address)) {
        $errors[] = 'Empty Fields';
    }
    /*form validation : ensure that passwords are matching*/
    if ($password1 != $password2) {
        $errors[] = "Confirm password doesn't match with password";
    }
    /*add driver details if there are no errors in the form*/
    if (count($errors) == 0) {
        $sql = "INSERT INTO taxidriver(username,password,user_type,licence_num,full_name,email,tel_num,NIC,address) VALUES('$username','$password1','$utype','$licence_num','$full_name','$email','$tel_num','$NIC','$address')";
        mysqli_query($db, $sql);
        $success[] = 'New Taxi Driver has added successfully';
    }

    }

?>