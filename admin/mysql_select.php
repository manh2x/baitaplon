<?php
// kết nối mysql
$conn=mysqli_connect('localhost','root','','web_ban_hang');
$sql_select="SELECT `id_admin`, `user`, `email`, `phone_number`, `password` FROM `dang_ky_admin` ";
$result=mysqli_query($conn,$sql_select);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
    {
        echo"user: ".$row["user"]." -email: ".$row["email"]." -phone_number: ".$row["phone_number"]." -password: ".$row["password"]."<br/>";

    }
}
else{
    echo"thất bại";
}
   
mysqli_close($conn)
?>