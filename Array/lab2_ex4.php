<!DOCTYPE html>
<html>
<head>
	<title>Lab2</title>
</head>
<body>
	<?php 
		$A = array(array('a','b','c'),array('d','e','f'),array('g','h','i'),array('j','k','l'));
		$B =[];
		for ($i=0; $i <4 ; $i++) { 
			for ($j=0; $j <3 ; $j++) { 
				// echo $A[$i][$j]."<br>";
				$B[$j][$i] = $A[$i][$j];
				# code...
			}
			# code...
		}
		// for ($i=0; $i <3 ; $i++) {
		// 	for ($j=0; $j <4 ; $j++) { 
		// 		echo $B[$i][$j]."&emsp;"."&emsp;";
		// 	 	# code...
		// 	 } echo "<br>";
		// 	# code...
		// }

		foreach ($B as $value ) {
			foreach ($value as $item) {
				echo $item ." ";
				# code...
			}echo "<br>";
			# code...
		}
	 ?>

</body>
</html>