<?php

include 'dbconnection.php';
$errors = array();
$success = array();

    if(isset($_POST['addlaundry'])){

        $cusname = mysqli_real_escape_string($db,$_POST['name']);
        $roomNo = mysqli_real_escape_string($db, $_POST['roomno']);
        $cloweight = mysqli_real_escape_string($db, $_POST['Weight']);
        $datein = mysqli_real_escape_string($db, $_POST['start']);
        $dateout = mysqli_real_escape_string($db, $_POST['end']);
        $description = mysqli_real_escape_string($db, $_POST['description']);


        if (empty($cusname) || empty($roomNo) || empty($cloweight) || empty($datein) || empty($dateout)) {
            $errors[] = 'Fields are empty';
        }
        if ($datein > $dateout) {
            $errors[] = 'End date must be future date from Start date';
        }

        if (count($errors) == 0) {
            $sql = "INSERT INTO laundry(Customer_Name,Room_No,Clothes_Weight,Start_Date,End_Date,Description) VALUES('$cusname','$roomNo','$cloweight','$datein','$dateout','$description')";
            $result = mysqli_query($db, $sql);
            if ($result) {
                $success[] = 'Laundry Details Added Successfully';
            }
        }

    }







?>