<?php
include('datasource.php');
$fname=$_POST['fname'];
$email=$_POST['mail'];
$password=$_POST['pass'];
$address=$_POST['add'];
$phone=$_POST['number'];
$gender=$_POST['gender'];

$sql="INSERT INTO `student_tbl`(`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`) VALUES ('null','$fname','$email','$password','$address','$phone','$gender')";
echo $sql;
$conn->query($sql);

header("location:viewerecord.php");
//echo $fname."",$email."",$password."",$address."",$phone."",$gender."";
?> 