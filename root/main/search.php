<?php
require "error_reporting.php";
session_start();
if(empty($_SESSION['logged_in']))
{
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/q_gen/root/pages/logIn.php');
    exit;
}
?>

<?php 
require "connect.php";
include "fixString.php";
$que = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = fix_input($_POST["question"]);
}

if(isset($_POST['search'])){

    $que = $_POST['question'];
    $sql = "SELECT answer FROM quest_ans WHERE question='$que'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
}

?>