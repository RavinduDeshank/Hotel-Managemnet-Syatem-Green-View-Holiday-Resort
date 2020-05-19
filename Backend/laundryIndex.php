<?php

    session_start();

<<<<<<< HEAD
=======
    //connect database to the system
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    $mysqli = new mysqli('localhost','root','','greenview') or die(mysqli_error($mysqli));

    $id = 0;
    $update = false;
    $name = '';
    $email = '';
    $pay = '';

<<<<<<< HEAD
=======

    //insert data to laundry_payment table
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_POST['add'])){
        $name = $_POST['customer_name'];
        $email = $_POST['email'];
        $pay = $_POST['payment'];

        $mysqli->query("INSERT INTO laundry_payment (customer_name,email,payment) VALUES ('$name','$email','$pay')") or
        die($mysqli->error);

        $_SESSION['message'] = "Record Has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: indexLaundry.php");
    }

<<<<<<< HEAD
=======
    //delete data from laundry_payment table
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM laundry_payment WHERE customer_id = $id") or die($mysqli->error);

        $_SESSION['message'] = "Record Has been deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location: indexLaundry.php");
    }

<<<<<<< HEAD
=======
    //edit inserted data and get it form to update
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM laundry_payment WHERE customer_id = $id") or die($mysqli->error());
        if(count($result)==1){
            $row = $result->fetch_array();
            $name = $row['customer_name'];
            $email = $row['email'];
            $pay = $row['payment'];
        }
    }

<<<<<<< HEAD
=======
    //update data from laundry_payment table
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['customer_name'];
        $email = $_POST['email'];
        $pay = $_POST['payment'];

        $mysqli->query("UPDATE laundry_payment SET customer_name = '$name', email = '$email', payment = '$pay' WHERE customer_id = $id") or
        die ($mysqli->error);

        $_SESSION['message'] = "Record Has been updated!";
        $_SESSION['msg_type'] = "warning";

        header("location: indexLaundry.php");
    }
?>