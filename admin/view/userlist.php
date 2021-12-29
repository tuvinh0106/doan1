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
</nav>
</div>
</div>
<div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Tìm kiếm:<input type="search" class="form-control form-control-sm" placeholder="Nhập tên" aria-controls="DataTables_Table_0"></label></div></div>
<div class="card-box mb-30">
	<div class="pd-20">
		<h4 class="text-blue h4">Danh sách khách hàng</h4>
	</div>
	<div class="pb-20">
		<table class="data-table table stripe hover nowrap">
			<thead>
				<tr>
					<th>ID</th>
					<th class="table-plus datatable-nosort">Tên Khách hàng</th>
					<th>Email</th>
					<th>Địa chỉ</th>					
					<th>SĐT</th>
					<th class="datatable-nosort"></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include  '../controller/controllernhanvien.php';
				$listNV=get_listNhanVien();
					
				 // var_dump($listNV);
				
				foreach ($listNV as $nv) {
					if($nv->get_chucvu() == ""){
			 			echo"<tr>".
			 			"<td>".$nv->get_id()."</td>".
							"<td>".$nv->get_name()."</td>".
						"<td>".$nv->get_email()."</td>".
						"<td>".$nv->get_diachi()."</td>".
						"<td>".$nv->get_sdt()."</td>".
						
						"<td>".
								'<div class="table-actions">'.
			 						'<a href="../controller/delete.php?id='.$nv->get_id().'" id="delete" name="delete" value="success-modal-btn"  data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>'.
								"</div>".
							"</td>".
						"</tr>";
							
			 	}
			 } 
			 ?>
			</tbody>
		</table>
	</div>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<?php include 'layouts/script.php'; ?>
</body>
</html>