<?php
	setcookie('isadmin','false',time()+3600);
?>
<!DOCTYPE html>
<html>
	<style>
		button {
		  display: block;
    	margin: auto;
    	height: 25px;
    }
	</style>
  <head>
    <title>Cookie</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <form method='post' action='cookieflag.php'>
    	<button type='submit'>Get flag</button>
    </form>
  </body>
</html>
