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
   
<form action="" method="post"  >
       user:   <input type="text" name="user" >

       <span namespace="user" style="color: red;"  >
           <?php
if(isset($_POST['user'])){
$user1=$_POST['user'];
if($user1==""){
    echo  "Vui lòng nhập thông tin!";
}
}
 ?>
 </span>
           
           
           <br/><br/>
     Email:   <input type="email" name="email" >
     <span namespace="email" style="color: red;"   >
           <?php

if(isset($_POST['email'])){
$email1=$_POST['email'];
if($email1==""){
    echo  "Vui lòng nhập email!";
}
}
    ?>
          </span><br/><br/>
     Phone:   <input type="text" name="phone" >
     <span namespace="Phone" style="color: red;"   >
           <?php

if(isset($_POST['phone'])){
$phone=$_POST['phone'];
 if($phone==""){
        echo "nhập SĐT";
    }
if($_POST['phone']){ 
if($phone<10 && $phone>10){
    echo $phone="nhâp số băng 10";
}
}
}
    ?>
          </span><br/><br/>
    password:   <input type="password" name="password" >
    <span namespace="password" style="color: red;"   >
           <?php

if(isset($_POST['password'])){
$password1=$_POST['password'];
if($password1==""){
    echo  "Vui lòng nhập password!";
}
}
    ?>
          </span><br/><br/>
          retype password:   <input type="password" name="retype_password" >
    <span namespace="retype_password" style="color: red;">
<?php
if(isset($_POST['retype_password'])){
    $retype_password=$_POST["retype_password"];
    if($retype_password==""){
        echo"nhập retype_password";
    }
    if($_POST['retype_password']){
        if($retype_password!=$password1){
            echo "password không khớp";
        }
    }
}

?>
</span><br/><br/>
    <input type="submit" value=" Thêm " name="them" ><br/><br/>
</form> 
<?php
IF(isset($_POST['them'])){

$user=$_POST['user'];
$phone_number=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
// ấn vào Thêm sẽ gửi thông tin đi nếu đủ yêu cầu
if($_POST['them']){
$sql="INSERT INTO dang_ky_admin(user, email,phone_number,password)
value('$user','$email','$phone_number','$password')";
if(mysqli_query($conn,$sql)){
    
    header('Location: http://localhost:8080/b%c3%a0i%20t%e1%ba%adp%20l%e1%bb%9bn/themsua/');
}
}
}
    ?>
   
</body>
</html>