<?php
   include('config.php');
?>

<!DOCTYPE html>
<html>

   <head>
      <title> Welcome </title>
       <?php include("header.html"); ?>
   </head>

   <body>
       <?php include("nav.php");?>
       <br> <br> <br>
       <div class="container" style="margin-top: 20px; font-size:20px ">
    <?php
      $name = $_SESSION['login_user'];
      $user = mysqli_query($db, "SELECT * FROM accounts WHERE username = '$name'");
      $row = mysqli_fetch_array($user);
      echo $row['first_name'], ' ', $row['last_name'];
      ?>
      <br> <br>
  </div>
  <!-- <?php include("reserve.php"); ?> -->
   </body>

</html>
