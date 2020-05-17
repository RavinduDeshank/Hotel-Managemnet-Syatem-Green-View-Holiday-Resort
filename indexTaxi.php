<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src = "https://kit.fontawesome.com/b99e675b6e.js"></script>

<title>Taxi Finance Details</title>

<link rel = "stylesheet" href = "assets/css/styles.css">

</head>
<body>
<div class = "wrapper">
    <div class = "sidebar">
        <img class = "imge" src = "assets/img/logo/logo-img.png">
        <h6>All Department Finance Details and Final Overview</h6>
        <ul>
        <!-- link all pages-->
            <li class = "active"><a href = "indexTaxi.php"><i class="fas fa-taxi"></i>Taxi</a></li>
            <li><a href = "indexRoom.php"><i class="fas fa-bed"></i>Room</a></li>
            <li><a href = "indexLaundry.php"><i class="fas fa-bath"></i>Laundry</a></li>
            <li><a href = "indexHall.php"><i class="fas fa-gifts"></i>Hall and Outdoor</a></li>
            <li><a href = "customerBill.php"><i class="far fa-money-bill-alt"></i>Customer Full Payment</a></li>
            <li><a href = "indexEmployee.php"><i class="fas fa-hand-holding-usd"></i>Employee Salary</a></li>
            <li><a href = "indexFinal.php"><i class="fas fa-chart-line"></i>Final Report</a></li>
        </ul>

        <!-- link social media-->
        <div class="social_media">
            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="main_content">
        <div class = "header">Overview of Taxi Finance Management</div>

        <?php require_once 'Backend/taxiIndex.php'; ?>

        <?php
            if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">

                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </div>
            <?php endif ?>        

        <div class ="container">
        <?php
            $mysqli = new mysqli('localhost','root','','greenview') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM taxi_payment") or die($mysqli->error);
        ?>
        <!--create table in application to show inerted date-->
            <div class = "row justify-content-center">
                <div class = "tab">
                <table class="table">
                    <thead>
                        <tr class = "trow">
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Payment</th>
                            <th colspan = "2">Action</th>
                        </tr>
                    </thead>
                    <?php
                    //add row with data and edit,delete buttons
                        while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['customer_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['payment']; ?></td>
                                <td>
                                    <a href = "indexTaxi.php?edit=<?php echo $row['customer_id']; ?>"
                                    class = "btn btn-info">Edit</a>
                                    <a href = "indexTaxi.php?delete=<?php echo $row['customer_id']; ?>"
                                    class = "btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                </table>
                        </div>
            </div>
            
            <div class = "row justify-content-center">
                <div class = "info">

                <?php
                    
                    if(!empty($errors)){
                        echo 'There were errors on your form';
                    }
                ?>
                    <!--create form to insert data-->
                    <form action="" method = "POST">
                        <input type = "hidden" name = "id" value = <?php echo $id; ?>>
                        <div class="form-group">
                            <lable>Customer Name</lable>
                            <input type="text" name = "customer_name" 
                            value ="<?php echo $name; ?>" class = "form-control" placeholder = "Enter Customer Name" required>
                        </div>
                        <div class="form-group">
                            <lable>Email</lable>
                            <input type="text" name = "email" value ="<?php echo $email; ?>" 
                            class = "form-control" placeholder = "Email" pattern = "[^ @]*@[^ @]*" 
                            title = "Please include an '@' in the email address. 'email_address' is missing an '@'" required>
                        </div>
                        <div class="form-group">
                            <lable>Payment</lable>
                            <input type="number" name = "payment" value ="<?php echo $pay; ?>"
                            class = "form-control" placeholder = "Payment" required>
                        </div>
                        <div class="form-group">
                            <?php
                            if($update == true):
                            ?>
                                <button type = "submit" class = "btn btn-info" name = "update">Update</button>
                            <?php else: ?>
                                <button type = "submit" name = "add" class = "btn btn-primary">Add</button>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
                </div> 
            </div>
                        
    </div>
</div>
</body>
</html>