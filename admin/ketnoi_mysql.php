<?php
$user=$_POST['user'];
$phone_number=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
// đăng ký thành viên:
$user1=$_POST['user1'];
$phone_number1=$_POST['phone1'];
$email1=$_POST['email1'];
$address=$_POST['address'];
$password1=$_POST['password1'];
// kết nối mysql
$conn=mysqli_connect('localhost','root','','web_ban_hang');
// thêm thành viên admin
$sql_admin=" INSERT INTO dang_ky_admin(user,email,phone_number,password)
value('$user','$email','$phone_number','$password')";
//thêm thành viên khách hàng
$sql_member=" INSERT INTO dang_ky_member(fullname,email,tel,address,password)
value('$user1','$email1','$phone_number1','address','$password1')";
// kiểm tra đăng ký admin
if(mysqli_query($conn,$sql_admin)){
    header('Location: http://localhost:8080/b%c3%a0i%20t%e1%ba%adp%20l%e1%bb%9bn/admin/hi%e1%bb%87n%20th%e1%bb%8b%20select.php');
}
//kiểm tra đăng ký thành viên
$member=$conn->query($sql_member);
if($member==true){
    echo"<br/><br/>đăng ký thành viên  khách hàng thành công";
}
else{
    echo"<br/><br/>đăng ký thành viên  khách hàng Thất bại";
}

   
mysqli_close($conn)
?>