<?php

    session_start();

    //connect data to the system
    $mysqli = new mysqli('localhost','root','','greenview') or die(mysqli_error($mysqli));

    $id = 0;
    $update = false;
    $name = '';
    $email = '';
    $pay = '';

    //insert data to the taxi_payment table
    if(isset($_POST['add'])){
        $name = $_POST['customer_name'];
        $email = $_POST['email'];
        $pay = $_POST['payment'];

        
        $mysqli->query("INSERT INTO taxi_payment (customer_name,email,payment) VALUES ('$name','$email','$pay')") or
        die($mysqli->error);

        $_SESSION['message'] = "Record Has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: indexTaxi.php");
    }

    //delete data from taxi_payment table
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM taxi_payment WHERE customer_id = $id") or die($mysqli->error);

        $_SESSION['message'] = "Record Has been deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location: indexTaxi.php");
    }

    //get data to the form for update
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM taxi_payment WHERE customer_id = $id") or die($mysqli->error());
        if(count($result)==1){
            $row = $result->fetch_array();
            $name = $row['customer_name'];
            $email = $row['email'];
            $pay = $row['payment'];
        }
    }

    //update date in taxi_payment table
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['customer_name'];
        $email = $_POST['email'];
        $pay = $_POST['payment'];

        $mysqli->query("UPDATE taxi_payment SET customer_name = '$name', email = '$email', payment = '$pay' WHERE customer_id = $id") or
        die ($mysqli->error);

        $_SESSION['message'] = "Record Has been updated!";
        $_SESSION['msg_type'] = "warning";

        header("location: indexTaxi.php");
    }
?>