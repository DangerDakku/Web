<?php

$con = mysqli_connect("localhost","root","1234","ecommerce") or die(mysqli_error($con));
$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Email = $_POST['emailid'];
$Password = $_POST['password'];

$user_registration = "insert into user(Firstname,Lastname,Email,Pass) values('$Firstname','$Lastname','$Email','$Password')";
$user_submit = mysqli_query($con, $user_registration) or die(mysqli_error($con));
echo 'sucessfully inserted';

