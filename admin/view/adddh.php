<!DOCTYPE html>
<html>
<head>
    <?php include 'layouts/headerindex.php'; ?>
</head>
<body>
<?php include 'layouts/loading.php'; ?>
<?php include 'layouts/headerpage.php'; ?>
<?php include 'layouts/colums_left.php'; ?>
<?php include 'layouts/datatable.php'; ?>
                                </ol>
                            </nav>
                        </div>
                        
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <h4 class="text-blue h4">Thêm Đơn hàng</h4>
                       
                    </div>
                   
                        <form  action="../controller/xulythemdh.php" method="POST">
                            <h5>Vui lòng nhập thông tin đơn hàng</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Tên đơn hàng :</label>
                                            <input name="tendh" id="tendh" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Mã đơn hàng :</label>
                                            <input name="madh" id="madh" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nhân viên :</label>
                                            <input name="name" id="name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Ngày bán :</label>
                                            <input name="ngayban" id="ngayban" type="text" class="form-control date-picker" placeholder="Chọn ngày">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Số tiền :</label>
                                            <input name="sotien" id="sotien" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Loại :</label>
                                            <select name="loaisp" id="loaisp" class="custom-select form-control">
                                                <option value="giày">Giày</option>
                                                <option value="dép">Dép</option>
                                                <option value="khác">Phụ kiện</option>
                                              
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </section>
                            <button type="submit" id="submit" style="background-color: #00BFFF; margin-left: auto ;margin-right: auto;display: block;"onclick="tt()">Hoàn tất</button>
                            </form>
            </div>
            <?php include 'layouts/footer.php'; ?>
        </div>
    </div>
    <!-- js -->
<?php include 'layouts/script.php'; ?>
    <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="vendors/scripts/steps-setting.js"></script>
    <script>
    function tt(){
        alert("Đã thêm đơn hàng thành công.");
    }
</script>
</body>
</html>