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
                    <h1 style="font-family:Arial">Thanh Toán</h1>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="returning_customer">
                <div class="check_title">
                    <h2>Phản hồi khách hàng?<a href="#"> Nhấn vào đây để đăng nhập</a>
                    </h2>
                </div>
                <p>Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin chi tiết của bạn vào ô bên dưới. Nếu bạn là khách hàng mới, vui lòng chuyển sang phần Lập hóa đơn & Giao hàng.</p>
                <form class="row contact_form" action="../controller/xulydangnhap.php" method="post">
                    <div class="col-md-6 form-group p_star">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Địa Chỉ Email" onfocus="this.placeholder = 'Địa Chỉ Email'" onblur="this.placeholder = 'Địa Chỉ Email'" required>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu" onfocus="this.placeholder = 'Mật khẩu'" onblur="this.placeholder = 'Mật khẩu'" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">Đăng Nhập</button>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option" name="selector">
                            <label for="f-option">Luôn đăng nhập</label>
                        </div>
                        <a class="lost_pass" href="#">Quên mật khẩu</a>
                    </div>
                </form>
            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Thông tin đơn hàng</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên" onfocus="this.placeholder = 'Họ và tên'" onblur="this.placeholder = 'Họ và tên'" required>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number" placeholder="Số điện thoại" onfocus="this.placeholder = 'Số điện thoại'" onblur="this.placeholder = 'Số điện thoại'" required>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Địa Chỉ Email" onfocus="this.placeholder = 'Địa Chỉ Email'" onblur="this.placeholder = 'Địa Chỉ Email'" required>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Địa Chỉ" onfocus="this.placeholder = 'Địa Chỉ'" onblur="this.placeholder = 'Địa Chỉ'" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="note" name="note" placeholder="Ghi Chú" onfocus="this.placeholder = 'Ghi Chú'" onblur="this.placeholder = 'Ghi Chú'" required>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- End footer Area -->
    <?php include 'layout/scriptspage.php'; ?>
</body>

</html>