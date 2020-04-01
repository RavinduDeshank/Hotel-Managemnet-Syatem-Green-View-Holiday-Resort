<?php
include 'dbconnection.php';
if(isset($_POST['login'])){
    $errors = array();

    $uname = mysqli_real_escape_string($db,$_POST['name']);
    $pass = mysqli_real_escape_string($db, $_POST['pwd']);

    $sql = "SELECT * FROM users WHERE uname='$uname' AND upass='$pass'";
    $result = mysqli_query($db,$sql);

    if($result){
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $usertype = $row['utype'];
            if ($usertype == "Admin") {
                session_start();
                $_SESSION['userid'] = $row['uId'];
                $_SESSION['username'] = $row['uname'];
                header("Location: admin.php");
                exit();
            }

            if ($usertype == "Customer") {
                session_start();
                $_SESSION['userid'] = $row['uId'];
                $_SESSION['username'] = $row['uname'];
                header("Location: userPanel.php");
                exit();
            } 
            
        } else {
            $errors[] = 'No User Found';
        }
    }else{
        $errors[] = 'SQL Error';
    }
    
}

?>