	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php
		session_start(); 
		if(isset($_SESSION["email"])){
			echo '<div class="header-right">
			<div class="user-info-dropdown">
			<div class="dropdown">
			<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
			<span class="user-icon">
			<img src="vendors/images/photo0.jpg" alt="">
			</span>
			<span class="user-name">'.$_SESSION["email"].'</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
			<a class="dropdown-item" href="register.php"><i class="dw dw-help"></i> Đăng ký</a>
			<a class="dropdown-item" href="login.php"><i class="dw dw-logout" ></i>Đăng nhập</a>
			<a class="dropdown-item" href="dangxuat.php"><i class="dw dw-logout"></i> Đăng xuất</a>
			</div>
			</div>
			</div>
			</div>';}
			else {
				echo '<div class="header-right">
				<div class="user-info-dropdown">
				<div class="dropdown">
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
				<span class="user-icon">
				<img src="vendors/images/photo0.jpg" alt="">
				</span>
				<span class="user-name">User</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
			<a class="dropdown-item" href="register.php"><i class="dw dw-settings2"></i> Đăng ký</a>
			<a class="dropdown-item" href="login.php"><i class="dw dw-help"></i>Đăng nhập</a>
		
				</div>
				</div>
				</div>
				</div>';}?>
			</div>