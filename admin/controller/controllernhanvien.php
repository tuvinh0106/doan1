<?php 
include_once '../model/admin.php';

function get_listNhanVien(){
	$servername = "localhost";
	$dbname = "web";
	$username = "root";
	$password = "";
	$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	$stmt = $conn->prepare("Select * From user");
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$listNV = array();
	while($row = $stmt->fetch()) {

		array_push($listNV, new Admin($row['Ma'],$row['Ten'],$row['Email'],$row['MatKhau'],$row['DiaChi'],$row['Sdt'],$row['ChucVu']));
	}
	return  $listNV;
}
?>