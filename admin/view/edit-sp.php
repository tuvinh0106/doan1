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
            <div class="pull-left">
                <h4 class="text-blue h4">Chỉnh sửa thông tin</h4>
                
            </div>
        </div>
      <?php 
        include_once '../controller/sanpham.php';
        if (isset($_GET['idsp'])) {
            $idsp = $_GET['idsp'];
echo'
        <form action="../controller/sanpham.php?idsp=' . inforSanpham($idsp)->get_idsp() . '" method="POST">
              <div class="form-group">
                <label>Mã sản phẩm</label>
                <input id="idsp" name="idsp" placeholder=" ' . inforSanpham($idsp)->get_idsp() . '"  class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input id="tensp" name="tensp" placeholder=" ' . inforSanpham($idsp)->get_tensp() . '"  class="form-control" type="text">
            </div>
             <div class="form-group row">
                <label for="loaisp" class="col-sm-12 col-md-2 col-form-label">Loại sản phẩm</label>
                <div class="col-sm-12 col-md-10">
                    <select id="loaisp" name="loaisp" class="custom-select col-12" title="Loại sản phẩm">';
                     if(inforSanpham($idsp)->get_loaisp() == 'Giày'){
                    echo '
                        <option value="Giày">Giày</option>
                          <option value="Dép">Dép</option>
                        <option value="Phụ kiện">Phụ kiện</option>';
                   } else if(inforSanpham($idsp)->get_loaisp() == 'Dép'){         
                      echo '  <option value="Dép">Dép</option>
                      <option value="Giày">Giày</option>
                      <option value="Phụ kiện">Phụ kiện</option>';
                  }else {   
                  echo '  <option value="Phụ kiện">Phụ kiện</option>
                   <option value="Giày">Giày</option>
                    <option value="Dép">Dép</option>';
                 }echo ' </select>
                </div>
            </div>
           <div class="form-group">
                <label>Kích cỡ</label>
                <input id="kichco" name="kichco" placeholder=" ' . inforSanpham($idsp)->get_kichco() . '"  class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Màu sắc</label>
                <input id="mausac" name="mausac" placeholder=" ' . inforSanpham($idsp)->get_mausac() . '"  class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Giá sản phẩm</label>
                <input id="giasp" name="giasp" placeholder=" ' . inforSanpham($idsp)->get_giasp() . '"  class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input id="soluong" name="soluong" placeholder=" ' . inforSanpham($idsp)->get_soluong() . '"  class="form-control" type="text">
            </div>
            <div class="form-group">
              <label>Mô tả sản phẩm</label>
                <textarea name="mota" id="mota" placeholder=" ' . inforSanpham($idsp)->get_mota() . '" class="form-control"></textarea>
            </div>
         
            <div class="profile-photo">
                                <a href="modal" data-toggle="modal" data-target="#modal" class="dw dw-eye"></a>
                                <img src="../../view/img/product/' . inforSanpham($idsp)->get_hinh() . '" alt="" class="avatar-photo">
                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body pd-5">
                                                <div class="img-container">
                                                    <img id="image" src="../../view/img/product/' . inforSanpham($idsp)->get_hinh() . '" alt="Picture">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <div class="form-group">
                <label>Vui lòng chọn ảnh sản phẩm</label>
                <input name="hinh" id="hinh" type="file" class="form-control-file form-control height-auto">
            </div>
            <button type="submit" id="sanpham" name="sanpham" value="change" style="background-color: #AAAAAA; margin-left: auto ;margin-right: auto;display: block;" class="bg-light-blue btn text-blue " >Lưu lại</button>  
        </form>';
         }
      ?>
<?php include 'layouts/script.php'; ?>
<script>
    function tt(){onclick="tt()"
        alert("Chỉnh sửa thành công");
    }
</script>
</body>
</html>