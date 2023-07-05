<?php
require('connect.php');

$id = $_POST["id"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$title =  $_POST["title"];

$name = $title.$fname." ".$lname;

$sql = "INSERT INTO employees(id,name) VALUES('$id','$name')";

$result = mysqli_query($connect,$sql);
if($result){
    echo "Success";
}else{
    echo mysqli_error($connect);
}
?>