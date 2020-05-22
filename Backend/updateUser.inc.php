<?php

    if(isset($_POST['addCustomer'])){

        require 'dbconnection.php';

        
        $username = mysqli_real_escape_string($db,$_POST['uname']);
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $gender = mysqli_real_escape_string($db, $_POST['ugender']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $nationality = mysqli_real_escape_string($db, $_POST['nationli']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $mnumber = mysqli_real_escape_string($db, $_POST['unumber']);
        $u_id = mysqli_real_escape_string($db,$_POST['userid']);
        $utype = 'Customer';

        // if(empty($username)||empty($fname)||empty($lname)||empty($gender)||empty($mnumber)||empty($address)||empty($email)||empty($nationality)){
        //     header("Location: ../userdetails.php?error=emptyFields&uname=".$username."&ugender=".$gender."&unumber=".$mnumber."&address=".$address."&email=".$email."&nationality=".$nationality."&uId=".$u_id."&fname=".$fname."&lname=".$lname);
        //     exit();
        // }

        if(!preg_match("/^\d{10}+$/",$mnumber)){
            header("Location: ../userdetails.php?error=invalidmobile&uname=".$username."&unumber=".$mnumber."&email=".$email."&address=".$address."&uId=".$u_id."&fname=".$fname."&lname=".$lname."&ugender=".$gender."&nationality=".$nationality);
            exit();
        }
        
       
        $Sql = "SELECT uname FROM users WHERE uname=? AND uId !={$u_id}";
        $smt = mysqli_stmt_init($db);

        if(!mysqli_stmt_prepare($smt,$Sql)){
            header("Location: ../userdetails.php?error=SQLError1");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($smt,"s",$username);
            mysqli_stmt_execute($smt);
            mysqli_stmt_store_result($smt);
            $checkResult = mysqli_stmt_num_rows($smt);
            
            if($checkResult > 0){
                header("Location: ../userdetails.php?error=CustomerTaken&uname=".$username."&unumber=".$mnumber."&email=".$email."&address=".$address."&uId=".$u_id);
            exit();
            }
            else{
                $Sql = "UPDATE users SET uname=?,fname=?,lname=?,unumber=?,ugender=?,umail=?,uaddress=?,unation=? WHERE uId= {$u_id} ";
                $smt2 = mysqli_stmt_init($db);

                if(!mysqli_stmt_prepare($smt2,$Sql)){
                    header("Location: ../userdetails.php?error=SQLError2");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($smt2,"ssssssss",$username,$fname,$lname,$mnumber,$gender, $email,$address, $nationality);
                    $result = mysqli_stmt_execute($smt2);

                    if($result){
                        header("Location : ../UserPanel.php&Update=Success");
                        exit();
                    }else{
                        header("Location: ../userdetails.php?error=SQLError3");
                        exit();
                    }
                    
                }

            

        }

        mysqli_stmt_close($smt);
        mysqli_close($db);


    }
    }

?>