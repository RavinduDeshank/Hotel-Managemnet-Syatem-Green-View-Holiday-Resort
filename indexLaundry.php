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

<title>Laundry Finance Details</title>

<link rel = "stylesheet" href = "assets/css/styles.css">

</head>
<body>
<div class = "wrapper">
    <div class = "sidebar">
        <img class = "imge" src = "assets/img/logo/logo-img.png">
        <h6>All Department Finance Details and Final Overview</h6>
        <ul>
<<<<<<< HEAD
=======
        <!--link all pages-->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
            <li><a href = "indexTaxi.php"><i class="fas fa-taxi"></i>Taxi</a></li>
            <li><a href = "indexRoom.php"><i class="fas fa-bed"></i>Room</a></li>
            <li class = "active"><a href = "indexLaundry.php"><i class="fas fa-bath"></i>Laundry</a></li>
            <li><a href = "indexHall.php"><i class="fas fa-gifts"></i>Hall and Outdoor</a></li>
            <li><a href = "customerBill.php"><i class="far fa-money-bill-alt"></i>Customer Full Payment</a></li>
            <li><a href = "indexEmployee.php"><i class="fas fa-hand-holding-usd"></i>Employee Salary</a></li>
            <li><a href = "indexFinal.php"><i class="fas fa-chart-line"></i>Final Report</a></li>
        </ul>

<<<<<<< HEAD
=======
    <!--link social media-->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
        <div class="social_media">
            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="main_content">
        <div class = "header">Overview of Laundry Finance Management</div>

        <?php require_once 'Backend/laundryIndex.php'; ?>

        <?php
            if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">

                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </div>
            <?php endif ?>        

<<<<<<< HEAD
=======
        <!--create table in the application to show inserted data-->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
        <div class ="container">
        <?php
            $mysqli = new mysqli('localhost','root','','greenview') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM laundry_payment") or die($mysqli->error);
        ?>
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
                        while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['customer_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['payment']; ?></td>
                                <td>
                                    <a href = "indexLaundry.php?edit=<?php echo $row['customer_id']; ?>"
                                    class = "btn btn-info">Edit</a>
                                    <a href = "indexLaundry.php?delete=<?php echo $row['customer_id']; ?>"
                                    class = "btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                </table>
                        </div>
            </div>
            
<<<<<<< HEAD
=======
            <!--create form to insert data-->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
            <div class = "row justify-content-center">
                <div class = "info">
                    <form action="" method = "POST">
                        <input type = "hidden" name = "id" value = <?php echo $id; ?>>
                        <div class="form-group">
                            <lable>Customer Name</lable>
                            <input type="text" name = "customer_name" 
<<<<<<< HEAD
                            value ="<?php echo $name; ?>" class = "form-control" placeholder = "Enter Customer Name" required>
=======
                            value ="<?php echo $name; ?>" class = "form-control" placeholder = "Enter Customer Name" 
                            maxlength = "40"
                            pattern="[A-Za-z]{1,255}" value = "'.$_SESSION['customer_name'].'" required>
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
                        </div>
                        <div class="form-group">
                            <lable>Email</lable>
                            <input type="text" name = "email" value ="<?php echo $email; ?>" 
<<<<<<< HEAD
                            class = "form-control" placeholder = "Email" pattern = "[^ @]*@[^ @]*" required>
=======
                            class = "form-control" placeholder = "Email" pattern = "[^ @]*@[^ @]*" 
                            title = "Please include an '@' in the email address. 'email_address' is missing an '@'" required>
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
                        </div>
                        <div class="form-group">
                            <lable>Payment</lable>
                            <input type="number" name = "payment" value ="<?php echo $pay; ?>"
<<<<<<< HEAD
                            class = "form-control" placeholder = "Payment" required>
=======
                            class = "form-control" placeholder = "Payment" min = "1" required>
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
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