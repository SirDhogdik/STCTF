<!DOCTYPE html>
<html>

	<script>
			function validateform(event) {
				event.preventDefault();
				alert('Form is disabled. Please try again later.');
				return false;
			}
		</script>
	
	<style>
		.comment-box{
			border: 1px solid black;
			width: 50%;
			margin: auto;
		}
		.full-comment{
			border: 1px solid black;
			margin: 10px;
		}
		.name, .comment{
			margin: 3px;
		}
		h1, h2, h4{
			text-align: center;	
		}
		form{
			margin: 10px;
		}
	</style>

  <head>
  	<title>Comment pls!</title>
	</head>
	
	<body>
		<h1>Welcome to my first webpage!</h1>
		<h2>Please leave me a comment below :)</h2>
		<div class="comment-box">
		
		<h4>Someone keeps on leaving mean comments, so the form is disabled for now.</h4>
		<!--
		  <form method="POST" onsubmit="validateform(event);">
		    <button type="submit" value="submit">Submit</button>
	    	  </form>
		-->
	  
	  	<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					if (empty($_POST["name"])) {
						echo '<script>alert("Name cannot be blank!")</script>';
					} elseif (empty($_POST["comment"])) {
						echo '<script>alert("Comment cannot be blank!")</script>';
					} else {
						echo 'Congrats! Here is the flag: CWCTF{F1Rs7_tO_c0mMen7_G3T5_A_pR1z3}';
					}
				}
			?>
		
			<div class="full-comment">
				<div class="name">
					<strong>Name</strong>: Shawn Rupert
				</div>
				<div class="comment">
					<strong>Comment</strong>:<br/>
					<div>
						Dis webpage suks
					</div>
				</div>
			</div>
			
			<div class="full-comment">
				<div class="name">
					<strong>Name</strong>: Hackerman
				</div>
				<div class="comment">
					<strong>Comment</strong>:<br/> 
					<div>
						Good effort, I guess.
					</div>
				</div>
			</div>
			
			<div class="full-comment">
				<div class="name">
					<strong>Name</strong>: Shawn Rupert
				</div>
				<div class="comment">
					<strong>Comment</strong>:<br/>
					<div>
						Git Gud M8
					</div>
				</div>
			</div>
			
		</div>
	</body>
	
</html>
