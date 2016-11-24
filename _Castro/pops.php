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
        <?php include("nav.php");
            $collection = $_GET['collection'];
        ?>
        <br><br><br>

        <div class="container">
            Hello
            <div class="container row">
            <?php
                $pop = mysqli_query($db, "SELECT * FROM shows WHERE collection = '$collection'");
                while($pops = mysqli_fetch_array($pop)) { ?>
                    <div class="col-md-4" style="width:350px; height:100px;">
                        <img src="/pops/<?php echo $pops['showname'] ?>.jpg"
                            style="width:330px; height:70px; border-radius:10px; background-color:#000;">
                        <?php echo $pops['showname'] ?>
                    </div>
                <?php }
            ?>
            </div>
        </div>

   </div>
   </body>

</html>
