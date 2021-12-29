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
        include_once '../controller/controller.php';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
       echo '
        <form action="../controller/controller.php?id=' . inforAdmin($id)->get_id() . '" method="POST">
            <div class="form-group">
                <label>Họ tên</label>
                <input id="name" name="name" placeholder=" ' . inforAdmin($id)->get_name() . '"  class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input id="email" name="email" pattern="^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$" placeholder= "' . inforAdmin($id)->get_email() . '" class="form-control" type="email">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input id="password" name="password" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="' . inforAdmin($id)->get_password() . '"  class="form-control" type="password">
            </div>
            <div class="form-group">
                <label>Nhập lại Mật khẩu</label>
                <input id="repassword" name="repassword" pattern="^[a-zA-Z0-9\+_\-]*$" placeholder="' . inforAdmin($id)->get_password() . '"  class="form-control" type="password">
            </div>

           <div class="form-group row">
                <label for="chucvu" class="col-sm-12 col-md-2 col-form-label">Chức vụ</label>
                <div class="col-sm-12 col-md-10">
                    <select id="chucvu" name="chucvu" class="custom-select col-12" title="Chức vụ">';
                     if(inforAdmin($id)->get_chucvu() == 'Quản trị viên'){
                    echo '
                        <option value="Quản trị viên">Quản trị viên</option>
                          <option value="Quản lý">Quản lý</option>
                        <option value="Nhân viên">Nhân viên</option>';
                   } else if(inforAdmin($id)->get_chucvu() == 'Quản lý'){         
                      echo '  <option value="Quản lý">Quản lý</option>
                      <option value="Quản trị viên">Quản trị viên</option>
                      <option value="Nhân viên">Nhân viên</option>';
                  }else {   
                  echo '  <option value="Nhân viên">Nhân viên</option>
                   <option value="Quản trị viên">Quản trị viên</option>
                    <option value="Quản lý">Quản lý</option>';
                 }echo ' </select>
                </div>
            </div>
            <button type="submit" id="success-modal-btn" name="success-modal-btn" value="change" style="background-color: #AAAAAA; margin-left: auto ;margin-right: auto;display: block;" class="bg-light-blue btn text-blue " >Lưu lại</button>  
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