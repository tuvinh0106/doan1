<?php 
include_once '../model/donhang.php';

function get_listDonHang(){
	$servername = "localhost";
	$dbname = "web";
	$username = "root";
	$password = "";
	$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	$stmt = $conn->prepare("Select * From donhang");
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	
	$listDH = array();
	while($row = $stmt->fetch()) {

		array_push($listDH, new Donhang($row['MaDH'],$row['TenKH'],$row['Ngay'],$row['TongTien'],$row['TrangThai']));
	}
	return  $listDH;
}
?>