<?php
session_start();
if(empty($_SESSION['logged_in']))
{
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/q_gen/root/pages/logIn.php');
    exit;
}
?>

<?php 
session_start();
session_unset();
session_destroy();
header("location: ../pages/logIn.php");
?>

