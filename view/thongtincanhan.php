<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <?php include 'layout/css.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
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
                    <h1>Thông tin cá nhân</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Product Description Area =================-->
    <section class="product_description_area">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="Information-tab" data-toggle="tab" href="#Information" role="tab" aria-controls="Information" aria-selected="false">Thông tin cá nhân</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="changepass-tab" data-toggle="tab" href="#changepass" role="tab" aria-controls="changepass" aria-selected="true">Đổi mật khẩu</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Information" role="tabpanel" aria-labelledby="Information-tab">
                    <div class="row">
                        <div class="col-lg-3"> </div>
                        <div class="col-lg-6">
                            <form class="row form-group" action="../controller/usercontroller.php" method="POST">
                                <?php
                                include_once '../utils/get_infor.php';
                                echo '<div class="col-md-12 form-group">
                                    <div>Họ và Tên</div>   <input type="text" class="form-control" id="username" name="username" placeholder="" value="' . $user_name . '" readonly>
                                    </div>
                                    <div class="col-md-12 form-group">
                                    <div>Email</div>   <input type="email" class="form-control" id="email" name="email" placeholder="" value="' . $email . '" pattern="^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" readonly>
                                    </div>
                                    <div class="col-md-12 form-group">
                                    <div>Địa Chỉ</div>   <input type="text" class="form-control" id="diachi" name="diachi" placeholder="" value="' . $diachi . '">
                                    </div>
                                    <div class="col-md-12 form-group">
                                    <div>Số Điện Thoại</div>   <input type="text" class="form-control" id="sdt" name="sdt" placeholder="" value="' . $sdt . '">
                                    </div>
                                    <div class="col-md-12 ">
                                <button type="submit" class="primary-btn" id="user" name="user" value="update">Cập nhật</button>
                            </div>
                                   '; ?>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="changepass" role="tabpanel" aria-labelledby="changepass-tab">
                    <form class="row login_form" action="../controller/usercontroller.php" method="POST">
                        <div class="col-lg-3"> </div>
                        <div class="col-lg-6">
                            <div class="col-md-12 form ">
                                <div>Mật khẩu cũ</div>
                                <p><input type="password" class="form-control" id="password" name="password" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Mật khẩu cũ"></p>
                            </div>
                            <div class="col-md-12 form">
                                <div>Mật khẩu mới</div>
                                <p><input type="password" class="form-control" id="new_password" name="new_password" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Mật khẩu mới"></p>
                            </div>
                            <div class="col-md-12 form">
                                <div>Nhập lại mật khẩu mới</div>
                                <p><input type="password" class="form-control" id="confirm" name="confirm" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Nhập lại mật khẩu mới"></p>
                            </div>
                            <div class="col-md-12 ">
                                <p><input type="checkbox" onclick="showPass()"> Hiện mật khẩu</p>
                            </div>
                            <div class="col-md-12 ">
                                <button type="submit" class="primary-btn" id="user" name="user" value="changepass">Thay đổi mật khẩu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- start footer Area -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- End footer Area -->
    <?php include 'layout/scriptspage.php'; ?>
</body>

</html>