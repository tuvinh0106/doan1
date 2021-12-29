<?php
function signout()
{
    if (!isset($_SESSION['email'])) {
        session_start();
        unset($_SESSION['email']);
        session_destroy();
        header("Location:index.php");
    }
}
signout();
