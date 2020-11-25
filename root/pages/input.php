<?php
session_start();
if(empty($_SESSION['logged_in']))
{
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/q_gen/root/pages/logIn.php');
    exit;
}
?>

<?php 
   include "../main/unos.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q_gen | Input</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>body{background: #f2f2f2;}</style>
</head>
<body>
<?php include "../inc/navbar.php"; ?>

    <div class="container"><br>
      <div class="text-center">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
             <div class="form-group">
               <label class="text-primary">Unesi pitanje:</label><br>
               <textarea name="question" cols="60" rows="5" class="border border-primary rounded"></textarea><br>
               <label class="text-primary">Unesi odgovor:</label><br>
               <textarea name="answer" cols="60" rows="5" class="border border-primary rounded"></textarea>
             </div>
             <button type="submit" name="sent" class="btn btn-outline-primary">Upload</button>
         </form>
       </div>
       <?php 
       if(isset($_POST['sent'])){
           if ($query) {
               echo "<h5 class='text-success'>$msg</h5>";
            }
           else {
            echo "<h5 class='text-danger'>$msg</h5>";
           }
        }
       
       ?>
    </div>
</body>
</html>