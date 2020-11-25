<?php 
require "error_reporting.php";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name1 = fix_input($_POST["question"]);
  $name2 = fix_input($_POST["answer"]);
}

if(isset($_POST['sent'])){

  if(($name1 AND $name2) == ("" OR NULL)){
    $msg = "Input is not valid!";
  }
  else{
    $que = $_POST['question'];
    $ans = $_POST['answer'];
    $sql = "INSERT INTO quest_ans VALUES (null, null, '$que', '$ans')";
    $query = mysqli_query($conn, $sql);

    $msg = "Data is successfully uploaded!";
  }
  
     
}



function fix_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>