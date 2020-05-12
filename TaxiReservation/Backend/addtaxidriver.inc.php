<?php
    include 'dbconnection.php';
    $errors = array();
    $success = array();

    if(isset($_POST['signup'])){

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

    if (empty(empty($username) || empty($password1) || $licence_num) || empty($full_name) || empty($email)|| empty($tel_num) || empty($NIC) || empty($address)) {
        $errors[] = 'Empty Fields';
    }
    if ($password1 != $password2) {
        $errors[] = "Confirm password doesn't match with password";
    }
    if (count($errors) == 0) {
        $sql = "INSERT INTO taxidriver(username,password,user_type,licence_num,full_name,email,tel_num,NIC,address) VALUES('$username','$password1','$utype','$licence_num','$full_name','$email','$tel_num','$NIC','$address')";
        mysqli_query($db, $sql);
        $success[] = 'New Taxi Driver has added successfully';
    }

    }

?>