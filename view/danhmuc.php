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
                    <h1 style="font-family:Arial">Danh Mục Sản Phẩm</h1>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="sidebar-categories">
                    <div class="head">Danh Mục Sản Phẩm</div>
                    <ul class="main-categories">
                        <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span class="lnr lnr-arrow-right"></span>Sản Phẩm Nổi Bật<span class="number">(53)</span></a>
                            <ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
                                <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                                <li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span class="lnr lnr-arrow-right"></span>Sản Phẩm Mới Nhất<span class="number">(53)</span></a>
                            <ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
                                <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                            </ul>
                        </li>
                        <li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span class="lnr lnr-arrow-right"></span>Sản Phẩm Sắp Ra
                                Mắt<span class="number">(53)</span></a>
                            <ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
                                <li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-filter mt-50">
                    <div class="top-filter-head">Lọc Sản Phẩm</div>
                    <div class="common-filter">
                        <div class="head">Thương Hiệu</div>
                        <form action="#">
                            <ul>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="nike" name="brand"><label for="nike">Nike<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="adidas" name="brand"><label for="adidas">Adidas<span>(29)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="puma" name="brand"><label for="puma">Puma<span>(19)</span></label></li>
                                <li class="filter-list"><input class="pixel-radio" type="radio" id="gucci" name="brand"><label for="gucci">Gucci<span>(19)</span></label></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
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
                        <div class="col-lg-4 col-md-6">
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
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
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

    <!-- Start related-product Area -->
    <!-- <section class="related-product-area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1 style="font-family:Arial">Ưu Đãi Trong Tuần</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        //
                        //for ($i = 1; $i < 5; $i++) {
                            echo '<div class="col-lg-3 col-md-6">';
                            echo '<div class="single-product">';
                            echo '    <img class="img-fluid" src="img/product/p1.jpg" alt="">';
                            echo '    <div class="product-details">';
                            echo '        <h6>addidas New Hammer sole';
                            echo '            for Sports person</h6>';
                            echo '        <div class="price">';
                            echo '            <h6>$150.00</h6>';
                            echo '            <h6 class="l-through">$210.00</h6>';
                            echo '        </div>';
                            echo '        <div class="prd-bottom">';
                            echo '            <a href="giohang.php" class="social-info">';
                            echo '                <span class="ti-bag"></span>';
                            echo '                <p class="hover-text">thêm vào</p>';
                            echo '            </a>';
                            echo '            <a href="chitietsanpham.php" class="social-info">';
                            echo '                <span class="lnr lnr-move"></span>';
                            echo '                <p class="hover-text">xem chi tiết</p>';
                            echo '            </a>';
                            echo '        </div>';
                            echo '    </div>';
                            echo '</div>';
                            echo '</div>';
                        //}
                        ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ctg-right">
                        <a href="#" target="_blank">
                            <img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End related-product Area -->

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