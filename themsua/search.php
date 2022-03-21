<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <a href="index.php"><input type="submit" name="" value="Black"></a>
  <table border="1" cellpadding="3" cellspacing="3">
    <tr>
        <th>ID</th>
        <th>Uers</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Password</th>
        <th>Option</th>
</tr>
    <form method="post" action="">
<input type="text" name="share" placeholder="nhap ten tim"> 
    <input type="submit" name="search" value="search"> 
</form>
    <?php 
require "./ketnoi.php";
    if(isset($_POST['search'])){
       

        $s=$_POST['share'];
        if($s==""){
            echo "vui long nhap thong tin";
        }
        else{
             $sql="SELECT * from dang_ky where phone_number='$s'";
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
 -->           <?php echo " <a href='read.php?id=".$row['id_admin']."' title='view recod'><input type=submit value=Read></a>";
          echo " <a href='sua.php?id=".$row['id_admin']."' title='Update recod'><input type=submit value=Update></a>";
          
           ?>
<?php

}
}
}
                
             
        //    if($s!= $row['phone_number']){
        //         echo"Không tìm thấy".$s;    
        //                 }
        }
    } 
mysqli_close($conn);

    ?>
</table>
</body>
</html>