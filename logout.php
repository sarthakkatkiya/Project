<?php
session_start();

unset($_SESSION["islogin"]);
{
    echo "<script> window.location = 'login.php'</script>";
}
?>