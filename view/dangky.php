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
                    <h1>Đăng kí</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================registration Box Area =================-->
    <?php
    if (isset($_GET['Message'])) {
        echo "<script type='text/javascript'>alert('" . $_GET['Message'] . "');</script>";
    } ?>
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
                        <h3>Đăng ký</h3>
                        <form class="row login_form" action="../controller/usercontroller.php" method="POST">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" onfocus="this.placeholder = 'Họ và tên'" onblur="this.placeholder = 'Họ và tên'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" pattern="^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" placeholder="Địa chỉ Email" onfocus="this.placeholder = 'Địa chỉ Email'" onblur="this.placeholder = 'Địa chỉ Email'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Mật Khẩu" onfocus="this.placeholder = 'Mật Khẩu'" onblur="this.placeholder = 'Mật Khẩu'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="confirm" name="confirm" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Nhập Lại Mật Khẩu" onfocus="this.placeholder = 'Nhập Lại Mật Khẩu'" onblur="this.placeholder = 'Nhập Lại Mật Khẩu'">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector" required>
                                    <label for="f-option2" required>Tôi đã đồng ý với các điều khoản</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="signup" class="primary-btn" name="user">Đăng Ký</button>
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