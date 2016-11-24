<?php
if(!isset($_SESSION))
{
    session_start();
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>Pops</title>
   <!-- Required meta tags always come first -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <link rel="stylesheet" href="css/bootstrap.css" type = "text/css">
</head>
<body>
    <?php include("nav.php"); ?>

    <br> <br>
    <div class="container" align="center">

        <?php if (!isset($_SESSION['login_user'])): ?>
            <form action = "login.php" class ="col-xs-4" method = "post" style = "margin-top:180px; margin-left: 370px">
            <input class="form-control " type = "text" name = "username" placeholder="username"/><br />
            <input class="form-control"  type = "password" name = "password" placeholder="password" /><br/>
            <button type="submit" class="btn btn-outline-primary submit col-xs-12" style ="border-color: #204b6b; color: #204b6b">Submit</button>

            </form>
        <?php endif; ?>


        <div style = "font-size:11px; color:#cc0000; margin-top:10px">
            <?php
                // echo $error;
                if (isset($_SESSION['nameError'])) {echo $_SESSION['nameError'];}
                if (isset($_SESSION['passError'])) {echo $_SESSION['passError'];}
                if (isset($_SESSION['error'])) {echo $_SESSION['error'];}
                
                unset($_SESSION['nameError']);
                unset($_SESSION['passError']);
                unset($_SESSION['error']);
            ?>
        </div>

   </div>
   <div class="container" align="center" style="margin-top: 5px;">
       <a href="#" style="color:#37206b;" data-toggle="modal" data-target="#myModal">
       Guest? </a>
   </div>
</body>
</html>
