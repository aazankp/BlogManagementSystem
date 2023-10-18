<?php
session_start();
session_unset();
session_destroy();
if (isset($_COOKIE["user"])) {
    date_default_timezone_set('Asia/Karachi');
    setcookie('user', "", time(), '/');
}
header("location: ../index.php");
?>