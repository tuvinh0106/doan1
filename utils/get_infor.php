<?php
$email = $_SESSION["email"];

$user_name = get_infor($email)[0];
$email = get_infor($email)[1];
$diachi = get_infor($email)[2];
$sdt = get_infor($email)[3];

function get_infor($email)
{
    $servername = "localhost";
    $dbname = "web";
    $username = "root";
    $password = "";
    try {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM USER WHERE Email='$email';");
        $stmt->execute();
        $user = $stmt->fetchAll();
        foreach ($user as $row) {
            $row[1];
            $row[2];
            $row[4];
            $row[5];
        }
        return $arr = array("$row[1]", "$row[2]", "$row[4]", "$row[5]");
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
    $conn = null;
}
