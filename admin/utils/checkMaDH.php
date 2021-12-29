<?php
include_once '../model/donhang.php';

function checkMaDH($madh)
{
    $servername = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";
  

    $madh = $_POST['madh'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ClientLoaiSP FROM donhang WHERE ClientMaDH = :madh");
    $stmt->bindParam(':madh', $madh);
    $stmt->execute();
    $result = $stmt->fetchColumn();

   return $result;
}
