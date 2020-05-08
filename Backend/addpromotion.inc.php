<?php

    include 'dbconnection.php';
    $errors = array();
    $success = array();
    if(isset($_POST['addpromo'])){

        $promoname = mysqli_real_escape_string($db,$_POST['pname']);
        $ptitle = mysqli_real_escape_string($db, $_POST['title']);
        $pstart = mysqli_real_escape_string($db, $_POST['promostart']);
        $pend = mysqli_real_escape_string($db, $_POST['promoend']);
        $pdesc = mysqli_real_escape_string($db, $_POST['description']);

        if(empty($promoname) ||empty($ptitle) ||empty($pstart) ||empty($pend)){
            $errors[] = 'Fields are empty';
            
        }
        if($pstart > $pend){
            $errors[] = 'End date must be future date from Start date';
        }

        if(count($errors) == 0){
            $sql = "INSERT INTO promotion(pname,pTitle,pStartDate,pEndDate,Descrip) VALUES('$promoname','$ptitle','$pstart','$pend','$pdesc')";
            $result = mysqli_query($db, $sql);
            if ($result) {
                $success[] = 'Promotion Added Successfully';
            }

        }

        
    }

?>
