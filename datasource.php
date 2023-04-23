<?php
$server="localhost";
$username="root";
$password="";
$dbname="snjbworkshop";

$conn=new mysqli($server,$username,$password,$dbname);

if($conn!=true){
    echo "error";
}
else{
    echo"<h2>connected<h2>";

}
