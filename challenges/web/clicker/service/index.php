<?php
	$flag='';
  if(isset($_POST['clicks'])){
  	if($_POST['clicks'] >= 1000000){
  	    $flag='CWCTF{Not_C00kI3Cl1ck3r}';
  	}
  }
?>

<!DOCTYPE html>
<html>
  <style>
    h1{
      color: white;
      text-align: center;
    }
    body{
      background-color: black;
    }
    img{
      display: block;
      margin: 0 auto;
    }
    #flag{
    	color: white;
      text-align: center;
      display: block;
    }
  </style>
  <head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery-3.2.1.min.js"></script>
    <title>Not cookie clicker</title>
  </head>
  <body>
    <h1 id="goal">Goal: <span id="clickcount">0</span>/1000000</h1>
    <img id="cookie" src="cookie.png">
    <span id="flag"><?php echo $flag; ?></span>
  </body>
  <script>
    var clicks=0
    $(function() {
      $("#cookie")
        .mousedown(function() {
          $(this).width('350px').height('350px');
        })
        .mouseup(function() {
          $(this).width('375px').height('375px');
          clicks++;
          $("#clickcount").text(clicks);
          if(clicks >= 1000000){
          	var form = $('<form action="" method="post">' +
						'<input type="text" name="clicks" value="' + clicks + '" hidden/>' +
						'</form>');
						$('body').append(form);
						form.submit();
          }
        });
    });
  </script>
</html>
