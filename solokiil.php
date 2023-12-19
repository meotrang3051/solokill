<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/css.css">
    <script src="../vendor/jquery-3.6.0.min.js"></script>
    <script src="../vendor/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <!-- mai hỏi thầy tại sao lại mất cái img -->
        <!-- header -->
        <div class="header container-fluid">
            <!-- topbar -->
            <div class="topbar">
                <div class="topbar-img d-flex justify-content-center">
                </div>
                <div class="topbar-content container">
                    <div class="row container">
                        <div class="logo col-3 text-left">
                            <a href="#"><img src="./img/lg.png" alt=""></a>
                        </div>
                        <div class="gioithieu col-6 text-center mt-2">
                            <h3>TỰ TIN GIAO TIẾP VỚI ENGLISH</h3>
                        </div>
                        <div class="login col-3 text-right mt-2">
                            <button type="button" class="btn btn-dark">Đăng Ký</button>
                            <button type="button" class="btn btn-outline-primary">Đăng Nhập</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid" style="background-color: #E7E5E5;">
                <nav class="navbar navbar-expand  container">
                    <!-- Brand -->
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <!-- trang chủ -->
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-house" style="color: #aa0202;"></i>Trang chủ</a>
                        </li>


                        <!-- về chúng tôi -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Về chúng tôi
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">về chúng tôi </a>
                                <a class="dropdown-item" href="#">Báo chí nói về chúng tôi</a>
                                <a class="dropdown-item" href="#">Hệ thống cơ sở vật chất </a>
                                <a class="dropdown-item" href="#">Chương trình học </a>
                            </div>
                        </li>
                        <!-- học viện -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Học viện
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Chương trình ngoại khóa </a>
                                <a class="dropdown-item" href="#">Cảm nhận học viên</a>

                            </div>
                        </li>
                        <!-- lịch khai giảng  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Lịch khai giảng
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Lịch khai giảng Hà nội</a>
                                <a class="dropdown-item" href="#">Lịch khai giảng HCM</a>
                                <a class="dropdown-item" href="#">Lịch khai giảng Đà Nẵng</a>
                            </div>
                        </li>
                        <!-- khóa học  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Khóa học
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Tiếng anh doanh nghiệp </a>
                                <a class="dropdown-item" href="#">Khóa học TOEIC</a>
                                <a class="dropdown-item" href="#">Khóa học TOEIC cho người mới </a>
                                <a class="dropdown-item" href="#">Khóa học IELT</a>
                            </div>
                        </li>
                        <!-- test review -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Test review
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Video</a>

                            </div>
                        </li>
                        <!-- tin tức -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                        <!-- liên hệ  -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>

                        <!-- tài khoảng  -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Tài khoản
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Đăng xuất tài khoản</a>

                            </div>
                        </li>
                    </ul>
                </nav>


            </div>



        </div>
         <!-- bên phải -->
        <div class=" mt-4 container-fluid" style="background-color: #F3F7FA;">
            <div class="container ">
                <div class="trai col-8 text-left ">
                    <!-- phần ảnh -->
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>

                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/slide1.jpg" alt="Los Angeles" width="700" height="350">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/slider1.jpg" alt="Chicago" width="700" height="350">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>

                    <div class="continner row mt-4">
                    <div class="anh1 col-4">
                        <img src="./img/Lich-khai-giang-Ha-Noi.jpg" alt="Los Angeles" width="220" height="120">
                    </div>
                    <div class="anh2 col-4">
                        <img src="./img/Khai-giang-hcm.jpg" alt="Los Angeles" width="220" height="120">
                    </div>
                    <div class="anh3 col-4">
                        <img src="./img/khai-giang-da-nang.jpg" alt="Los Angeles" width="220" height="120">
                    </div>
                </div>
            </div>
                </div>
               
               
            <!-- bên trái   -->

        </div>

    </div>




</body>

</html>