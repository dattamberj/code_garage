<?php
$error = !empty($error) ? "Entered passwords do not match" : '';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = 'manager';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"codegarage");
	
	$name=$_POST["name"];
	$year=$_POST["year"];
	$phno=$_POST["phno"];
	$mailid=$_POST["emailid"];
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
	$upwd=$_POST["upwd"];
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   if($pwd===$upwd)
   {
   $sql="insert into users values('$name','$year','$mailid','$phno','$uname','$pwd')";
   $retval = $conn->query( $sql);
	if(! $retval )
	{
	 die('Could not create table: ' . mysql_error());
	}
	else
	   {
		header("location: signsuc.html");
		}
   }
   else
   {
		$error = "Entered passwords do not match.";
   }
   //echo 'Connected successfully';
   mysqli_close($conn);
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
	<table height="80%"  cellpadding="25px"><tr align="center"><td colspan=2><img src="bwtitle.png" id="tit" style="max-height: 75px;"/></td></tr>
	<tr><td style="padding-left:50px;" colspan=2>"Some of the biggest companies,<br>&nbsp;have started at smallest of the places ..."</td></tr>
	<tr>
	<td>
		<div align="center">
			<form action="" method="post">
			<p class="head">Sign Up</p><br>
			<table style="margin:0px">
			<tr><td>Name </td><td>:&nbsp;<input type="text" name="name" required></td><tr>
			<tr><td>Year </td><td>:&nbsp;&nbsp;<input type="radio" name="year" value="1">I
  <input type="radio" name="year" value="2" checked>II
  <input type="radio" name="year" value="3">III  
  			<tr><td>Phone No </td><td>:&nbsp;<input type="text" name="phno" maxlength=10 required></td><tr>
			<tr><td>E-Mail ID</td><td>:&nbsp;<input type="text" name="emailid" required></td><tr>
			<tr><td>Username </td><td>:&nbsp;<input type="text" name="uname" required></td><tr>
			<tr><td>Password </td><td>:&nbsp;<input type="password" name="pwd" required></td><tr>
			<tr><td>Re-enter </td><td>:&nbsp;<input type="password" name="upwd" required></td><tr>
			<tr><td colspan=2><div style = "font-size:15px; color:#ffffff; margin-top:10px"><?php echo $error ?></div></td></tr>
			</table>
			<input type="submit" value="Sign Up">
			</form>
		</div>
	</td>
	</tr>
	</table>
	</body>
</html>
