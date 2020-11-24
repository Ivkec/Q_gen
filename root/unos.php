<?php 
require "error_reporting.php";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = fix_input($_POST["question"]);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = fix_input($_POST["answer"]);
  }
  


if(isset($_POST['sent'])){

    $que = $_POST['question'];
    $ans = $_POST['answer'];
    $sql = "INSERT INTO quest_ans VALUES (null, null, '$que', '$ans')";
    $query = mysqli_query($conn, $sql);
    
     
}



function fix_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>