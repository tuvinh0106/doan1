<?php
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
        // echo 'cccc';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
    $conn = null;
}

function changeTrangthai($new_trangthai, $iddh)
{
        $new_trangthai = "Đã xử lý";
        $stmt = connectDatabase()->prepare("UPDATE donhang set TrangThai='$new_trangthai' WHERE MaDH = '$iddh'");
        $stmt->execute(); 
          header("Location: ../view/donhang.php?Message=Change successfull !!!");
}

$iddh = $_GET['iddh'];
    changeTrangthai($new_trangthai,$iddh);
     ?>