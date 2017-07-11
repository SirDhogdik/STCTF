<?php
  require('session.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Profile</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="profile">
      <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
	<span> <?php require('giveflag.php');?> </span>
      <b id="logout"><a href="logout.php">Log Out</a></b>
    </div>
  </body>
</html>
