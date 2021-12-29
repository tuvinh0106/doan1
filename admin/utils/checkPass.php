<?php
include_once '../model/admin.php';
function checkPass($pass, $email)
{

    $servername = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ClientPassword FROM danhsach WHERE ClientEmail = :email");
     $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchColumn();
    $verify = crypt($pass, $result);

    return $verify;

}
