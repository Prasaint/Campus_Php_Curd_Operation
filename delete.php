<?php
include 'db.php';//just added php file to connect to database
$id=$_GET["id"];
$conn->query("DELETE FROM users WHERE id = $id");
header("Location: index.php");//page will redirect to index.php after deleting the record
$conn->close();//close the connection to database
?>