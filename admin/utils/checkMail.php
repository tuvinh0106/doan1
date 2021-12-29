<?php
include_once '../model/admin.php';

function checkEmail($email)
{
    $servername = "localhost";
    $dbname = "web";
    $username = "root";
    $password = "";

    $email = $_POST['email'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Email FROM user WHERE Email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchColumn();

   return $result;
}
