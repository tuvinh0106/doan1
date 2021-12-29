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

// function changeEmail($new_email, $id)
// {
    
//         $stmt = connectDatabase()->prepare("UPDATE danhsach set ClientEmail='$new_email' WHERE ID = '$id'");
//         $stmt->execute();
//         // header("Location: ../view/adminlist.php?Message=Change successfull !!!");
    
// }

// function changePass($new_pass, $id)
// {
//     $pass = md5($new_pass, PASSWORD_DEFAULT);
//     $stmt = connectDatabase()->prepare("UPDATE danhsach set ClientPassword='$new_pass' WHERE ID= '$id'");
//     $stmt->execute();
//     // header("Location: ../view/adminlist.php?Message=Change password successfull !!!");
// }
// function changeChucvu($new_chucvu, $id)
// {
    
//         $stmt = connectDatabase()->prepare("UPDATE danhsach set ClientChucvu='$new_chucvu' WHERE ID = '$id'");
//         $stmt->execute();
//         // header("Location: ../view/adminlist.php?Message=Change successfull !!!");
    
// }
// function deleteSP($idsp)
// {
//     $stmt = connectDatabase()->prepare("DELETE FROM sanpham WHERE MaSP = '$idsp'");
//     $stmt->execute();
//     // header("Location: ../user.php?Message=Delete successfull !!!");
// }

// $idsp='1';
 
// print_r(deleteSP($idsp));
// 
function changeTrangthai($new_trangthai, $iddh)
{
        $new_trangthai = "Đã xử lý";
        $stmt = connectDatabase()->prepare("UPDATE donhang set TrangThai='$new_trangthai' WHERE MaDH = '$iddh'");
        $stmt->execute(); 
          header("Location: ../view/donhang.php?Message=Change successfull !!!");
}
// $iddh='5';
// print_r(changeTrangthai($new_trangthai,$iddh));
$iddh = $_GET['iddh'];
    changeTrangthai($new_trangthai,$iddh);
     ?>