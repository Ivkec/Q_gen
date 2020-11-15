<?php 
require "error_reporting.php";
require "connect.php";

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



function fix_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>