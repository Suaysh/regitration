<?php
include("datasource.php");
$id=$_GET["id"];

$sql="delete from student_tbl where id ='$id' ";
$conn->query($sql);
header("location:viewerecord.php");



?>