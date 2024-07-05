<?php

$server = "localhost";
$username = "asiatel_user";
$password = "password";
$database = "asiatel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
?>