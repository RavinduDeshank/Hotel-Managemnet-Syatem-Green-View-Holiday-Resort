<?php

    session_start();

    $mysqli = new mysqli('localhost','root','','greenview') or die(mysqli_error($mysqli));

    $id = 0;
    $update = false;
    $name = '';
    $email = '';
    $sal = '';

    if(isset($_POST['add'])){
        $name = $_POST['employee_name'];
        $email = $_POST['email'];
        $sal = $_POST['sal'];

        $mysqli->query("INSERT INTO employee_salary (employee_name,email,sal) VALUES ('$name','$email','$sal')") or
        die($mysqli->error);

        $_SESSION['message'] = "Record Has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: indexEmployee.php");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM employee_salary WHERE employee_id = $id") or die($mysqli->error);

        $_SESSION['message'] = "Record Has been deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location: indexEmployee.php");
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM employee_salary WHERE employee_id = $id") or die($mysqli->error());
        if(count($result)==1){
            $row = $result->fetch_array();
            $name = $row['employee_name'];
            $email = $row['email'];
            $sal = $row['sal'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['employee_name'];
        $email = $_POST['email'];
        $sal = $_POST['sal'];

        $mysqli->query("UPDATE employee_salary SET employee_name = '$name', email = '$email', sal = '$sal' WHERE employee_id = $id") or
        die ($mysqli->error);

        $_SESSION['message'] = "Record Has been updated!";
        $_SESSION['msg_type'] = "warning";

        header("location: indexEmployee.php");
    }
?>