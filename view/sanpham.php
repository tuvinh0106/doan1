<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <?php include 'layout/css.php'; ?>
</head>

<body id="category">

    <!-- Start Header Area -->
    <?php include 'layout/headerpage.php'; ?>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1 style="font-family:Arial">Nike</h1>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select>
                            <option value="1">Tùy Chọn</option>
                            <option value="1">Giá từ thấp tới cao</option>
                            <option value="1">Giá từ cao tới thấp</option>
                        </select>
                    </div>
                    <div class="sorting mr-auto">
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
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
                                        <a class="social-info">
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
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select>
                            <option value="1">Tùy Chọn</option>
                            <option value="1">Giá từ thấp tới cao</option>
                            <option value="1">Giá từ cao tới thấp</option>
                        </select>
                    </div>
                    <div class="sorting mr-auto">
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>

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

</html>