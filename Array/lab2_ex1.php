<!DOCTYPE html>
<html>
<head>
	<title>Lab2</title>
</head>
<body>
	<?php 
		$listArray = array(3,-4,32,-7,10,-23,9);
		
			
		$n = count($listArray);
		$max = $listArray[0];
		for ($i=1; $i <$n ; $i++) { 
			if ($max < $listArray[$i]) {
				$max = $listArray[$i];	
			}
		}echo "The max is : "."$max";
echo "<br>";
		$min = $listArray[0];
		for ($i=1; $i <$n ; $i++) { 
			if($min > $listArray[$i]){
				$min = $listArray[$i];
			}
			# code...
		}echo "The min is : "."$min";
		//Find Maximum

	 ?>

</body>
</html>