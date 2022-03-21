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
    if(isset($_POST['Back'])){
        header('Location: http://localhost:8080/b%c3%a0i%20t%e1%ba%adp%20l%e1%bb%9bn/themsua/'); 
       
    }
     
    if(isset($_POST['login'])){
        $user=$_POST['user'];
        $password=$_POST['password'];
        
        $sql="SELECT * from dang_ky_admin where user='$user' and password='$password'";
$result= mysqli_query($conn,$sql)->fetch_array();
        if($result==TRUE){
        header('Location: http://localhost:8080/b%c3%a0i%20t%e1%ba%adp%20l%e1%bb%9bn/themsua/error.php');
        }
        if($result==false){
            $a="bạn nhập sai user hoặc password !!!";
        }
      
    }
    mysqli_close($conn)
    ?>
    <form method="post" action="">
    <span style="color: red;"> <?php if(isset($_POST['login'])){ 
   
   echo $a;
   
}  ?></span><br/><br/>
user: <input type="text" name="user"> <span style="color: red;"> <?php if(isset($_POST['login'])){ 
   $user=$_POST['user'];
   
   if($user==""){
       echo" vui lòng nhập thông tin";
   } 
  
   
}  ?></span><br/><br/>
password: <input type="password" name="password">
<span style="color: red;"> 
<?php if(isset($_POST['login'])){  $password=$_POST['password'];if($password==""){ echo" vui lòng nhập thông tin"; } }  ?>
</span> <br/><br/>
<input type="submit" name="Back" value="Back"><input type="submit" name="login" value="LOGIN">

    </form>
    
</body>
</html>