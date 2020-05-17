<?php
   

    if(isset($_POST[''])){

        require 'dbconnection.php';

        
        $username = mysqli_real_escape_string($db,$_POST['uname']);
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $nationality = mysqli_real_escape_string($db, $_POST['nationality']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $mnumber = mysqli_real_escape_string($db, $_POST['mnumber']);
        $u_id = mysqli_real_escape_string($con,$_POST['uId']);
        $utype = 'Customer';

        if(empty($username)||empty($fname)||empty($lname)||empty($gender)||empty($mnumber)||empty($address)||empty($email)||empty($nationality)){
            header("Location: ../userPanel.php?error=emptyFields&uname=".$username."&gender=".$gender."&mnumber=".$mnumber."&address=".$address."&email=".$email."&nationality=".$nationality."&uId=".$u_id);
            exit();
        }

        else if(!preg_match("/^\d{10}+$/",$mnumber)){
            header("Location: ../userPanel.php?error=invalidmobile&uname=".$username."&mnumber=".$mnumber."&email=".$email."&address=".$address."&uId=".$u_id);
            exit();
        }
        
       
        $Sql = "SELECT uname FROM users WHERE uname=? AND uId !={$u_id}";
        $smt = mysqli_stmt_init($con);

        if(!mysqli_stmt_prepare($smt,$Sql)){
            header("Location: ../userPanel.php?error=SQLError");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($smt,"s",$username);
            mysqli_stmt_execute($smt);
            mysqli_stmt_store_result($smt);
            $checkResult = mysqli_stmt_num_rows($smt);
            
            if($checkResult > 0){
                header("Location: ../userPanel.php?error=CustomerTaken&uname=".$username."&mnumber=".$mnumber."&email=".$email."&address=".$address."&uId=".$u_id);
            exit();
            }
            else{
                $Sql = "UPDATE users SET uname=?,fname=?,lname=?,mnumber=?,gender=?,email=?,address=?,nationality=? WHERE uId= {$u_id} ";
                $smt = mysqli_stmt_init($con);

                if(!mysqli_stmt_prepare($smt,$Sql)){
                    header("Location: ../Customer/CustomerDetails.php?error=SQLError");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($smt,"sssssss",$username,$mnumber,$email,$gender,$nationality,$address,$fname,$lname);
                    mysqli_stmt_execute($smt);
                    header("Location: ../userPanel.php?Update=Success");
                    exit();
                }

            }

            

        }

        mysqli_stmt_close($smt);
        mysqli_close($con);


    }

    else{
        header("Location: ../userPanel.php");
        exit(); 
    }

?>