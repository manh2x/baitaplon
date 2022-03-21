<!-- //kết nối với trang ketnot database -->
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

        <table width=1000 height=80 border=1 >
  <tr>
  <td align=center >ID</td>
    <td align=center width=200>user</td>
    <td align=center width=200>email</td>
    <td align=center width=200>phone_number</td>
    <td align=center width=200>password</td>
    <td align=center width=50 colspan=3 >Control</td>
  </tr>
 
 <?php
 $sql_select="SELECT * FROM dang_ky_admin";
    $result=mysqli_query($conn,$sql_select);
     while($row=mysqli_fetch_assoc($result))
        {
     ?>
    
  
  <tr>
  <td align=center ><?php echo $row['id_admin']?></td>
    <td align=center width=200 ><?php echo $row['user']?></td>
    <td align=center width=200><?php echo $row['email']?></td>
    <td align=center width=200><?php echo $row['phone_number']?></td>
    <td align=center width=200><?php echo $row['password']?></td>
    <td align=center width=200><a href="them.php"><input type= submit value=Thêm></a></td>
    <td align=center width=200><a href="sua.php"><input type= submit value=sửa></a></td>
    <td align=center width=200><a href="xoa.php" ><input type= submit value=xóa></a></td>
  </tr>
  

        
        <?php }?>
        </table>;
         
    
    
</body>
</html>