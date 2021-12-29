<?php 

include_once '../utils/checkTenSP.php';
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

function addSanpham($sp)
{

    $tensp = $sp->get_tensp();
    $loaisp = $sp->get_loaisp();
    $kichco = $sp->get_kichco();
    $mausac = $sp->get_mausac();
    $giasp = $sp->get_giasp();
    $soluong = $sp->get_soluong();
    $mota = $sp->get_mota();
    $hinh = $sp->get_hinh();

    $stmt = connectDatabase()->prepare("INSERT INTO sanpham (TenSP, LoaiSP, Size, MauSac, GiaSP , SoLuong, MoTa, HinhAnh) VALUES (:TenSP,:LoaiSP,:Size,:MauSac,:GiaSP,:SoLuong,:MoTa,:HinhAnh)");
        $stmt->bindParam(':TenSP', $tensp);
        $stmt->bindParam(':LoaiSP', $loaisp);
        $stmt->bindParam(':Size', $kichco);
        $stmt->bindParam(':MauSac', $mausac);
        $stmt->bindParam(':GiaSP', $giasp);
        $stmt->bindParam(':SoLuong', $soluong);
        $stmt->bindParam(':MoTa', $mota);
        $stmt->bindParam(':HinhAnh', $hinh);
    $stmt->execute();

    session_start();
    $_SESSION["TenSP"] = $tensp;


    header("Location:../view/product.php?Message=Welcome to our website !!!");
}



function inforSanpham($idsp)
{
    include_once '../model/sanpham.php';

    $stmt = connectDatabase()->prepare("SELECT * FROM sanpham WHERE MaSP='$idsp';");
    $stmt->execute();
    $sanpham = $stmt->fetchAll();
    foreach ($sanpham as $row) {
        $row[0];
        $row[1];
        $row[2];
        $row[3];
        $row[4];
        $row[5];
        $row[6];
        $row[7];
        $row[8];
        $sanpham = new Sanpham($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
    }
    return $sanpham;
}

function changeTenSP($new_tensp, $idsp)
{
    
        $stmt = connectDatabase()->prepare("UPDATE sanpham set TenSP='$new_tensp' WHERE MaSP = '$idsp'");
        $stmt->execute();
        header("Location: ../view/product.php?Message=Change successfull !!!");
}
function changeLoaiSP($new_loaisp, $idsp)
{
    
        $stmt = connectDatabase()->prepare("UPDATE sanpham set LoaiSP='$new_loaisp' WHERE MaSP = '$idsp'");
        $stmt->execute(); 
          header("Location: ../view/product.php?Message=Change successfull !!!");
}
function changeSize($new_size, $idsp)
{
    
        $stmt = connectDatabase()->prepare("UPDATE sanpham set Size='$new_size' WHERE MaSP = '$idsp'");
        $stmt->execute(); 
          header("Location: ../view/product.php?Message=Change successfull !!!");
}
function changeMauSac($new_mausac, $idsp)
{
    
        $stmt = connectDatabase()->prepare("UPDATE sanpham set MauSac='$new_mausac' WHERE MaSP = '$idsp'");
        $stmt->execute(); 
          header("Location: ../view/product.php?Message=Change successfull !!!");
}
function changeGiaSP($new_giasp, $idsp)
{
    
        $stmt = connectDatabase()->prepare("UPDATE sanpham set GiaSP='$new_giasp' WHERE MaSP = '$idsp'");
        $stmt->execute(); 
          header("Location: ../view/product.php?Message=Change successfull !!!");
}
function changeSoLuong($new_soluong, $idsp)
{
    
        $stmt = connectDatabase()->prepare("UPDATE sanpham set SoLuong='$new_soluong' WHERE MaSP = '$idsp'");
        $stmt->execute(); 
          header("Location: ../view/product.php?Message=Change successfull !!!");
}
function changeMoTa($new_mota, $idsp)
{
    
        $stmt = connectDatabase()->prepare("UPDATE sanpham set MoTa='$new_mota' WHERE MaSP = '$idsp'");
        $stmt->execute();
          header("Location: ../view/product.php?Message=Change successfull !!!");

}
function changeHinh($new_hinh, $idsp)
{
    
        $stmt = connectDatabase()->prepare("UPDATE sanpham set HinhAnh='$new_hinh' WHERE MaSP = '$idsp'");
        $stmt->execute();
          header("Location: ../view/product.php?Message=Change successfull !!!");

}
if (isset($_POST['sanpham'])) {
    switch ($_POST['sanpham']) {
        case $_POST['sanpham'] == 'themsp':

$tensp = $_POST['tensp'];
$loaisp = $_POST['loaisp'];
$kichco = $_POST['kichco'];
$mausac = $_POST['mausac'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$mota = $_POST['mota'];
$hinh = $_POST['hinh'];

         // include "../model/sanpham.php";

$sanpham = new Sanpham($idsp ,$tensp, $loaisp, $kichco, $mausac ,$giasp, $soluong, $mota, $hinh);

if (!empty($tensp) && !empty($kichco) && !empty($giasp)) {
    
        if (checkTenSP($sanpham->get_tensp()) == 0) {
            addSanpham($sanpham);
            session_start();
            $_SESSION["tensp"] = $tensp;
            header("Location:../view/product.php?Message=Wellcome to our website !!!");
        } else {
            header("Location:../view/addsp.php?Message=ProdcutName already exist!!! Please try again");
        }
} else {
    header("Location:../view/addsp.php?Message=Add product failed!!! Please try again");
}
            break;

              case $_POST['sanpham'] == 'change':
     
            $tensp = $_POST['tensp'];
            $loaisp = $_POST['loaisp'];
            $kichco = $_POST['kichco'];
            $mausac = $_POST['mausac'];
            $giasp = $_POST['giasp'];
            $soluong = $_POST['soluong'];
            $mota = $_POST['mota'];
            $hinh = $_POST['hinh'];
            $idsp = $_GET['idsp'];
           

            if($tensp > 0){
                changeTenSP($tensp, $idsp);
            }
            if($loaisp > 0){
                changeLoaiSP($loaisp, $idsp);
            }
            if($kichco > 0){
                changeSize($kichco, $idsp);
            }
            if($mausac > 0){
                changeMauSac($mausac, $idsp);
            }
            if($giasp > 0){
                changeGiaSP($giasp, $idsp);
            }
            if($soluong > 0){
                changeSoLuong($soluong, $idsp);
            }
            if($mota > 0){
                changeMoTa($mota, $idsp);
            }
             if($hinh > 0){
                changeHinh($hinh, $idsp);
            }
            break;

}
}
 ?>