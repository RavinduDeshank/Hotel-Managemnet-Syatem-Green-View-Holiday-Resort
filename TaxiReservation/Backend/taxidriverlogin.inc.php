<?php
include 'dbconnection.php';
if(isset($_POST['login'])){
    $errors = array();

    $uname = mysqli_real_escape_string($db,$_POST['name']);
    $pass = mysqli_real_escape_string($db, $_POST['pwd']);

    $sql = "SELECT * FROM taxidriver WHERE username='$uname' AND password='$pass'";
    $result = mysqli_query($db,$sql);

    if($result){
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $usertype = $row['user_type'];
            if ($usertype == "taxiDriver") {
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                header("Location: taxidriver.php");
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
