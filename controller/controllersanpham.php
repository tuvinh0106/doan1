<?php
include_once '../model/sanpham.php';

function get_listSanPham()
{
    $servername = "localhost";
    $dbname = "web";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("Select * From sanpham");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $listSP = array();
    while ($row = $stmt->fetch()) {

        array_push($listSP, new Sanpham($row['MaSP'], $row['TenSP'], $row['Size'], $row['SoLuong'], $row['GiaSP'], $row['Mota'], $row['HinhAnh']));
    }
    return  $listSP;
}
function connectDatabase()
{
    $servername = "localhost";
    $database = "web";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage;
        die();
    }
    $conn = null;
}
function inforSanPham($masp)
{
    include_once '../model/sanpham.php';
    $stmt = connectDatabase()->prepare("SELECT * FROM sanpham WHERE MaSP='$masp';");
    $stmt->execute();
    $sanpham = $stmt->fetchAll();
    foreach ($sanpham as $row) {
        $row[0];
        $row[1];
        $row[2];
        $row[3];
        $row[4];
        $row[5];
        $row[6];
        $row[7];
        $row[8];
        $sanpham = new Sanpham($row[0], $row[1], $row[3], $row[5], $row[6], $row[7], $row[8]);
    }
    return $sanpham;
}
function addSP()
{
    include_once("../model/sanpham.php");
    $masp = $_GET['id'];

    if (isset($_GET['qty']))
        $qty = $_GET['qty'];
    else
        $qty = $_POST['qty'];

    $sanpham = inforSanPham($masp);

    $listSP = array(
        $sanpham->get_masp() => array(
            'TenSP' => $sanpham->get_tensp(),
            'id' => $sanpham->get_masp(),
            'qty' =>  $qty,
            'GiaSP' =>  $sanpham->get_gia(),
            'HinhAnh' => $sanpham->get_hinhanh(),
        )
    );

    session_start();
    if (!empty($_SESSION['item'])) {
        if (in_array($sanpham->get_masp(), array_keys($_SESSION["item"]))) {
            foreach ($_SESSION['item'] as $k => &$v) {
                if ($sanpham->get_masp() == $_SESSION['item'][$k]['id']) {
                    $_SESSION['item'][$k]['qty'] += $qty;
                }
            }
        } else
            $_SESSION['item'] +=  $listSP;
    } else
        $_SESSION['item'] = $listSP;
    header('Location: ../view/giohang.php');
}

function removeSP()
{
    session_start();
    if (!empty($_SESSION["item"])) {
        foreach ($_SESSION["item"] as $k => $v) {
            
        }
    }
}

function updateSP()
{
    session_start();
    if (!empty($_SESSION["item"])) {
        foreach ($_SESSION["item"] as $k => $v) {
            if ($_GET["id"] == $_SESSION["item"][$k]['id']) {
                if ($_POST['qty'] == 0)
                    unset($_SESSION["item"][$k]);
                else
                    $_SESSION["item"][$k]['qty'] = $_POST['qty'];
            }
        }
    }
}

if (isset($_GET['cart']) == 'cart') {
    include_once '../model/sanpham.php';

    addSP();
    header('Location: ../view/sanpham.php');
}

if (isset($_POST['cart']))
    switch ($_POST['cart']) {
        case 'add':

            addSP();
            break;
        case 'remove':

            removeSP();
            header('Location: ../view/giohang.php');
            break;

        case 'update':

            updateSP();
            header('Location: ../view/giohang.php');
            break;

        default:
            # code...
            break;
    }
if (isset($_GET['checkout'])) {
    session_start();
    if (empty($_SESSION["user_name"]))
        header('Location: ../view/dangnhap.php');
    else
        header('Location: ../view/checkout.php');
}
