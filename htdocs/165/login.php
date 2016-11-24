<?php
    include("config.php");
    session_start();


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
            echo $nameError;
        }

        if (empty($pass)) {
            $errors = true;
            $passError = "Please enter your password.";
            echo $passError;
        }
    // //    // username and password sent from form
    // //
    //   $myusername = mysqli_real_escape_string($db,$_POST['username']);
    //    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    //
        if (!$errors) {
            $password = hash('sha256', $pass);
            $res = mysql_query("SELECT username, password FROM accounts WHERE username = '$name'");
            $row = mysql_fetch_array($res);
            $count = mysql_num_rows($res);
            if( $count == 1 && $row['password']==$password ) {
                $_SESSION['login_user'] = $row['username'];
                header("Location:welcome.php");
                unset($name);
                // unset($email);
                unset($pass);
                }
            else {
                $errMSG = "Incorrect Credentials, Try again...";
                echo $errMSG;
            }
        }


  	}
?>

<!-- <div align = "center" > -->
 <!-- <div style = "width:300px; border: solid 1px #333333; " align = "left"> -->
    <!-- <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div> -->

    <!-- <div style = "margin-top:30px"> -->

       <form action = "" class ="col-xs-4" method = "post" style = "margin-top:180px; margin-left: 370px">
            <!-- <input class="form-control" type="text" placeholder="Search"> -->
          <input class="form-control " type = "text" name = "username" placeholder="username"/><br />
          <input class="form-control"  type = "password" name = "password" placeholder="password" /><br/>
         <button type="submit" class="btn btn-outline-primary submit col-xs-12" style ="border-color: #204b6b; color: #204b6b">Submit</button>

       </form>
       <div style = "font-size:11px; color:#cc0000; margin-top:10px">
           <?php echo $error; ?>
       </div>
    <!-- </div> -->

 <!-- </div> -->

<!-- </div> -->
