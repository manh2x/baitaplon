
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require_once "ketnoi.php";

    $id=$_GET['id'];
    $sql= "SELECT * from dang_ky where id_admin=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);


?>
<form action="" method="post"  >
       user:<input type="text" name="user"  value="<?php echo $row['user'] ?>" ><br/><br/>
       Email:   <input type="email" name="email" value="<?php echo $row['email'] ?>" ><br/><br/>
       Phone:   <input type="text" name="phone" value="<?php echo $row['phone_number'] ?>" ><br/><br/>
       password:   <input type="text" name="password" value="<?php echo $row['password'] ?>" ><br/><br/>
      <a href="index.php" style="width:50px; height:30px; background-color: gray; color:black; font-size:20px;  font-weight:bold; ">Back</a>
</form>
</body>
</html>