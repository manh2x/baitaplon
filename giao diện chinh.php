<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="giao diện chinh.css" />

</head>

<body>
    <header>
        <div class="logo">
            <img src="images/bender/mẫu7.jfif" width="250px" height="70px">
        </div>
        <div class="menu">
            <li><a href="laptop.php">  LapTop</a>
                <ul class="submenu">
                    <li><a href="laptop.php">Hãng Sản xuất</a>
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
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="đăng ký.php">Đăng ký </a></li>
                    <li><a href="">Đăng nhập</a></li>
                    <li><a href="">Thanh toán</a></li>
                </ul>
            </i>
            <li><a href="giohang.php"><i class="fas fa-shopping-cart"></a></i></li>


        </div>
    </header>
    <section id="slide">
        <!-- /* cố định ảnh backgound theo khung   */ -->
        <div class="aspect-ratio-169">
            <img src="images/bender/1900x900.jpg">
            <img src="images/bender/2000x920.jpg">
            <img src="images/bender/2000x800.jpg">
            <img src="images/bender/background5.jpg">
            <img src="images/bender/background7.jpg">


        </div>
        <div class="dot-contener">
            <div class="dot activer"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>

    </section>
    <!-- lỗi css -->
    <section class="app-container">
        <p>Tải ứng dụng</p>
        <div class="google">
            <a><img src="images/bender/googleplay1.png"></a>
            <a> <img src="images/bender/appstore.png"></a>
        </div>
        <p>Nhập Bản tin</p>
        <input type="text" placeholder="nhập email...">
    </section>
    <!-- lỗi css -->
    <!--------------- footer------------------ -->
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