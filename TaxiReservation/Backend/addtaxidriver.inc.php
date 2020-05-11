<?php
    include 'dbconnection.php';
    $errors = array();
    $success = array();

    if(isset($_POST['signup'])){

        $licence_num = mysqli_real_escape_string($db,$_POST['licence_num']);
        $full_name = mysqli_real_escape_string($db,$_POST['full_name']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $tel_num = mysqli_real_escape_string($db, $_POST['tel_num']);
        $NIC = mysqli_real_escape_string($db, $_POST['NIC']);
        $address = mysqli_real_escape_string($db, $_POST['address']);

    if (empty($licence_num) || empty($full_name) || empty($email)|| empty($tel_num) || empty($NIC) || empty($address)) {
        $errors[] = 'Empty Fields';
    }
    if (count($errors) == 0) {
        $sql = "INSERT INTO taxidriver(licence_num,full_name,email,tel_num,NIC,address) VALUES('$licence_num','$full_name','$email','$tel_num','$NIC','$address')";
        mysqli_query($db, $sql);
        $success[] = 'New Taxi Driver has added successfully';
    }

    }

?>