<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysql_query("select first_name from accounts where first_name = '$user_check' ");

   $row = mysql_fetch_array($ses_sql);

   $login_session = $row['first_name'];

?>
