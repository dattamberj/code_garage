<?php
   include("config.php");
   session_start();
   $error = !empty($error) ? "Your Login Name or Password is invalid" : '';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT phno FROM users WHERE uname = '$myusername' and pwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['phno'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Code Garage</title>
		<link rel="icon" href="icon.png" type="image/x-icon"/>

		<link rel="stylesheet" href="gears.css"/>
	</head>

	<body>
	<br>
	<table height="80%"  cellpadding="25px"><tr align="center"><td colspan=2><img src="bwtitle.png" id="tit" height="75px"/></td></tr>
	<tr><td style="padding-left:50px;" colspan=2>"Some of the biggest companies,<br>&nbsp;have started at smallest of the places ..."</td></tr>
	<tr>
	<td>
		<div align="center">
			<form action="" method="post">
			<p class="head">Login</p> <br>
			Username : <input type="text" name="username"><br>
			Password : <input type="password" name="password"><br>
            <input type = "submit" value = "Login"/><br />
			</form>
			<div style = "font-size:15px; color:#ffffff; margin-top:10px"><?php echo $error; ?></div>
		</div>
	</td>	
	</tr>
	<tr align="center"><td colspan=2>Not yet registered ? &nbsp;<a href="signup.html">Sign up here</a></td></tr>
	</table>
	</body>
</html>
