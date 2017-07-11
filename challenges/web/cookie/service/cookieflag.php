<?php
	$flag = '';
	if ($_SERVER["REQUEST_METHOD"] == "POST" && strtolower($_COOKIE['isadmin']) == 'true'){
		$flag = 'CWCTF{C00k1e_M0n5ter}';
	} else {
		$flag = 'You are not an admin!';
	}
?>

<!DOCTYPE html>
<html>
	<style>
		span {
		  display: block;
    	margin: auto;
    	height: 25px;
    	text-align: center;
    	font-size: 30px;
    }
	</style>
  <head>
    <title>Cookie</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <span><?php echo $flag; ?></span>
  </body>
</html>
