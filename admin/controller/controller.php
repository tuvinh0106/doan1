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

function checkPass($email,$pass)
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
       include "../utils/checkMail.php";

    if (checkEmail($email) >0  && checkPass($email,$pass) >0)
    {
      
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetchColumn();
        session_start();
        $_SESSION["name"] = $result;
        $_SESSION["email"] = $email;
        header("Location:../view/index.php");
        return $result;
    } else {
        header("Location:../view/login.php?Message=Sign in failed!!! Please try again");

    }
}
function signUp($admin)
{

    $name = $admin->get_name();
    $email = $admin->get_email();
    $pass = $admin->get_password();
    $chucvu = $admin->get_chucvu();

    $stmt = connectDatabase()->prepare("INSERT INTO user (Ten, Email, MatKhau, ChucVu) VALUES (:Ten,:Email,:MatKhau,:ChucVu)");
        $stmt->bindParam(':Ten', $name);
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':MatKhau', $pass);
        $stmt->bindParam(':ChucVu', $chucvu);
    $stmt->execute();

    session_start();
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;

    header("Location:../view/index.php?Message=Welcome to our website !!!");
}

function inforAdmin($id)
{
    include_once '../model/admin.php';

    $stmt = connectDatabase()->prepare("SELECT * FROM user WHERE Ma='$id';");
    $stmt->execute();
    $admin = $stmt->fetchAll();
    foreach ($admin as $row) {
        $row[0];
        $row[1];
        $row[2];
        $row[3];
        $row[4];
        $row[5];
        $row[6];
        $admin = new Admin($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
    }
    return $admin;
}

function changeName($new_name, $id)
{
    $stmt = connectDatabase()->prepare("UPDATE user set Ten='$new_name' WHERE Ma = '$id'");
    $stmt->execute();
    header("Location: ../view/adminlist.php?Message=Change Name successfull !!!");
}

function changePass($new_pass, $id)
{
    $pass = md5($new_pass, PASSWORD_DEFAULT);
    $stmt = connectDatabase()->prepare("UPDATE user set MatKhau='$new_pass' WHERE Ma= '$id'");
    $stmt->execute();
    header("Location: ../view/adminlist.php?Message=Change password successfull !!!");
}

function changeEmail($new_email, $id)
{
    
        $stmt = connectDatabase()->prepare("UPDATE user set Email='$new_email' WHERE Ma = '$id'");
        $stmt->execute();
        header("Location: ../view/adminlist.php?Message=Change successfull !!!");
    
}
function changeChucvu($new_chucvu, $id)
{
    
        $stmt = connectDatabase()->prepare("UPDATE user set ChucVu='$new_chucvu' WHERE Ma = '$id'");
        $stmt->execute();
        // header("Location: ../view/adminlist.php?Message=Change successfull !!!");
    
}
function delete($id)
{
    $stmt = connectDatabase()->prepare("DELETE FROM user WHERE Ma = '$id'");
    $stmt->execute();
    // header("Location: ../user.php?Message=Delete successfull !!!");
}
if (isset($_POST['success-modal-btn'])) {
    switch ($_POST['success-modal-btn']) {
        case $_POST['success-modal-btn'] == 'login':
            $email = $_POST['email'];
            $pass = $_POST['password'];
            signIn($email, $pass);
            break;
        case $_POST['success-modal-btn'] == 'register':

            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = md5($_POST['password']);
            $repass = md5($_POST['repassword']);
            $chucvu = $_POST['chucvu'];

            include "../model/admin.php";
            include "../utils/checkMail.php";

           $admin = new Admin($id, $name, $email, $pass ,$diachi,$sdt, $chucvu);

           
           if (!empty($name) && !empty($email) && !empty($pass) && !empty($repass) ) {
              if ($repass == $pass) {
                   if (checkEmail($admin->get_email()) == 0) {
            signUp($admin);
            header("Location:../view/index.php?Message=Wellcome to our website !!!");
        } else {
            header("Location:../view/register.php?Message=Email already exist!!! Please try again");
        }
    } else {
        header("Location:../view/register.php?Message=Password incorrect! Please try again");
    }
} else {
    header("Location:../view/register.php?Message=Sign up failed!!! Please try again");
}
            break;

              case $_POST['success-modal-btn'] == 'change':
     
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = md5($_POST['password']);
            $repass = md5($_POST['repassword']);
            $chucvu =$_POST['chucvu'];
            $id = $_GET['id'];
             // var_dump($id);
            if($name>0){
               changeName($name, $id);
            }

            if ($email > 0) {
                changeEmail($email, $id);
            }
            if ($pass > 0 || $repass > 0) {
                if ($repass == $pass) {
                    changePass($pass, $id);
                }
            }
            if( $chucvu > 0 ){
               changeChucvu($chucvu, $id);
            }
            break;
        default:
            # code...
            break;

}
}