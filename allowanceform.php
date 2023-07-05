<?php 
require('connect.php');
$sql = "SELECT * FROM employees";
$result = mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>ข้อมูลพนักงาน</title>
</head>

<body>
    <div class="container">
        <h2>บันทึกข้อมูล</h2>
        <form action="allowancedata.php" method="post">
            <div class="form-group">
                <label for="id">ไอดีพนักงงาน</label>
                <input type="text" name="id" id="" class="form-control" required>
            </div><br>

            <div class="form-group">
                <label for="title">คำนำหน้า</label>
                <input type="radio" name="title" id="" value="นาย" required>นาย
                <input type="radio" name="title" id="" value="นาง" required>นาง
                <input type="radio" name="title" id="" value="นางสาว" required>นางสาว
            </div><br>
            <div class="form-group">
                <label for="firstname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="lastname">นามสุกล</label>
                <input type="text" name="lname" id="" class="form-control" required>
            </div><br>
            <input type="submit" value="บันทึก" class="btn btn-success">
            <input type="reset" value="รีเซ็ต" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">Home</a>
        </form>
    </div><br>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                </tr>

            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <td><?php echo $row["id"]." "?></td>
                    <td><?php echo $row["name"]?></td>
                </tr>
                <?php }?>
                <tr>
                    <td>as</td>
                </tr>
            </tbody>


        </table>
    </div>



</body>

</html>