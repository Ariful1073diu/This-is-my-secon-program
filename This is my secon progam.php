<?php
	$fonts = "verdana";
	$colors = "Blue";
	$fontcolors = "#ddd";
	$color = "red";
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Syntax</title>
 	<style>
 	body{font-family:<?php echo $fonts;?>}
 	.phpcoding{width:900px; margin:0 auto; background: #ddd; min-height: 500px;}
 	.headeroption, .footeroption{padding: 20px; background: <?php echo $colors ?>; color:<?php echo $fontcolors ?>; text-align: center;}
 	.maincontent{min-height: 400px; padding:30px;color:<?php echo $color ?>}
 	.headeroption h2, .footeroption h2{margin:0;}
 	</style>
 </head>
 <body>
 	<div class="phpcoding">
 		<section class="headeroption">
 			<h2>PHP Fundamentals Part</h2>
 		</section>
 		<section class="maincontent">
 			
 		<?php
 			class Student{
 				function department(){
 					return "physics";
 				}
 				function details(){
 					echo $this->department();
 				}
 			}

 			$ar = new student();
 			$ar->details();
 			echo "<br/>";
 			echo "<br/>";
 			$ari = "i am ariful islam khan";
 			echo str_replace("ariful", "sadman",$ari);
 			echo "<br/>";
 			$X = null;
 			var_dump($X);
 			echo "<br/>";
 			echo "I love php coding";
 			echo "<br/>";
 			print "This is my another coding system";
 			echo "<br/>";
 			$colors = array("blue", "Green", "skyblue");
 			foreach($colors as $color){
 				echo "$color <br>";
 			}
 			$x = array(4,2,6,7,9,12,14,35);
 			$strlth = count($x);
 			for($i = 0; $i<$strlth; $i++)
 			{
 				echo $x[$i];
 				echo "<br/>";
 			}
 		
 			$x = 4;
 			$y = 56;
 			function test(){
 				$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
 			}
 			test();
 			echo $z;
 			
 			
 		?>
 		</section>
 		<section class="footeroption">
 			<h2>PHP Fundamentals Ending Part</h2>
 		</section>
 	</div>
 </body>
 </html>