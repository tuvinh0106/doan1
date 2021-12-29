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
	<li class="breadcrumb-item active" aria-current="page" ><a href="addsp.php" class="bg-light-blue btn text-blue ">Thêm mới</a></li>
</ol>
</nav>
</div>

</div>
</div>
<div class="card-box mb-30">
	<h2 class="h4 pd-20">Sản phẩm cửa hàng</h2>
	<table class="data-table table nowrap">
		<thead>
			<tr>
				
				<th class="table-plus datatable-nosort">Hình ảnh</th>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>		
				<th>Màu sắc</th>
				<th>Kích thước</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th class="datatable-nosort"></th>
			</tr>
		</thead>
		<tbody>
		
				<?php
				include  '../controller/controllersanpham.php';
				$listSP=get_listSanPham();
				foreach ($listSP as $sp) {
					echo 	
							"<tr>".
								'<td class="table-plus">'.
								'<img src=../../view/img/product/'.$sp->get_hinh().' width="70" height="70" alt="">'.
								"</td>".
					
							"<td>".$sp->get_idsp()."</td>".
							"<td>".$sp->get_tensp()."</td>".
							"<td>".$sp->get_mausac()."</td>".
							"<td>".$sp->get_kichco()."</td>".
							"<td>".$sp->get_giasp()."</td>".
							"<td>".$sp->get_soluong()."</td>".
							"<td>".
								'<div class="table-actions">'.
									'<a href="edit-sp.php?idsp='.$sp->get_idsp().'" id="change" name="change" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>'.
									'<a href="../controller/deletesanpham.php?idsp='.$sp->get_idsp().'" id="delete" name="delete" value="success-modal-btn"  data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>'.
								"</div>".
							"</td>".
						"</tr>";
				}
				?>
	
		</tbody>
	</table>
</div>
</div>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<!-- js -->
<?php include 'layouts/script.php'; ?>
</body>
</html>