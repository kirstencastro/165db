<?php
include("modal.html");
include("signup.php"); ?>

<nav class="navbar navbar-fixed-top navbar-light bg-faded" style="background-color: #0b1923;">
  <ul class="nav navbar-nav">
      <li>
          <form class="form-inline float-xs-left">
              <input class="form-control" type="text" placeholder="Search">
          </form>
      </li>


      <li class="nav-item" style="margin-left: 10px;">
        <a class="nav-link" href="welcome.php" style="color: #fff;">Home</a>
      </li>
      <li class="nav-item" style="margin-top: 6px; color: #fff;">
          |
      </li>

    <li class="nav-item" style="margin-left: 10px;">
      <a class="nav-link" href="collections.php" style="color: #fff;">Collections</a>
    </li>
    <li class="nav-item" style="margin-top: 6px; color: #fff;">
        |
    </li>
    <li class="nav-item" >
     <a class="nav-link" href="" style="color: #fff;">Store Locations</a>
    </li>
    <?php
    if (isset($_SESSION['login_user'])) { ?>
    <li class="nav-item float-xs-right" >
        <a class="btn btn-secondary" href="logout.php" >Log Out</a>
    </li>
    <li class="nav-item float-xs-right" style="margin-top:7px; color: #fff">
        Welcome <?php echo $_SESSION['login_user']; ?>!
    </li>
    <?php }
    else {?>
        <button type="button" data-toggle="modal" data-target="#myModal"
            class="btn btn-outline-primary submit float-xs-right"
            style ="font-weight: 600;width: 100px; margin-right:20px; border: 0; color: #204b6b;">
            Sign Up</button>
    <?php }
        // echo 'Login user: ', $_SESSION['login_user'];
    ?>
</ul>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
