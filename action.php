<?php 
$fristName = $_POST['name'];
$lastName = $_POST['surname'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$password = $_POST['password'];

header("Location:myaccount.php?fname=$fristName&&lname=$lastName&&email=$email");
?>