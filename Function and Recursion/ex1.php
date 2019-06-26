<!DOCTYPE html>
<html>
<head>
	<title>Lab2</title>
</head>
<body>
<?php
date_default_timezone_set('Asia/Phnom_Penh');
    function greeting(){

        $time = date("H:i:s");
        if($time<12){
        	return "Good morning !!!";
        }elseif ($time<18) {
        	return "Good afternoon";
        	# code...
        }else{
        	return "Good evening!!";
        }
    }
echo $time=date("H:i:s")."<br>";
echo greeting();


    ?>
</body>
</html>
