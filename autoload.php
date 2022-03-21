
<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
   <style>
	 *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

.main{
	width: 850px;
	height: 600px;
	padding: 15px;
	margin: 30px auto 0;
}
h1{
	text-align: center;
	font-size: 24px;
	margin-bottom: 30px;
}
h3{
	text-align: center;
	margin-bottom: 20px;
}
.nhap{
	width: 55%;
	/*background-color: green;*/
	float: left;
}
.xuat{
	width: 45%;
	/*background-color: red;*/
	float: left;
}
label{
	width: 100px;
	margin-bottom: 20px;
	display: inline-block;
}
input{
	margin-bottom: 10px;
}
button{
	margin: 10px 0 0 90px ; 
}
.thongtinhoadon{
	padding: 10px;
	width: 100%;
	height: 200px;
	border:1px solid #7a6e6e;
}

	</style>
    <div class="main">
		<h1>TÍNH HÓA ĐƠN</h1>
		<form>
			<div class="nhap">
				<label for="mahang">Mã ĐU: </label>
				<input type="text" id="mahang" name="mahang" ><br>
				<label for="tenhang">Tên ĐU: </label>
				<input type="text" id="tenhang" name="tenhang"><br>
				<label for="soluong">Số lượng: </label>
				<input type="text" id="soluong" name="soluong" onkeyup="htthue()"><br>
				<label for="">Đơn giá: </label>
				<input type="text" id="dongia" name="dongia"><br>
				<label for="">Thanh Tiền(VNĐ): </label>
				<input type="text" id="thue" name="thue" disabled><br>
				<button type="button" onclick="inhoadon()">In hóa đơn</button>
			</div>
			<div class="xuat">
				<h3>Thông tin hóa đơn</h3>
				<div class="thongtinhoadon" >
					<p id="htmahang"></p><br>
					<p id="httenhang"></p><br>
					<p id="htthanhtien"></p><br>
				</div>
			</div>
		</form>
	</div>

	<script>
        function inhoadon() {
            var mahang = document.getElementById("mahang").value;
            var tenhang = document.getElementById("tenhang").value;
            var soluong = document.getElementById("soluong").value;
            var dongia = document.getElementById("dongia").value;
            var tinhthue;
            if (mahang == '01')
                tinhthue = 0.1;
            else if (mahang == '02')
                tinhthue = 0.05;
            else tinhthue = 0;
            var str1 = "Mã hàng: " + mahang;
            var str2 = "Tên hàng:  " + tenhang;
            var str3 = "Thành tiền:  " + ((soluong * dongia) );
            document.getElementById("htmahang").innerHTML = str1;
            document.getElementById("httenhang").innerHTML = str2;
            document.getElementById("htthanhtien").innerHTML = str3;
        }

        function htthue() {
            var thue2 = document.getElementById("thue");
            if (soluong.value > "0") thue2.value = (soluong.value * dongia.value)
            
            else thue2.value = "0"
        }
        </script>
</asp:Content>
