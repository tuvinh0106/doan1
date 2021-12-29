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
 <?php include_once '../controller/sanpham.php';
    if (isset($_GET['idsp'])) {
            $idsp = $_GET['idsp'];
           
            $sanpham = inforSanpham($idsp);
         var_dump($sanpham);

       }
  ?>

<form action="../controller/sanpham.php" method="POST">
              <div class="form-group">
                <label>Mã sản phẩm</label>
                <input id="idsp" name="idsp" placeholder="<?php echo $_GET['idsp']; ?>"  class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input id="tensp" name="tensp"  placeholder="<?php echo $sanpham->get_tensp() ?>" class="form-control" type="text">
            </div>
             <div class="form-group row">
         <label class="col-sm-12 col-md-2 col-form-label">Loại</label>
            <div class="col-sm-12 col-md-10">
              <select name="loaisp" id="loaisp" class="custom-select col-12">
                    <option value="Giày">Giày</option>
                    <option value="Dép">Dép</option>
                    <option value="Phụ kiện">Phụ kiện</option>
            </select>
              </div>
            </div>
               <div class="form-group">
                <label>Kích cỡ</label>
                <input id="kichco" name="kichco"class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Màu sắc</label>
                <input id="mausac" name="mausac" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Giá sản phẩm</label>
                <input id="giasp" name="giasp"  class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input id="soluong" name="soluong"   class="form-control" type="text">
            </div>
            <div class="form-group">
              <label>Mô tả sản phẩm</label>
                <textarea name="mota" id="mota" class="form-control"></textarea>
            </div>
                <div class="form-group">
              <label>Hinh</label>
                <textarea name="hinh" id="hinh"  class="form-control"></textarea>
            </div>
            <button type="submit" id="success-modal-btn" name="success-modal-btn" value="change" style="background-color: #AAAAAA; margin-left: auto ;margin-right: auto;display: block;" class="bg-light-blue btn text-blue " >Lưu lại</button>  
        </form>
<?php include 'layouts/script.php'; ?>
<script>
    function tt(){onclick="tt()"
        alert("Chỉnh sửa thành công");
    }
</script>
</body>
</html>