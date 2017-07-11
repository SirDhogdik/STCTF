<?php
  session_start(); // Starting Session
  $error=''; // Variable To Store Error Message
  if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
      $error = "Username or Password is invalid";
    } else {
      // Define $username and $password
      $username=$_POST['username'];
      $password=$_POST['password'];
      // Establishing Connection with Server by passing server_name, user_id and password as a parameter
      //$connection = mysqli_connect("sqli-db", "user", "userpw", "users");
      $conn = new mysqli("sqli-db", "user", "userpw", "users");
      //echo $connection;
      // To protect MySQL injection for Security purpose
      //$username = stripslashes($username);
      //$password = stripslashes($password);
      //$username = mysql_real_escape_string($username);
      //$password = mysql_real_escape_string($password);

      // Selecting Database
      //$db = mysqli_select_db($conn, "users");
      //echo "db";
      //echo $db;
      // SQL query to fetch information of registerd users and finds user match.
      $sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
      //$query = mysqli_query($connection, $sql);
      $result = $conn->query($sql);

      //$rows = mysqli_num_rows($query);

      if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$_SESSION['login_user']=$username; // Initializing Session
        	header("location: profile.php"); // Redirecting To Other Page
				}
			} else {
				$error = "Username or Password is invalid";
			}
			
      //if ($rows != 0) {
      //  $_SESSION['login_user']=$username; // Initializing Session
      //  header("location: profile.php"); // Redirecting To Other Page
      //} else {
      //  $error = "Username or Password is invalid";
      //}
      //mysqli_close($connection); // Closing Connection
    }
  }
?>
