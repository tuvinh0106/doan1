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
<form>
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Chỉnh sửa bài viết</h4>
            </div>
        </div>
        <form>
            <div class="profile-photo">
                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                <img src="vendors/images/product-2.jpg" alt="" class="avatar-photo">
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-5">
                                <div class="img-container">
                                    <img id="image" src="vendors/images/product-2.jpg" alt="Picture">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="Update" class="btn btn-primary">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 <div class="form-group">
                <label>Tên bài viết</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea class="form-control"></textarea>
            </div>

            <button type="button" style="background-color: #00BFFF; margin-left: auto ;margin-right: auto;display: block;" onclick="tt()">Lưu</button>  
        </form>
    </code></pre>
</div>
</div>
</div>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<?php include 'layouts/script.php'; ?>
<script>
    function tt(){
        alert("Chỉnh sửa thành công");
    }
</script>
</body>
</html>