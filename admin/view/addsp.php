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
				<h4 class="text-blue h4">Sản phẩm</h4>
				
			</div>
		</div>
<!-- 		<form action="../controller/xulythemsp.php" method="POST"> -->
	<form action="../controller/sanpham.php" method="POST">
			<!-- <form action="test.php" method="POST"> -->
			<div class="form-group">
				<label>Tên sản phẩm</label>
				<input name="tensp" id="tensp" class="form-control" type="text">
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
				<input name="kichco" id="kichco" class="form-control" type="text" pattern="^\+?[1-9]\d*$">
			</div>
			<div class="form-group">
				<label>Màu sắc</label>
				<input name="mausac" id="mausac" class="form-control" type="text">
			</div>
			<div class="form-group">
				<label>Giá sản phẩm</label>
				<input name="giasp" id="giasp" class="form-control" type="text" placeholder="VĐN" pattern="^\+?[1-9]\d*$">
			</div>
			<div class="form-group">
				<label>Số lượng</label>
				<input name="soluong" id="soluong" class="form-control" type="text" placeholder="Cái" pattern="^\+?[1-9]\d*$">
			</div>
			<div class="form-group">
				<label>Mô tả sản phẩm</label>
				<textarea name="mota" id="mota" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Vui lòng chọn ảnh sản phẩm</label>
				<input name="hinh" id="hinh" type="file" class="form-control-file form-control height-auto">
			</div>
			<button type="submit" id="sanpham" name="sanpham" value="themsp" style="background-color: #AAAAAA; margin-left: auto ;margin-right: auto;display: block;" class="bg-light-blue btn text-blue ">Hoàn tất</button>  
		</form>

<?php include 'layouts/script.php'; ?>
<script>
	function tt(){onclick="tt()"
		alert("Đã thêm thành công");
	}
</script>
</body>
</html>