<!DOCTYPE html>
<html>

<head>
	
	<meta charset="utf-8">
	<title>Trang Quản Trị</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-etween align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Đăng nhập</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-page-img.png" alt="">
				<!-- 	<img src="img/product-1.jpg" alt=""> -->
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form action="../controller/controller.php" method="POST" id="frmDangKy" class="tab-wizard2 wizard-circle wizard">
								<h5>Đăng ký Thành viên</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Tên đầy đủ*</label>
											<div class="col-sm-8">
												<input type="text" id="name" name="name" placeholder="Họ và tên" onfocus="this.placeholder = 'Họ và tên'" onblur="this.placeholder = 'Họ và tên'" class="form-control">
											
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Địa chỉ Email*</label>
											<div class="col-sm-8">
												<input type="email"  id="email" name="email" pattern="^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" placeholder="Địa chỉ Email" onfocus="this.placeholder = 'Địa chỉ Email'" onblur="this.placeholder = 'Địa chỉ Email'"  class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Mật khẩu*</label>
											<div class="col-sm-8">
												<input type="password" id="password" name="password" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Mật Khẩu" onfocus="this.placeholder = 'Mật Khẩu'" onblur="this.placeholder = 'Mật Khẩu'" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Xác nhận mật khẩu*</label>
											<div class="col-sm-8">
												<input type="password"  id="repassword" name="repassword" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Nhập Lại Mật Khẩu" onfocus="this.placeholder = 'Nhập Lại Mật Khẩu'" onblur="this.placeholder = 'Nhập Lại Mật Khẩu'" class="form-control">
											</div>
										</div>
										<!-- <div class="form-group row">
											<label class="col-sm-4 col-form-label">Chức vụ</label>
											<div class="col-sm-8">
												<input type="text"  id="chucvu" name="chucvu" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="Tên chức vụ" onfocus="this.placeholder = 'Tên chức vụ'" onblur="this.placeholder = 'Tên chức vụ'" class="form-control">
											</div>
										</div> -->
										<div class="form-group row">
											<label for="chucvu" class="col-sm-4 col-form-label">Chức vụ</label>
											<div class="col-sm-8">
												<select id="chucvu" name="chucvu" class="form-control selectpicker" title="Chọn Chức Vụ">
													<option value="Quản trị viên">Quản Trị Viên</option>
													<option value="Nhân viên">Nhân Viên</option>
													<option value="Quản lý">Quản Lý</option>
												</select>
											</div>
										</div>
									</div>
								</section>
								<div class="custom-control custom-checkbox mt-4">
								<button type="submit" name="success-modal-btn" value="register" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static"></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	
	
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>