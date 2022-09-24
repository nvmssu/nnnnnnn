<?php
    session_start();
    if(isset($_SESSION['giohang'])) $slsp=sizeof($_SESSION['giohang']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="html_css/css/style.css">
    <style>
        .cartani {
            animation-name: myani;
            animation-duration: 0.5s;
        }
        
        @keyframes myani {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function(e) {
                e.preventDefault();
                var boxsp = $(this).parent();
                var tensp = boxsp.children("a").text();
                var dongia = boxsp.children("p").children("span").text();
                var soluong = boxsp.children("input").val();
                var hinhanh = boxsp.children("div").children("img").attr("src");

                $.post("addcart.php", {
                        tensp: tensp,
                        dongia: dongia,
                        soluong: soluong,
                        hinhanh: hinhanh
                    },
                    function(result) {
                        var countsp = $("#countsp");
                        countsp.text(result);
                        $(".giohang").addClass("cartani");
                        setTimeout(() => {
                            $(".giohang").removeClass("cartani");
                        }, 500);

                    }
                );
            });
        });
    </script>

</head>

<body>
    <div class="giohang">
        <a href="clip5cart.html"><img src="html_css/images/cart.png"><span id="countsp"><?=$slsp?></span></a>
    </div>
    <div class="boxcenter">
        <div class="row mb header">
            <h1> SIÊU THỊ TRỰC TUYẾN</h1>

        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="cart.html">Giỏ hàng</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Góp ý</a></li>
                <li><a href="#">Hỏi đáp</a></li>
            </ul>
        </div>
        <div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <img src="html_css/images/banner.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="boxsp mr">
                        <div class="row img"><img src="html_css/images/1.jpg" alt=""></div>
                        <p>$<span>10</span></p>
                        <a href="#">Đồng hồ</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="html_css/images/2.gif" alt=""></div>
                        <p>$<span>20</span></p>
                        <a href="#">Laptop</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="html_css/images/3.jpg" alt=""></div>
                        <p>$<span>30</span></p>
                        <a href="#">Đồng hồ trắng</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="html_css/images/4.jpg" alt=""></div>
                        <p>$<span>40</span></p>
                        <a href="#">Đồng hồ đen</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="html_css/images/5.jpg" alt=""></div>
                        <p>$<span>50</span></p>
                        <a href="#">Nón</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="html_css/images/6.jpg" alt=""></div>
                        <p>$<span>60</span></p>
                        <a href="#">Vali</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="html_css/images/7.jpg" alt=""></div>
                        <p>$<span>70</span></p>
                        <a href="#">Điện thoại</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="html_css/images/8.jpg" alt=""></div>
                        <p>$<span>80</span></p>
                        <a href="#">Điện thoại cam</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="html_css/images/9.jpg" alt=""></div>
                        <p>$<span>90</span></p>
                        <a href="#">Đồng hồ tròn trắng</a>
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <button>Đặt hàng</button>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>

                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name=""> Ghi nhớ tài khoản?</div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký thành viên</a>
                        </li>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Ba lô</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Ba lô</a>
                            </li>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="#" method="post">
                            <input type="text" name="" id="">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <div class="row mb10 top10">
                            <img src="html_css/images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="html_css/images/5.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="html_css/images/3.jpg" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="html_css/images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="html_css/images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="html_css/images/5.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="html_css/images/3.jpg" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="html_css/images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb footer">
            Copyright © 2021 - HOTB
        </div>
    </div>

</body>

</html>