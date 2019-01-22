<?php
	$number = array(
					"A" => 33,
					"C" => 23,
					"D" => 25,
					"G" => 26,
					"P" => 15,
					"I" => 38,
					"v" => 39,
					"X" => 20,
					"E" => 40,
					"F" => 48,
					"K" => 40
				  );
				krsort($number);
				foreach($number as $num)
				{
					echo $num."<br/>";
				}
				
				function Addition($X,$Y){
					$result = $X + $Y;
					return $result;
					
				}
				echo Addition(50, 150);
				
?>