<?php

    session_start();

<<<<<<< HEAD
=======
    //connect database to he system
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    $mysqli = new mysqli('localhost','root','','greenview') or die(mysqli_error($mysqli));

    $id = 0;
    $update = false;
    $name = '';
    $email = '';
    $pay = '';

<<<<<<< HEAD
=======
    //insert data to room_payment table
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_POST['add'])){
        $name = $_POST['customer_name'];
        $email = $_POST['email'];
        $pay = $_POST['payment'];

        $mysqli->query("INSERT INTO room_payment (customer_name,email,payment) VALUES ('$name','$email','$pay')") or
        die($mysqli->error);

        $_SESSION['message'] = "Record Has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: indexRoom.php");
    }

<<<<<<< HEAD
=======
    //delete data from room_payment table
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM room_payment WHERE customer_id = $id") or die($mysqli->error);

        $_SESSION['message'] = "Record Has been deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location: indexRoom.php");
    }

<<<<<<< HEAD
=======
    //get data from room_payment table to update
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM room_payment WHERE customer_id = $id") or die($mysqli->error());
        if(count($result)==1){
            $row = $result->fetch_array();
            $name = $row['customer_name'];
            $email = $row['email'];
            $pay = $row['payment'];
        }
    }

<<<<<<< HEAD
=======
    //update data in room_payment table
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['customer_name'];
        $email = $_POST['email'];
        $pay = $_POST['payment'];

        $mysqli->query("UPDATE room_payment SET customer_name = '$name', email = '$email', payment = '$pay' WHERE customer_id = $id") or
        die ($mysqli->error);

        $_SESSION['message'] = "Record Has been updated!";
        $_SESSION['msg_type'] = "warning";

        header("location: indexRoom.php");
    }
?>