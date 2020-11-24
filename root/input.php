<?php 
   include "unos.php";
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Q_gen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="input.php">Input</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container"><br>
      <div class="text-center">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
             <div class="form-group">
               <label class="text-primary">Unesi pitanje:</label><br>
               <textarea name="question" cols="60" rows="5" class="border border-primary rounded"></textarea><br>
               <label class="text-primary">Unesi odgovor:</label><br>
               <textarea name="answer" cols="60" rows="5" class="border border-primary rounded"></textarea>
             </div>
             <button type="submit" name="sent" class="btn btn-outline-primary">Search</button>
         </form>
       </div>
       <?php 
       if(isset($_POST['sent'])){
           if ($query) {
               echo "<h5 class='text-success'>Upload Success :)</h5>";
            }
           else {
            echo "<h5 class='text-danger'>Upload Failed :(</h5>";
           }
        }
       
       ?>
    </div>
</body>
</html>