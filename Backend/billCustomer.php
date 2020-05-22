<?php

    session_start();

    $mysqli = new mysqli('localhost','root','','greenview') or die(mysqli_error($mysqli));

    $id = 0;
    $update = false;
    $name = '';
    $email = '';
    $tpay = '';
    $rpay = '';
    $lpay = '';
    $hpay = '';
    $tot = '';

    if(isset($_POST['add'])){
        $name = $_POST['customer_name'];
        $email = $_POST['email'];
        $tpay = $_POST['taxi_income'];
        $rpay = $_POST['room_income'];
        $lpay = $_POST['laundry_income'];
        $hpay = $_POST['hall_outdoor_income'];
        $tot = $_POST['total_bill'];

        $tot = $name + $email + $tpay + $rpay + $lpay + $hpay;

        $mysqli->query("INSERT INTO customer_full_payment (customer_name,email,taxi_income,room_income,
        laundry_income,hall_outdoor_income,total_bill) VALUES ('$name','$email','$tpay','$rpay','$lpay','$hpay','$tot')") or
        die($mysqli->error);

        $_SESSION['message'] = "Record Has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: customerBill.php");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM customer_full_payment WHERE customer_id = $id") or die($mysqli->error);

        $_SESSION['message'] = "Record Has been deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location: customerBill.php");
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM customer_full_payment WHERE customer_id = $id") or die($mysqli->error());
        if(count($result)==1){
            $row = $result->fetch_array();
            $name = $row['customer_name'];
            $email = $row['email'];
            $tpay = $row['taxi_income'];
            $rpay = $row['room_income'];
            $lpay = $row['laundry_income'];
            $hpay = $row['hall_outdoor_income'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['customer_name'];
        $email = $_POST['email'];
        $tpay = $_POST['taxi_income'];
        $rpay = $_POST['room_income'];
        $lpay = $_POST['laundry_income'];
        $hpay = $_POST['hall_outdoor_income'];
        $tot = $_POST['total_bill'];

        $tot = $name + $email + $tpay + $rpay + $lpay + $hpay;

        $mysqli->query("UPDATE customer_full_payment SET customer_name = '$name', email = '$email', taxi_income = '$tpay', room_income = '$rpay', laundry_income = '$lpay',
        hall_outdoor_income = '$hpay', total_bill = '$tot' WHERE customer_id = $id") or
        die ($mysqli->error);

        $_SESSION['message'] = "Record Has been updated!";
        $_SESSION['msg_type'] = "warning";

        header("location: customerBill.php");
    }
?>