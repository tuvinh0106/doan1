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
function delete($id)
{
    $stmt = connectDatabase()->prepare("DELETE FROM user WHERE Ma = '$id'");
    $stmt->execute();
    header("Location: ../view/adminlist.php?Message=Delete successfull !!!");
}
	$id = $_GET['id'];
	delete($id);
 ?>