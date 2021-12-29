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
    <li class="breadcrumb-item active" aria-current="page" ><a href="adddh.php" class="bg-light-blue btn text-blue ">Thêm mới</a></li>
</ol>
</nav>
</div>                  
</div>
</div>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Danh sách hóa đơn</h4>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>    
                    <th>Tên khách hàng</th>
                    <th>Ngày bán</th>
                    <th>Tổng tiền<th>
                 <!--    <th>Trạng thái</th> -->
                    <th class="datatable-nosort"></th>   
                    </tr>
                </thead>
                <tbody>
                    <?php 
                include  '../controller/controllerdonhang.php';
                $listDH=get_listDonHang();
                // var_dump($listDH);

                foreach ($listDH as $dh) {
                 
                    echo"<tr>".
                            "<td>".$dh->get_iddh()."</td>".
                            "<td>".$dh->get_tenkh()."</td>".
                            "<td>".$dh->get_ngayban()."</td>".
                            "<td>".$dh->get_sotien()."</td>".
                            "<td style='color:#00EE00' font-weight='bold' >".
                            '<b>'.$dh->get_trangthai().'</b>'.
                            "</td>".
                            
                            "<td>".
                                '<div class="table-actions">'.
                                   '<a href="../controller/deletedonhang.php?iddh='.$dh->get_iddh().'" id="delete" name="delete" value="success-modal-btn"  data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>'.
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
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<?php include 'layouts/script.php'; ?>
</body>
</html>