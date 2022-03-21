<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="select.css">
</head>
<body>
    <h2 align=center>Danh sách đăng ký admin</h2><br/>
    
    <form action="" method="post"  >
       user:   <input type="text" name="user" ><br/><br/>
     Email:   <input type="email" name="email" ><br/><br/>
     Phone:   <input type="text" name="phone" ><input type="text" name="error_phone" style="border: 0;" ><br/><br/>
    password:   <input type="password" name="password" ><br/><br/>
    <input type="submit" value=" Thêm " ><br/><br/>
    
    <?php
    $user=$_POST['user'];
    $phone_number=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn=mysqli_connect('localhost','root','','web_ban_hang');
    // thêm thành viên admin
$sql_admin=" INSERT INTO dang_ky_admin(user,email,phone_number,password)
value('$user','$email','$phone_number','$password')";


    $sql_select="SELECT `id_admin`, `user`, `email`, `phone_number`, `password` FROM `dang_ky_admin` ";
    $result=mysqli_query($conn,$sql_select);
    if(mysqli_num_rows($result)>0){
     
    
        echo "<table width=1000 height=80 border=1 >";
  echo"<tr>
  <td align=center >ID</td>
    <td align=center width=200>user</td>
    <td align=center width=200>email</td>
    <td align=center width=200>phone_number</td>
    <td align=center width=200>password</td>
    <td align=center width=50 colspan=2 >Control</td>
  </tr>";
 
   while($row=mysqli_fetch_assoc($result))
        {
  echo"<tr>
  <td align=center >$row[id_admin]</td>
    <td align=center width=200 >$row[user]</td>
    <td align=center width=200>$row[email]</td>
    <td align=center width=200>$row[phone_number]</td>
    <td align=center width=200>$row[password]</td>
    <td align=center width=200><input type= submit value=sửa></td>
    <td align=center width=200><input type= submit value=xóa></td>
  </tr>";
  

        }
        "</table>";
         ;
    }
     
    else{
        echo"thất bại";
    }
     
    mysqli_close($conn)
    ?>
   
    </form>
    
</body>
</html>