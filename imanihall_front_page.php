<?php 
  $pictures = array('brakes.png','headlight.png',
		    'steering_wheel.png',)
  shuffle($pictures);
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Bobs Auto Parts</title>
 </head>
 <body>
   <h1>Bobs Auto Parts</h>
      <div align="center">
      <table style="widith:100%; border: 0">
	<tr>
	<?php
	for ($i = 0; $i <3; $i++) {
	 echo "<td stle =\"width: 33% text-align: center\">
	       <img src=\"";
         echo $pictures[$i];
         echo"\"/></td>";
	}
	?>
	 </tr>
      </table>
      </div>
    </body>
   </html>
