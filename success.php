<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Success | E Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include 'includes/header.php';
            include 'includes/login.php';
        ?>
        <div class="container-fluid" id="success-container">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center"><b>Your order is confirmed.</b><br> Thank you for ordering from E-Store. The order shall be delivered to you shortly.</h3><hr>
                    <p align="center">Order some more electronic items<a href="home.php"> here</a>.</p>
                </div>
            </div>
        </div>
    </body>
</html>