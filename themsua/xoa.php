<?php
require_once "ketnoi.php";
// dùng $_GET['id'] để lấy id mk đặt và hiện thị lên url
$id=$_GET['id'];
$sql="DELETE from dang_ky where id_admin=$id";
$result=mysqli_query($conn,$sql);
header('Location: http://localhost:8080/b%c3%a0i%20t%e1%ba%adp%20l%e1%bb%9bn/themsua/');
?>