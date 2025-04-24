<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = "php_curd";
$conn=mysqli_connect($host, $user, $password, $dbname);
if(!$conn){
    die("Connection failed:".$conn->connect_error);
}
?>