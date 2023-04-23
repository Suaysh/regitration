<?php
include('datasource.php');
$fname=$_POST['fname'];
$email=$_POST['mail'];
$password=$_POST['pass'];
$address=$_POST['add'];
$phone=$_POST['number'];
$gender=$_POST['gender'];
$id=$_POST['id'];
$sql="UPDATE `student_tbl` SET `id`='[value-1]',`name`='$fname',`email`='$email',`password`='$password',`address`='$address',`mobile`='$phone',`gender`='$gender' WHERE id='$id'";
$conn->query($sql);
echo "record  updated..........";

?>