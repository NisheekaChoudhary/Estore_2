<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);

$message = $_POST['message'];
$message = mysqli_real_escape_string($con, $message);

$query = "SELECT email FROM contact_us WHERE email ='" . $email . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$reg_email = $row['email'];

if ($reg_email == $email) {
    header('location: contact.php?error=Already submitted your Feedback');
} else {
       $query = "INSERT INTO contact_us(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
       mysqli_query($con, $query) or die(mysqli_error($con));
}