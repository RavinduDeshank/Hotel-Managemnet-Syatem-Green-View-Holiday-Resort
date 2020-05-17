<?php
/*connect to the database*/
include 'dbconnection.php';

/*login process of taxi manager and customer*/
if(isset($_POST['login'])){
    $errors = array();

    $uname = mysqli_real_escape_string($db,$_POST['name']);
    $pass = mysqli_real_escape_string($db, $_POST['pwd']);

    $sql = "SELECT * FROM taxicustomer WHERE username='$uname' AND password='$pass'";
    $result = mysqli_query($db,$sql);

    if($result){
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $usertype = $row['user_type'];

            /*if usertype is taxi manager navigate to the taxi manager panel*/
            if ($usertype == "taxiManager") {
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                header("Location: taximanager.php");
                exit();
            }

            /*if usertype is taxi customer display the reservation done*/
            if ($usertype == "taxiCustomer") {
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                header("Location: viewtaxi.php");
                exit();
            } 
          
        /*if login credentials does not match: display an error message*/  
        } else {
            $errors[] = 'No User Found';
        }

    /*if there are errors in the sql: display an error message*/
    }else{
        $errors[] = 'SQL Error';
    }
    
}

?>
