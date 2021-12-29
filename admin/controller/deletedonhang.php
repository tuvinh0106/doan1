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
   
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
    $conn = null;
}
function deleteDH($iddh)
{
    $stmt = connectDatabase()->prepare("DELETE FROM donhang WHERE MaDH = '$iddh'");
    $stmt->execute();
    header("Location: ../view/donhang.php?Message=Delete successfull !!!");
}
    $iddh = $_GET['iddh'];
    deleteDH($iddh);
 ?>