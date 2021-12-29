<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <?php include 'layout/css.php'; ?>
</head>

<body>

    <!-- Start Header Area -->
    <?php include 'layout/headerpage.php'; ?>
    <!-- End Header Area -->
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Đăng nhập</h1>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/login.jpg" alt="">
                        <div class="hover">
                            <a class="primary-btn" href="dangnhap.php">Quay lại đăng nhập</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Đặt Lại Mật Khẩu</h3>
                        <form class="row login_form" id="contactForm">
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" name="email" id="txtEmailDangKy" placeholder="Địa Chỉ Email" onfocus="this.placeholder = 'Địa Chỉ Email'" onblur="this.placeholder = 'Địa Chỉ Email'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Nhận mã xác thực</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->
    <!-- start footer Area -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- End footer Area -->
    <?php include 'layout/scriptspage.php'; ?>
</body>

</html>