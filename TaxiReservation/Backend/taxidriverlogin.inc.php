<?php
<<<<<<< HEAD
include 'dbconnection.php';
=======
/*connect to the database*/
include 'dbconnection.php';

/*taxi driver login process*/
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
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
<<<<<<< HEAD
=======

            /*if usertype is taxi driver navigate to the taxi driver panel*/
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
            if ($usertype == "taxiDriver") {
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                header("Location: taxidriver.php");
                exit();
            }

           
<<<<<<< HEAD
            
        } else {
            $errors[] = 'No User Found';
        }
=======
        /*if login credentials does not match: display an error message*/   
        } else {
            $errors[] = 'No User Found';
        }
    
    /*if there are errors in the sql: display an error message*/      
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    }else{
        $errors[] = 'SQL Error';
    }
    
}

?>
