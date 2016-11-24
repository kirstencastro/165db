<!-- <html>
<body> -->
<?php

// create connection
$host = "localhost";
$user = "root";
$password = "";
$database = "project";
$db = mysql_connect($host, $user, $password);
$dbcon = mysql_select_db($database);
$error = null;

// // check connection
// if ($conn->connect_error) {
//     die("Error".$conn->connect_error);
// }
// echo "<h1> Connected </h1>";

// select db
// mysqli_select_db($conn, "project");
// echo "select done";

// $sql = "insert into accounts values (NULL,'$_POST[first_name]',NULL,NULL,NULL,NULL,NULL)";
//
// if ($db->query($sql) === TRUE) {
//     echo "Success";
// } else {
//     echo "ERROR".$sql."<br>".$db->error;
// }

// mysqli_close($conn);
?>

<!-- </body>
</html> -->
