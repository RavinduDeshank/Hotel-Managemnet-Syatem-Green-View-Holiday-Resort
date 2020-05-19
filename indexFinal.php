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

<title>Final Report</title>

<link rel = "stylesheet" href = "assets/css/styles.css">

</head>
<body>
<div class = "wrapper">
    <div class = "sidebar">
        <img class = "imge" src = "assets/img/logo/logo-img.png">
        <h6>All Department Finance Details and Final Overview</h6>
        <ul>
            <li><a href = "indexTaxi.php"><i class="fas fa-taxi"></i>Taxi</a></li>
            <li><a href = "indexRoom.php"><i class="fas fa-bed"></i>Room</a></li>
            <li><a href = "indexLaundry.php"><i class="fas fa-bath"></i>Laundry</a></li>
            <li><a href = "indexHall.php"><i class="fas fa-gifts"></i>Hall and Outdoor</a></li>
            <li><a href = "customerBill.php"><i class="far fa-money-bill-alt"></i>Customer Full Payment</a></li>
            <li><a href = "indexEmployee.php"><i class="fas fa-hand-holding-usd"></i>Employee Salary</a></li>
            <li class = "active"><a href = "indexFinal.php"><i class="fas fa-chart-line"></i>Final Report</a></li>
        </ul>

        <div class="social_media">
            <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="main_content">
        <div class = "header">Final Report</div>

        <?php require_once 'Backend/finalIndex.php'; ?>

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
            $result = $mysqli->query("SELECT * FROM final_report") or die($mysqli->error);
        ?>
            <div class = "row justify-content-center">
                <div class = "tab">
                <table class="table">
                    <thead>
                        <tr class = "trow">
                            <th>Year</th>
                            <th>All Incomes</th>
                            <th>All Expenses</th>
                            <th>Total Profit</th>
                            <th colspan = "2">Action</th>
                        </tr>
                    </thead>
                    <?php
                        while($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['year']; ?></td>
                                <td><?php echo $row['all_incomes']; ?></td>
                                <td><?php echo $row['all_expences']; ?></td>
                                <td><?php echo $row['total_profit']; ?></td>
                                <td>
                                    <a href = "indexFinal.php?edit=<?php echo $row['year']; ?>"
                                    class = "btn btn-info">Edit</a>
                                    <a href = "indexFinal.php?delete=<?php echo $row['year']; ?>"
                                    class = "btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                </table>
                        </div>
            </div>
            
            <div class = "row justify-content-center">
                <div class = "info">
                    <form action="" method = "POST">
                        <input type = "hidden" name = "id" value = <?php echo $id; ?>>
                        <div class="form-group">
                            <lable>Year</lable>
                            <input type="text" name = "year" 
                            value ="<?php echo $year; ?>" class = "form-control" placeholder = "Year" required>
                        </div>
                        <div class="form-group">
                            <lable>All Incomes</lable>
                            <input type="number" name = "all_incomes" value ="<?php echo $income; ?>" 
                            class = "form-control" placeholder = "All Incomes" required>
                        </div>
                        <div class="form-group">
                            <lable>All Expenses</lable>
                            <input type="number" name = "all_expences" value ="<?php echo $expenses; ?>"
                            class = "form-control" placeholder = "All Expenses" required>
                        </div>
                        <!-- <div class="form-group">
                            <lable>Total Profit</lable>
                            <input type="number" name = "total_profit" value ="<?php echo $profit; ?>"
                            class = "form-control" placeholder = "Total Profit" required>
                        </div> -->
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