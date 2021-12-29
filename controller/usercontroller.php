<?php

function checkEmailValid($email)
{
    $pattern_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/";
    return (!preg_match($pattern_email, $email)) ? FALSE : TRUE;
}

function checkPasswordValid($password)
{
    $pattern = "/^[a-zA-Z-' ]*$/";
    return (!preg_match($pattern, $password)) ? FALSE : TRUE;
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

function checkEmail($email)
{
    $stmt = connectDatabase()->prepare("SELECT * FROM user WHERE Email ='$email'");
    $stmt->execute();
    $result = $stmt->fetchColumn();
    return $result;
}

function checkPass($pass, $email)
{
    $pass = md5($pass);
    $stmt = connectDatabase()->prepare("SELECT MatKhau FROM user WHERE Email ='$email'");
    $stmt->execute();
    $result = $stmt->fetchColumn();
    $verify = strcmp($pass, $result);
    if ($verify == 0) {
        return true;
    }
    return false;
}


function signIn($email, $pass)
{

    if (checkEmail($email) > 0  && checkPass($pass, $email) > 0) {
        $stmt = connectDatabase()->prepare("SELECT Ten FROM user WHERE Email ='$email'");
        $stmt->execute();
        $result = $stmt->fetchColumn();
        session_start();
        $_SESSION["user_name"] = $result;
        $_SESSION["email"] = $email;
        $_SESSION["diachi"] = $email;
        header("Location: ../view/index.php");
        return $result;
    } else {
        header("Location: ../view/dangnhap.php?Message=Đăng nhập thất bại!!! Vui lòng thử lại");
    }
}

function Change()
{
    if (isset($_SESSION['user_name'])) {
        unset($_SESSION['user_name']);
        session_destroy();
        header("Location: ../view/index.php?Message=Đổi mật thành công !!! Xin hãy đăng nhập !!!");
    }
}

function signUp($user)
{
    $user_name = $user->get_username();
    $email = $user->get_email();
    $pass = md5($user->get_password());

    $stmt = connectDatabase()->prepare("INSERT INTO user (Ma, Ten, Email, MatKhau) VALUES (:Ma,:Ten,:Email,:MatKhau)");
    $stmt->bindParam(':Ma', $id);
    $stmt->bindParam(':Ten', $user_name);
    $stmt->bindParam(':Email', $email);
    $stmt->bindParam(':MatKhau', $pass);
    $stmt->execute();
    session_start();
    $_SESSION["user_name"] = $user_name;
    $_SESSION["email"] = $email;
    header("Location: ../index.php?Message=Chúc mừng vào website !!!");
}

function changePass($new_pass, $email)
{
    $pass = md5($new_pass);

    $stmt = connectDatabase()->prepare("UPDATE user set MatKhau='$pass' WHERE Email = '$email'");
    $stmt->execute();
    header("Location: ../view/thongtincanhan.php?Message=Thay đổi mật khẩu thành công !!!");
}
function update($diachi, $sdt, $email)
{
    $stmt = connectDatabase()->prepare("UPDATE user set DiaChi='$diachi',Sdt='$sdt' WHERE Email = '$email'");
    $stmt->execute();
    header("Location: ../view/thongtincanhan.php?Message=Cập nhật thông tin thành công !!!");
}


switch ($_POST['user']) {
    case $_POST['user'] == 'signin':
        $email = $_POST['email'];
        $pass = $_POST['password'];

        signIn($email, $pass);
        break;
    case $_POST['user'] == 'signup':

        $user_name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $confirm = $_POST['confirm'];

        include "../model/user.php";

        $user = new User("", $user_name, $email, $pass, "", "");

        if ($confirm == $pass) {
            if (checkEmail($user->get_email()) == 0) {
                signUp($user);
            } else {
                header("Location: ../view/dangky.php?Message=Email đã có sẵn!!! Vui lòng thử lại");
            }
        } else {
            header("Location: ../view/dangky.php?Message=Sai mật khẩu ! Vui long nhập lại mật khẩu");
        }

        break;
    case $_POST['user'] == 'changepass':
        session_start();
        $email = $_SESSION["email"];
        $old_pass = $_POST['password'];
        $new_pass = $_POST['new_password'];
        $confirm = $_POST['confirm'];

        if ($confirm == $new_pass) {
            if (checkPass($old_pass, $email)) {
                changePass($new_pass, $email);
            } else {
                header("Location: ../view/thongtincanhan.php?Message=Thay đổi thất bại !!!");
            }
        }
        break;
    case $_POST['user'] == 'update':
        session_start();
        $email = $_SESSION["email"];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        update($diachi, $sdt, $email);
        break;
    default:
        # code...
        break;
}
