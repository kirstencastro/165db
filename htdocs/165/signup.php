
<?php
    include("config.php");
    
    // session_start();
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
           $nameError = "Please enter your full name.";
           echo $nameError;
        }
        else if (strlen($name) < 3) {
          $errors = true;
          $nameError = "Name must have atleat 3 characters.";
          echo $nameError;
        }
        else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
          $errors = true;
          $nameError = "Name must contain alphabets and space.";
          echo $nameError;
        }
        else {
            $query = "SELECT username FROM accounts WHERE username='$name'";
            $result = mysql_query($query);
            $count = mysql_num_rows($result);
            if ($count != 0) {
                $errors = true;
                $nameError = "Provided username is already in use.";
                echo $nameError;
            }
        }
        if (empty($pass)) {
           $errors = true;
           $passError = "Please enter password.";
           echo $passError;
        }
        else if(strlen($pass) < 6) {
           $errors = true;
           $passError = "Password must have atleast 6 characters.";
           echo $passError;
        }
        $password = hash('sha256', $pass);
        if (!$errors) {
            echo "bla";
            echo $name;
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $contact = $_POST['contact'];
            $email = $_POST['email'];
            $sql = "insert into accounts values ('$name','$password','$fname','$lname','$contact','$email',0)";
            $result = mysql_query($sql);
            if ($result) {
                echo "success";
                $_SESSION['login_user'] = $name;
                header("location: welcome.php");
                $errMSG = "Successfully registered, you may login now";
                unset($name);
                unset($email);
                unset($pass);
                unset($fname);
                unset($lname);
                unset($contact);


            }
            else {
                echo '<b>Invalid query:</b><br>' . mysql_error() . '<br><br>';
                echo "danger";
                $errMSG = "Something went wrong, try again later...";
            }
        }
    }
?>
