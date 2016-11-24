<?php
   session_start();
   include("config.php");

   $errors = false;
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = trim($_POST['username']);
       $name = strip_tags($name);
       $name = htmlspecialchars($name);

       $pass = trim($_POST['password']);
       $pass = strip_tags($pass);
       $pass = htmlspecialchars($pass);


       if (empty($name)) {
           $errors = true;
           $nameError = "Please enter your username.";
           $_SESSION['nameError'] = $nameError;
           // echo $nameError;
       }

       if (empty($pass)) {
           $errors = true;
           $passError = "Please enter your password.";
           $_SESSION['passError'] = $passError;
           // echo $passError;
       }

       if (!$errors) {
           // echo 'name: ', $name;
           // echo ' // pass: ', $pass, ' // ';
           $password = hash('sha256', $pass);
           $res = mysqli_query($db, "SELECT username, password FROM accounts WHERE username = '$name'");
           if (!$res) {exit();}
           $row = mysqli_fetch_array($res);
           $count = mysqli_num_rows($res);

           if ( $count == 1 && $row['password']==$password ) {
               $_SESSION['login_user'] = $row['username'];
               header("Location:welcome.php");
           }
           else {
               $errMSG = "Incorrect Credentials, Try again...";
               $_SESSION['error'] = $errMSG;
               // echo $errMSG;
               header("Location:index.php");
           }
       }
       else {
           header("Location:index.php");
       }

    //    header("Location:index.php");
   }
?>
