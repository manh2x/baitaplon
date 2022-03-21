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
<a href="dang_nhap.php">Đăng nhập admin</a> 
<table border=1>;
        <tr>
        <th>ID</th>
        <th>user</th>
        <th>email</th>
        <th>phone_number</th>
        <th>password</th>
         <th><a href=them.php><input type=submit value= Thêm></a></th>
        </tr>
    <?php


$sql="SELECT * from dang_ky";
if($result=mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result)>0){
        // form bangr

        while($row=mysqli_fetch_assoc($result)){
            ?>
          <tr>
           <td> <?php echo $row['id_admin']?></td>
          <td> <?php echo $row['user']?></td>
          <td> <?php echo$row['email']?></td>
          <td> <?php echo $row['phone_number']?></td>
          <td> <?php echo $row['password']?></td>
         <td>
<!--              chọn ID để sủa xóa thông tin và hiện thị khi trỏ chuột vào
 -->           
 <?php echo " <a href='read.php?id=".$row['id_admin']."' title='view recod'><input type=submit value=Read></a>";
          echo " <a href='sua.php?id=".$row['id_admin']."' title='Update recod'><input type=submit value=Update></a>";
           echo " <a href='xoa.php?id=".$row['id_admin']."' title='delete recod'><input type=submit value=Delete></a>";
           ?>
            <a href="search.php"> <input type="submit" value="Search"> </a>
            
         </tr>      

      <?php   }
        
        
        // giải phóng rác thừa
        mysqli_free_result($result);
    }
}
mysqli_close($conn);
    ?>
</body>
</html>