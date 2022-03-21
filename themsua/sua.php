<?php
require "ketnoi.php";
?>
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
require "ketnoi.php";
 // lấy id trên urel để truyền vào where
    $id=$_GET['id'];

 
 $sql_select="SELECT * FROM dang_ky where id_admin=$id";
    $result=mysqli_query($conn,$sql_select);
    $row=mysqli_fetch_assoc($result);
 
       
     ?>
    <form action="" method="post"  >
       user:   <input type="text" name="user" value=" <?php echo $row['user']; ?>" ><br/><br/>
     Email:   <input type="email" name="email" value=" <?php echo $row['email']; ?>" ><br/><br/>
     Phone:   <input type="text" name="phone" value=" <?php echo $row['phone_number']; ?>" ><br/><br/>
    password:   <input type="password" name="password" value=" <?php echo $row['password']; ?>" ><br/><br/>
    <input type="submit" value=" Sửa " name="sua" ><br/><br/>
   
</form>
<?php
IF(isset($_POST['sua'])){

$user=$_POST['user'];
$phone_number=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
// ấn vào Thêm sẽ gửi thông tin đi nếu đủ yêu cầu
if($_POST['sua']){
$sql="UPDATE dang_ky SET user='$user',email='$email',phone_number='$phone_number',password='$password' where id_admin=$id";
if(mysqli_query($conn,$sql)){
    
    header('Location: http://localhost:8080/b%c3%a0i%20t%e1%ba%adp%20l%e1%bb%9bn/themsua/');
}
}
}
    ?>
</body>
</html>