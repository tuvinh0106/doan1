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
                    <h1 style="font-family:Arial">Giỏ hàng</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <?php
                    include_once '../controller/controllersanpham.php';
                    if (isset($_SESSION['item'])) {
                        if (count($_SESSION["item"]) == 0) {
                            unset($_SESSION["item"]);
                            echo '<h1 style="text-align:center">Giỏ hàng trống</h1>';
                        } else {
                            $total_price = 0;
                            echo '      
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" name="id">Mã</th>
                                <th scope="col" name="hinhanh">Hình ảnh</th>
                                <th scope="col" name="ten">Tên sản phẩm</th>
                                <th scope="col" name="gia">Giá</th>
                                <th scope="col" name="soluong">Số lượng</th>
                                <th scope="col" name="thanhtien">Thành tiền</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>';

                            foreach ($_SESSION["item"] as $sp) {
                                $giasp = $sp['qty'] * $sp['GiaSP'];
                                echo '
                        <tbody id="row">
                        <tr>
                            <td>
                                <div>' . $sp['id'] . '</div>
                            </td>
                            <td>
                                <div>
                                    <img src="img/product/' . $sp["HinhAnh"] . '" alt="">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p>' . $sp["TenSP"] . '</p>
                                </div>
                            </td>
                            <td>
                                <h5>' . number_format($sp["GiaSP"]) . ' VND</h5>
                            </td>
                            <form action="../controller/controllersanpham.php?id=' . $sp['id'] . '" method="post">
                            <td>
                                <div class="product_count">
                                <input type="number" name="qty" value="' . $sp["qty"] . '" min="0" max="50" >
                                </div>
                            </td>
                            <td>
                                <h5>' . number_format($sp["GiaSP"] * $sp["qty"], 0, '', ',') . ' VND</h5>
                            </td>
                            <td>
                                <button name="cart" type="submit" value="remove" style="color: white!important;" class="btn btn-warning btn-delete-sanpham">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xóa
                                </button>
                                <button name="cart" type="submit" value="update" style="color: white!important;" class="btn btn-warning btn-update-sanpham">
                                    <i class="" aria-hidden="true"></i> Cập nhật
                                </button>
                            </td>
                            </form>
                        </tr>
                        ';
                                $total_price += ($sp["GiaSP"] * $sp["qty"]);
                            }
                            echo '
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <h5>Tổng tiền</h5>
                        </td>
                        <td>
                            <h5>' . number_format($total_price, 0, '', ',') . ' VND</h5>
                        </td>
                    </tr>
                    <tr class="out_button_area">
                        <td colspan="6">
                            <div class="checkout_btn_inner d-flex align-items-center" style="margin-left:550px">
                                <a class="gray_btn" href="index.php">Tiếp tục mua</a>
                                <a class="primary-btn" href="../controller/usercontroller.php?checkout=1">thanh toán</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    ';
                        }
                    } else echo '<h1 style="text-align:center">Giỏ hàng đang trống</h1>'; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

    <!-- start footer Area -->
    <?php include 'layout/footerpage.php'; ?>
    <!-- End footer Area -->
    <?php include 'layout/scriptspage.php'; ?>
</body>

</html>