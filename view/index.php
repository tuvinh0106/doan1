<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <?php include 'layout/css.php'; ?>
</head>

<body>

    <!-- Start Header Area -->
    <?php include 'layout/headerpage.php'; ?>
    <!-- End Header Area -->

    <!-- start banner Area -->
    <?php include 'layout/bannerpage.php'; ?>
    <!-- End banner Area -->

    <!-- start features Area -->
    <section class="features-area section_gap">
        <div class="container">
            <div class="row features-inner">
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon1.png" alt="">
                        </div>
                        <h6>Giao hàng nhanh</h6>
                        <p>Giao hàng miễn phí cho tất cả các đơn đặt hàng</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon2.png" alt="">
                        </div>
                        <h6>Chính sách hoàn trả</h6>
                        <p>Giao hàng miễn phí cho tất cả các đơn đặt hàng</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon3.png" alt="">
                        </div>
                        <h6>Hỗ trợ 24/7</h6>
                        <p>Giao hàng miễn phí cho tất cả các đơn đặt hàng</p>
                    </div>
                </div>
                <!-- single features -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-features">
                        <div class="f-icon">
                            <img src="img/features/f-icon4.png" alt="">
                        </div>
                        <h6>Thanh toán an toàn</h6>
                        <p>Giao hàng miễn phí cho tất cả các đơn đặt hàng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end features Area -->

    <!-- Start category Area -->
    <section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
                                <a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
                                <a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
                                <a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="single-deal">
                                <div class="overlay"></div>
                                <img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
                                <a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
                                    <div class="deal-details">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-deal">
                        <div class="overlay"></div>
                        <img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
                        <a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
                            <div class="deal-details">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End category Area -->

    <!-- start product Area -->
    <section class="owl-carousel active-product-area section_gap">
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1 style="font-family:Arial">Sản phẩm mới nhất</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    <?php
                    include '../controller/controllersanpham.php';
                    $listSP = get_listSanPham();
                    foreach ($listSP as $sp) {
                        echo '
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">' .
                            '<img src=img/product/' . $sp->get_hinhanh() . ' "alt="">' .
                            '<div class="product-details">' .
                            '<h6>' . $sp->get_tensp() . '</h6>' .
                            '<div class="price">' .
                            '<h6>' . number_format($sp->get_gia()) . " VNĐ" . '</h6>' .
                            '</div>' .
                            '<div class="prd-bottom">
                            <form action="../controller/controllersanpham.php?id=' . $sp->get_masp() . '" method="post">
                            <a href="" class="social-info">
                            <span><button class="ti-bag" type="submit" name="cart" value="add"></button></span>
                                <p class="hover-text">thêm</p>
                            </a>
                            <a href="" class="social-info">
                                <span class="lnr lnr-heart"></span>
                                <p class="hover-text">yêu thích</p>
                            </a>
                            <a href="chitietsanpham.php?id=' . $sp->get_masp() . '" class="social-info">
                                <span class="lnr lnr-move"></span>
                                <p class="hover-text">xem chi tiết</p>
                            </a></form>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }

                    ?>
                </div>
            </div>
        </div>
        <!-- single product slide -->
        <div class="single-product-slider">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h1 style="font-family:Arial">Sản phẩm sắp ra mắt</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single product -->
                    <?php

                    $listSP = get_listSanPham();
                    foreach ($listSP as $sp) {
                        echo '
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">' .
                            '<img src=img/product/' . $sp->get_hinhanh() . ' "alt="">' .
                            '<div class="product-details">' .
                            '<h6>' . $sp->get_tensp() . '</h6>' .
                            '<div class="price">' .
                            '<h6>' . $sp->get_gia() . " VNĐ" . '</h6>' .
                            '</div>' .
                            '<div class="prd-bottom">
                            <form action="../controller/controllersanpham.php?id=' . $sp->get_masp() . '" method="post">
                                        <a href="" class="social-info">
                                        <span><button class="ti-bag" type="submit" name="cart" value="add"></button></span>
                                            <p class="hover-text">thêm</p>
                                        </a>
                                        <a href="" class="social-info">
                                            <span class="lnr lnr-heart"></span>
                                            <p class="hover-text">yêu thích</p>
                                        </a>
                                        <a href="chitietsanpham.php?id=' . $sp->get_masp() . '" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">xem chi tiết</p>
                                        </a></form>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- end product Area -->

    <!-- Start exclusive deal Area -->
    <section class="exclusive-deal-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 no-padding exclusive-left">
                    <div class="row clock_sec" id="clockdiv">
                        <div class="col-lg-12">
                            <h1 style="font-family:Playfair Display">Ưu đãi độc quyền sẽ sớm kết thúc!</h1>
                            <p></p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row clock-wrap">
                                <div class="col clockinner1 clockinner">
                                    <h1 class="days"></h1>
                                    <span class="smalltext">Days</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="hours"></h1>
                                    <span class="smalltext">Hours</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="minutes"></h1>
                                    <span class="smalltext">Mins</span>
                                </div>
                                <div class="col clockinner clockinner1">
                                    <h1 class="seconds"></h1>
                                    <span class="smalltext">Secs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="primary-btn">Shop Now</a>
                </div>
                <div class="col-lg-6 no-padding exclusive-right">
                    <div class="active-exclusive-product-slider">
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="img/product/e-p1.png" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6>$150.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <h4>addidas New Hammer sole
                                    for Sports person</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
                                </div>
                            </div>
                        </div>
                        <!-- single exclusive carousel -->
                        <div class="single-exclusive-slider">
                            <img class="img-fluid" src="img/product/e-p1.png" alt="">
                            <div class="product-details">
                                <div class="price">
                                    <h6>$150.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <h4>addidas New Hammer sole
                                    for Sports person</h4>
                                <div class="add-bag d-flex align-items-center justify-content-center">
                                    <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">Thêm vào giỏ hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End exclusive deal Area -->

    <!-- Start brand Area -->
    <section class="brand-area section_gap">
        <div class="container">
            <div class="row">
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
                </a>
                <a class="col single-img" href="#">
                    <img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
                </a>
                <a class="col single-img" href="#"><img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt=""></a>
                <a class="col single-img" href="#"><img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt=""></a>
                <a class="col single-img" href="#"><img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt=""></a>
            </div>
        </div>
    </section>
    <!-- start footer Area -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- End footer Area -->
    <?php include 'layout/scriptspage.php'; ?>
    <script>
        function thongbao() {
            alert("Thêm thành công");
        }
    </script>
</body>