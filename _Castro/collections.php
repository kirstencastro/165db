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
       <?php include("nav.php"); ?>
       <div class="container" style="margin-top:60px" align="center">
           <br>

           <center><div id="carousel-example-generic" class="carousel slide" data-ride="carousel"
                align="center" style="width:800px; height:150px;">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox"style="width:800px; height:200px;">
                <div class="carousel-item active">
                  <img src="/pops/slide1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img src="/pops/slide2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img src="/pops/slide3.jpg" alt="Third slide">
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div></center>
          <br>

           <div class="container" style="width:800px; margin-top:50px;">
                   <span class="horizontal"></span>
                   <span style="background-color:#fff; padding:15px; color:#575b4e; font-size:30px; font-weight:500;">POP!</span>
            </div>


          <div class = "container row" style="width:800px;">
           <?php
            $query = mysqli_query($db, 'SELECT collection FROM collections');
            while($pops = mysqli_fetch_array($query)) { ?>
                <div class="col-md-12 nav-pills text-uppercase text-xs-center">
                    <a href="pops.php?collection=<?php echo $pops['collection'] ?>" class="nav-link category" style="border-radius:20px; color:#fff; text-decoration:none;"><?php echo $pops['collection'];?></a>
                </div>


            <?php } ?>
            </div>
   </div>
   </body>

</html>
