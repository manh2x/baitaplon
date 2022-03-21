<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="laptop.css" />

</head>

<body>
    <header>
        <div class="logo">
            <img src="images/bender/mẫu7.jfif" width="250px" height="70px">
        </div>
        <div class="menu">
            <li><a href="laptop.php">  LapTop</a>
                <ul class="submenu">
                    <li><a href="#">Hãng Sản xuất</a>
                        <ul>
                            <li><a href="#">Macbook</a></li>
                            <li><a href="#">HP</a></li>
                            <li><a href="sanphamdell.php">Dell</a></li>
                            <li><a href="#">lenovo</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Phần mềm</a>
                        <ul>
                            <li><a href="#">Diệt virus</a></li>
                            <li><a href="#">Microsoft office</a></li>
                            <li><a href="#">windows</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#">máy in</a>
                        <ul>
                            <li><a href="#">HP</a></li>
                            <li><a href="#">Canon</a></li>
                            <li><a href="#">Brother</a></li>

                        </ul>
                    </li>
                </ul>

            </li>
            <li><a href="#">Apple</a>
                <ul class="submenu">
                    <li><a href="">Apple watch</a></li>
                    <li><a href="">iphone</a></li>
                    <li><a href="">ipad</a></li>
            </li>
            </ul>
            <li><a href="#">PC</a>
                <ul class="submenu">
                    <li><a href="">PC</a>
                        <ul>

                            <li><a href="#">HP</a></li>
                            <li><a href="#">Dell</a></li>
                            <li><a href="#">lenovo</a></li>
                        </ul>
                    </li>
                    <li><a href="">Giá </a>
                        <ul>
                            <li><a href="#">dưới 5tr</a></li>
                            <li><a href="#">5tr - 10tr</a></li>
                            <li><a href="#">trên 0tr</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Sale</a>
                <ul class="submenu">
                    <li><a href="#">Tất cả KM</a></li>
                </ul>
            </li>
            <li><a href="#">Phụ kiện</a>
                <ul class="submenu">
                    <li><a href="">Laptop</a></li>
                    <li><a href="">PC</a></li>
                    <li><a href="">Apple</a></li>
                </ul>
            </li>
            <li><a href="#">Máy cũ giá rẻ</a></li>
            <li><a href="#">Trả góp 0 %</a></li>

        </div>
        <div class="other">
            <li><input type="text" class="seach-txt" placeholder="tìm kiếm " border="0">

                <i class="fas fa-search"></i></li>
            <li> <i class="fas fa-home">
                <ul class="home">
                    <li><a href="giao diện chinh.php">Trang chủ</a></li>
                    <li><a href="đăng ký.php">Đăng ký </a></li>
                    <li><a href="">Đăng nhập</a></li>
                    <li><a href="">Thanh toán</a></li>
                </ul>
            </i>
            <li><i class="fas fa-shopping-cart"></i></li>


        </div>
    </header>
    <!-- laptop -->
    
    <section id="laptop">
    <div class="nd-top">
                <p><a href="giao diện chinh.php"> Trang chủ</a></p><span>&#10230;</span> <p><a href="laptop.php"> Laptop</a></p>
            </div>
        <div class="trai">
            <p>Hãng sãn xuất</p><br>
            <div class="trai1">
            <a href=""> <input type="checkbox" name="checktc" id="Tất Cả"> Tất Cả</a><br><br>
               <a href="sanphamdell.php"> <input type="checkbox" name="checkdell" id="checkdell"> Dell</a><br><br>
               <a href=""> <input type="checkbox" name="checkhp" id="checkhp"> HP</a><br><br>
                <input type="checkbox" name="checkmacbook" id="checkmacbook"> Macbook<br><br>
                <input type="checkbox" name="checklenovo" id="checklenovo"> Lenovo<br><br>
            </div>
<p>Mức giá</p><br/>
<div class="trai2">
<a href=""> <input type="checkbox" name="checktc" id="checktc" value="Tất Cả"> Tất Cả</a><br><br>
                <input type="checkbox" name="check5tr" id="check5tr"> Từ 5tr - 10tr<br><br>
                <input type="checkbox" name="check15tr" id="check15tr"> Từ 10tr - 15tr<br><br>
                <input type="checkbox" name="check25tr" id="check25tr"> Từ 15tr - 25tr<br><br>
                <input type="checkbox" name="checktren" id="checktren"> trên 25 triệu<br><br>
            </div>
            <p>Màn Hình</p><br/>
<div class="trai3">
<a href=""> <input type="checkbox" name="checktc" id="checktc" value="Tất Cả"> Tất Cả</a><br><br>
                <input type="checkbox" name="check15inh" id="check15inh"> Khoảng 15 inch<br><br>
                <input type="checkbox" name="check14inh" id="check14inh"> Khoảng 13 inch<br><br>
                <input type="checkbox" name="check13inh" id="check13inh"> Khoảng 14 inch<br><br>
               
            </div>
            <p>RAM</p><br/>
<div class="trai2">
<a href=""> <input type="checkbox" name="checktc" id="checktc" value="Tất Cả"> Tất Cả</a><br><br>
                <input type="checkbox" name="check4g" id="check4g"> RAM 4GB<br><br>
                <input type="checkbox" name="check8g" id="check8g"> RAM 8GB<br><br>
                <input type="checkbox" name="check16g" id="check16g"> RAM 16GB <br><br>
                <input type="checkbox" name="check32g" id="check32g">RAM 32GB<br><br>
            </div>
            <p>Nhu cầu</p><br/>
<div class="trai2">
<a href=""> <input type="checkbox" name="checktc" id="checktc" value="Tất Cả"> Tất Cả</a><br><br>
                <input type="checkbox" name="checkgame" id="checkgame"> Gaming đồ họa<br><br>
                <input type="checkbox" name="checkit" id="checkit"> Lập trình<br><br>
                <input type="checkbox" name="checkdn" id="checkdn"> doanh nghiệp <br><br>
                <input type="checkbox" name="checkvp" id="checkvp">văn phòng<br><br>
            </div>
        </div>
        <div class="phai-tren">
            <div class="total">
                Laptop
            </div>
            <div class="nhanhieu">
                <img src="images/thuong hieu/macbook.jpg">
                <a href="thương hiệu/dell.php"><img src="images/thuong hieu/dell.jpg"></a>
                <img src="images/thuong hieu/asus.jpg">
                <img src="images/thuong hieu/hp.jfif">
                <img src="images/thuong hieu/lenovo.jpg">
            </div>
            
        </div>
       <div class="phai-duoi">
            <div class="nhucau">
               Laptop theo nhu cầu
            </div>
            <div class="loaimay">
              <a href="sanpham.php"> <img src="images/thuong hieu/game.jfif"></a>
               <a href=""> <img src="images/thuong hieu/doanh nhân.jfif"> </a>
               <a href=""> <img src="images/thuong hieu/sinhvien.jfif"> </a>
               <a href=""> <img src="images/thuong hieu/mỏng.jfif"> </a>
               <a href=""> <img src="images/thuong hieu/văn phòng.jfif"> </a>
               <a href=""> <span>Game </span></a>
               <a href=""> <span>Doanh nhân </span> </a> 
               <a href=""> <span>Sinh viên </span> </a>
               <a href=""> <span>Mỏng nhẹ </span></a>
               <a href="">  <span>Văn Phòng </span></a>
            </div>
            
       </div>
    
    <div id="sanpham">
        <div class="danhmuc">
            <div class="sp">
                <a href="">
                    <img src="images/dell/dell2.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            <div class="sp">
                <a href="">
                    <img src="images/dell/dell3.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            <div class="sp">
                <a href="">
                    <img src="images/dell/dell4.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
        </div>
            <div class="danhmuc1">
            <div class="sp">
                <a href="">
                    <img src="images/dell/dell5.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            <div class="sp">
                <a href="">
                    <img src="images/dell/dell6.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            <div class="sp">
                <a href="">
                    <img src="images/dell/dell7.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            </div>
            <div class="danhmuc2">
            <div class="sp">
                <a href="">
                    <img src="images/dell/dell8.jfif">
                    <h1>Dell 2</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            <div class="sp">
                <a href="">
                    <img src="images/dell/dell9.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            <div class="sp">
            <a href="">
                    <img src="images/macbook/book3.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            </div>
            <div class="danhmuc3">
            <div class="sp">
            <a href="">
                    <img src="images/macbook/book4.jfif">
                    <h1>Dell 1</h1>
                    <p>10.000.000 <sup>đ</sup></p>
                </a>
            </div>
                
            <div class="sp">
                <a href="">
                    <img src="images/macbook/book1.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>
            <div class="sp">
                <a href="">
                    <img src="images/macbook/book2.jfif">
                    <h1>Dell 1</h1>
                    <p>15.000.000 <sup>đ</sup></p>
                </a>
            </div>

        </div>
        </div> 
    </section>
    
    <!-- /* cuối   */ -->
    <section class="app-container">
        <p>Tải ứng dụng</p>
        <div class="google">
            <a><img src="images/bender/googleplay1.png"></a>
            <a> <img src="images/bender/appstore.png"></a>
        </div>
        <p>Nhập Bản tin</p>
        <input type="text" placeholder="nhập email...">
    </section>

    <footer>
        <div class="footer-top">
            <li>
                <a href="#"><img src="https://pubcdn.ivymoda.com/images/dathongbao.png"></a>
            </li>
            <li><a href="">Liên Hệ</a></li>
            <li><a href="">Tuyển dụng</a></li>
            <li><a href="">Giới thiệu</a></li>
            <li>
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-facebook-messenger"></i></a>
                <a href=""><i class="fas fa-laptop"></i></a>
            </li>

        </div>
    </footer>
    <div class="footer-bottom">
        manh11031998@gmail.com
    </div>
</body>
<script>
    /* code header khi kéo xuống sẽ đổi background*/
    const header = document.querySelector("header")
    window.addEventListener("scroll", function() {
            x = window.pageYOffset
            if (x > 0) {
                header.classList.add("sticky")
            } else {
                header.classList.remove("sticky")
            }
        })
        /* kết thúc phần*/
        // div 5 ảnh 1 lúc
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector(".aspect-ratio-169")
    let index = 0
    const dotitem = document.querySelectorAll(".dot")
    let imgnumber = imgPosition.length
    imgPosition.forEach(function(image, index) {
        image.style.left = index * 100 + "%"
        dotitem[index].addEventListener("click", function() {
            slider(index)
        })
    })

    function imgSlide() {
        index++;
        console.log(index)
        if (index >= imgnumber) {
            index = 0
        }
        slider(index)
    }

    function slider(index) { //code kích chuột vào tròn chuyển ảnh
        imgContainer.style.left = "-" + index * 100 + "%"
        const dotActiver = document.querySelector(".activer") // dậm vào tròn mới xóa cũ đi
        dotActiver.classList.remove("activer")
        dotitem[index].classList.add("activer") // chấm dậm chỗ đó ảnh khi chuyển
    }
    setInterval(imgSlide, 5000) //5 giây để chuyển ảnh
</script>

</html>