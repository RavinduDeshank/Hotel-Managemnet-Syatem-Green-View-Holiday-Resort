<?php

    session_start();

    $mysqli = new mysqli('localhost','root','','greenview') or die(mysqli_error($mysqli));

    $id = 0;
    $update = false;
    $year = '';
    $income = '';
    $expenses = '';
    $profit = '';

    if(isset($_POST['add'])){
        $year = $_POST['year'];
        $income = $_POST['all_incomes'];
        $expenses = $_POST['all_expences'];
        $profit = $_POST['total_profit'];

        $profit = $income - $expenses;
        $mysqli->query("INSERT INTO final_report (year,all_incomes,all_expences,total_profit) VALUES ('$year','$income','$expenses','$profit')") or
        die($mysqli->error);

        $_SESSION['message'] = "Record Has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: indexFinal.php");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM final_report WHERE year = $id") or die($mysqli->error);

        $_SESSION['message'] = "Record Has been deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location: indexFinal.php");
    }

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM final_report WHERE year = $id") or die($mysqli->error());
        if(count($result)==1){
            $row = $result->fetch_array();
            $year = $row['year'];
            $income = $row['all_incomes'];
            $expenses = $row['all_expences'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $year = $_POST['year'];
        $income = $_POST['all_incomes'];
        $expenses = $_POST['all_expences'];
        $profit = $_POST['total_profit'];

        $profit = $income - $expenses;

        $mysqli->query("UPDATE final_report SET year = '$year', all_incomes = '$income', all_expences = '$expenses' ,  total_profit = '$profit'  WHERE year = $id") or
        die ($mysqli->error);

        $_SESSION['message'] = "Record Has been updated!";
        $_SESSION['msg_type'] = "warning";

        header("location: indexFinal.php");
    }
?>