

<?php
require "../main/error_reporting.php";
include "../main/connect.php";
include "../main/fixString.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from Form
    $password = fix_input($_POST['password']);
    $password = md5($password); // Encrypted Password
}

if(isset($_POST['logIn'])){
    $sql = "SELECT password FROM permission_login WHERE password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['logged_in'] = 1;
        header("location: ../../index.php");
    } else {
        if(isset($_POST['logIn']))
          $error = "Incorrect password!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q_gen</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>body{background: #262626;} .center{text-align: center; padding-top: 300px;}</style>
</head>
<body>
    <div class="container"><br>
       <div class="center">
         <div>
            <h3 class="text-danger">Admin permission required!</h3><br><br><br>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
               <label class="text-primary">JOIN CODE :</label>
               <input class="border border-primary rounded" type="password" name="password"/>
               <input class="btn-primary rounded" type="submit" value="Login" name="logIn"/><br/>
               <div class="text-danger"><?php echo $error; ?></div>
            </form> 
          </div>
       </div>
    </div>
</body>
</html>