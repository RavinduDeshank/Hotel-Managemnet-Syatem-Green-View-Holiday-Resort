<?php
    include 'dbconnection.php';

    $errors = array();
    $success = array();

    if(isset($_POST['signup'])){

        $username = mysqli_real_escape_string($db,$_POST['uname']);
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $nationality = mysqli_real_escape_string($db, $_POST['nationality']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $mnumber = mysqli_real_escape_string($db, $_POST['mnumber']);
        $password1 = mysqli_real_escape_string($db, $_POST['password']);
        $password2 = mysqli_real_escape_string($db, $_POST['repassword']);
        $utype = 'Customer';
        


        if(empty($username) || empty($fname) || empty($lname) || empty($gender) || empty($email) || empty($nationality) || empty($address) || empty($mnumber) || empty($password1) || empty($password2)){
            $errors[] = 'Empty Fields';
        }
        if (!isset($_POST['checkb'])) {
            $errors[] = 'Please Accept Terms and Conditions';
        }
        if (preg_match("/^[0-9]{10}$/", $mnumber) == false) {
            $errors[] = 'Contact Number only can have 10 numbers';
            
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Invalid Email address';
        
        }
        if ($password1 != $password2) {
            $errors[] = "Confirm password doesn't match with password";
            
        }

        if(count($errors) == 0){
            $sql = "INSERT INTO users(uname,fname,lname,ugender,umail,unation,uaddress,unumber,upass,utype) VALUES('$username','$fname','$lname','$gender','$email','$nationality','$address','$mnumber','$password1','$utype')";
            mysqli_query($db,$sql);
            $success[] = 'Registered Successfully';
        }
    
        
    }
?>