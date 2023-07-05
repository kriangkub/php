<?php 
require('connect.php');
$sql = "SELECT * FROM employees";
$result = mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);

for ($i=0; $i < $count; $i++) { 
    
$row = mysqli_fetch_assoc($result);
echo $row["id"]." ";
echo $row["name"]."<br>";
}
?>