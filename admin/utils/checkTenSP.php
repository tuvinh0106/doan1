<?php
include_once '../model/sanpham.php';

function checkTenSP($tensp)
{
    $servername = "localhost";
    $dbname = "web";
    $username = "root";
    $password = "";

    $tensp = $_POST['tensp'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT TenSP FROM sanpham WHERE TenSP = :tensp");
    $stmt->bindParam(':tensp', $tensp);
    $stmt->execute();
    $result = $stmt->fetchColumn();

   return $result;
}

