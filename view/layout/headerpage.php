<?php
session_start();
?>

<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Trang chủ</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cửa Hàng</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="danhmuc.php">Danh mục sản phẩm</a></li>
                                <li class="nav-item"><a class="nav-link" href="checkout.php">Thanh toán</a></li>
                                <li class="nav-item"><a class="nav-link" href="xacnhandonhang.php">Xác nhận đơn hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Giày</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="sanpham.php">Nike</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Adidas</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Puma</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Gucci</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tin tức</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="tintuc.php">Tin Tức Giày</a></li>
                                <li class="nav-item"><a class="nav-link" href="chitiettintuc.php">Chi Tiết</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="lienhe.php">Liên hệ</a></li>
                        <?php
                        if (isset($_SESSION["user_name"])) {
                            echo '  <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> ' . $_SESSION["user_name"] . '</a>
                                    <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="thongtincanhan.php">Thông Tin Cá Nhân</a></li>
                                    <li class="nav-item"><a class="nav-link" href="dangxuat.php">Đăng Xuất</a></li>
                                    </ul>
                                    </li>';
                            if (isset($_GET['Message'])) {
                                echo "<script type='text/javascript'>alert('" . $_GET['Message'] . "');</script>";
                            }
                        } else {
                            echo   '<li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" > Thành Viên</a>
                                    <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="dangnhap.php">Đăng Nhập</a></li>
                                    <li class="nav-item"><a class="nav-link" href="dangky.php">Đăng Ký</a></li>                                
                                    </ul>
                                    </li>';
                        }
                        ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"> <a href="giohang.php" class="cart"><span class="ti-bag"> <?php if (isset($_SESSION['item']))
                                                                                                            echo count(($_SESSION['item'])); ?></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>