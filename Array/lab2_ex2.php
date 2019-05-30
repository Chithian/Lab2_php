<!DOCTYPE html>
<html>
<head>
	<title>Lab2</title>
</head>
<body>
	<?php 
		$list = array(4,12,31,23,7,54,13,8,13);
		$odd = array();
		$even = array();

		for ($i = 0; $i < count($list) ; $i++) { 
			if($list[$i] % 2 == 0){
				$even[] = $list[$i];
			}else{
				$odd[] = $list[$i];
			}

			# code...
		}foreach ($even as  $value) {
			echo $value ." ";

			# code...
		}echo "<br>";
		foreach ($odd as  $value) {
			echo $value ." ";
			# code...
		}
	 ?>

</body>
</html>