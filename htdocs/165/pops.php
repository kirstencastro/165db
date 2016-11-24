
<!DOCTYPE html>
<html>

   <head>
      <title> Welcome </title>
       <?php include("index.html"); ?>
   </head>

   <body>
       <?php include("nav.php"); ?>
       <div class="container", style="margin-top:60px">
           <h1>Pops</h1>
       <?php

        $query = mysql_query('SELECT showname FROM `shows`');
        while($pops = mysql_fetch_array($query)) {
        // print_r($pops);
        // foreach($pops as &$a) {
            echo $pops['showname']; echo "<br>";
        }
            // unset($a);
        // }
        // for ($i=0; $i<count($pops); ++$i) {
        //     echo $pops[$i];
        // }
             ?>
   </div>
   </body>

</html>
