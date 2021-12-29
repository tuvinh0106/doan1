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
    </div>
     <?php 
        include_once '../controller/donhang.php';
        if (isset($_GET['iddh'])) {
            $iddh = $_GET['iddh'];
echo'                 
    <form action="../controller/donhang.php?iddh=' . inforDonhang($iddh)->get_iddh() . '" method="POST">
        
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Trạng thái :</label>
                        <select class="custom-select form-control" placeholder="Chờ xử lý">
                            <option value="Chờ xử lý">Chờ xử lý</option>
                            <option value="Đã xử lý">Đã xử lý</option>
                        </select>
                    </div>
                </div>

            </div>
        </section>
        <button type="submit" id="donhang" name="donhang" value="change" style="background-color: #AAAAAA; margin-left: auto ;margin-right: auto;display: block;" class="bg-light-blue btn text-blue " >Duyệt</button> 
    </form>';
        }
    ?>
</div>
<?php include 'layouts/footer.php'; ?>
</div>
</div>
<!-- js -->
<?php include 'layouts/script.php'; ?>
<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="vendors/scripts/steps-setting.js"></script>
<script>
    function tt(){
        alert("Lưu thông tin thành công.");
    }
</script>
</body>
</html>