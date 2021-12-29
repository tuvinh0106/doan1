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
function deleteSP($idsp)
{
    $stmt = connectDatabase()->prepare("DELETE FROM sanpham WHERE MaSP = '$idsp'");
    $stmt->execute();
    header("Location: ../view/product.php?Message=Delete successfull !!!");
}
	$idsp = $_GET['idsp'];
	deleteSP($idsp);
 ?>