
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
	<li class="breadcrumb-item active" aria-current="page" ><a href="register.php" class="bg-light-blue btn text-blue ">Thêm mới</a></li>
</nav>
</div>
</div>
<div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Tìm kiếm:<input type="search" class="form-control form-control-sm" placeholder="Nhập tên" aria-controls="DataTables_Table_0"></label></div></div>
<div class="card-box pb-10">
	<div class="h5 pd-20 mb-0">Danh sách nhân viên</div>
	<table class="data-table table nowrap">
		<thead>
			<tr>
				<th>ID</th>
				<th class="table-plus">Tên NV</th>
				<th>Email</th>
				<th>Pass</th>
				<th>Chức vụ</th>
				<th class="datatable-nosort"></th>
			</tr>
		</thead>
		<tbody>
				<?php
				include '../controller/controller.php';
				include  '../controller/controllernhanvien.php';
				$listNV=get_listNhanVien();
				
				foreach ($listNV as $nv) {
					if($nv->get_chucvu() != ""){
					echo"<tr>".
							"<td>".$nv->get_id()."</td>".
							"<td>".$nv->get_name()."</td>".
							"<td>".$nv->get_email()."</td>".
							"<td>".$nv->get_password()."</td>".
							"<td>".$nv->get_chucvu()."</td>".
							"<td>".
								'<div class="table-actions">'.
									'<a href="edit-admin.php?id='.$nv->get_id().'" id="change" name="change" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>'.
									'<a href="../controller/delete.php?id='.$nv->get_id().'" id="delete" name="delete" value="success-modal-btn"  data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>'.
								"</div>".
							"</td>".
						"</tr>";
				}
				}
				?>
				<tr>				
				</tr>
		</tbody>
	</table>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<!-- js -->
<?php include 'layouts/script.php'; ?>
</body>
</html>