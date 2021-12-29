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
                            <a class="primary-btn" href="dangky.php">Tạo tài khoản</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Đăng nhập</h3>
                        <form class="row login_form" method="POST">
                            <div class="col-md-12 form-group">
                                <input type="email" class="form-control" id="email" name="email" pattern="^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" placeholder="Địa Chỉ Email" onfocus="this.placeholder = 'Địa Chỉ Email'" onblur="this.placeholder = 'Địa Chỉ Email'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Mật khẩu" onfocus="this.placeholder = 'Mật khẩu'" onblur="this.placeholder = 'Mật khẩu'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <p><input type="checkbox" onclick="showPass()">Hiện Mật Khẩu</p>
                                    <p><input type="checkbox" onclick="lsRememberMe()">Lưu Mật Khẩu</p>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="primary-btn" id="user" name="user" value="signin">Đăng nhập</button>
                                <a href="quenmatkhau.php">Quên mật khẩu</a>
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