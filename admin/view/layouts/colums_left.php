	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="index.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Trang chủ</span>
						</a>
					</li>
					<?php if (isset($_SESSION["email"])) {
            echo '
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Đơn Hàng</span>
						</a>
						<ul class="submenu">
							<li><a href="xulydonhang.php">Xác nhận đơn hàng</a></li>
							<li><a href="donhang.php">Đơn hàng</a></li>
						</ul>
					</li>
					<li>
						<a href="product.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Sản Phẩm</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-right-arrow1"></span><span class="mtext">Quản Lý</span>
						</a>
						<ul class="submenu">
							<li><a href="adminlist.php">Nhân viên</a></li>
							<li><a href="userlist.php">Khách Hàng</a></li>
						</ul>
					</li>				
						<div class="dropdown-divider"></div>
					</li>				
				</ul>
			</div>
		</div>
	</div>';
}
?>