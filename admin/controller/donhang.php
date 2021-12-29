<?php 
include '../model/donhang.php';

function connectDatabase()
{
    $servername = "localhost";
    $dbname = "web";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
      
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
    $conn = null;
}

function inforDonhang($iddh)
{
    include_once '../model/donhang.php';

    $stmt = connectDatabase()->prepare("SELECT * FROM donhang WHERE MaDH='$iddh';");
    $stmt->execute();
    $donhang = $stmt->fetchAll();
    foreach ($donhang as $row) {
        $row[0];
        $row[1];
        $row[2];
        $row[3];
        $row[4];
        
        $donhang = new Donhang($row[0], $row[1], $row[2], $row[3], $row[4]);
    }
    return $donhang;
}

function changeTrangthai($new_trangthai, $iddh)
{
        $new_trangthai = "Đã xử lý";
        $stmt = connectDatabase()->prepare("UPDATE donhang set TrangThai='$new_trangthai' WHERE MaDH = '$iddh'");
        $stmt->execute(); 
          header("Location: ../view/donhang.php?Message=Change successfull !!!");
}
// $iddh='5';
// print_r(changeTrangthai($new_trangthai,$iddh));
if (isset($_POST['donhang'])) {
    switch ($_POST['donhang']) {
              case $_POST['donhang'] == 'change':
            

            include '../model/donhang.php';
            $tenkh = $_POST['tenkh'];
            $ngayban = $_POST['ngayban'];
            $sotien = $_POST['sotien'];
            $trangthai = $_POST['trangthai'];
            $iddh = $_GET['iddh'];
           

            if($trangthai > 0){
                changeTrangThai($trangthai, $iddh);
            }
            
            break;

}
}
 ?>