<?php
   include('session.php');
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Code Garage</title>
  		<link rel="icon" href="icon.png" type="image/x-icon"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <section class="header">
    <div class="container">
		<div class="row">
		<div class="col-sm-12"><center><img src="bwtitle.png" class="img-responsive"/></center></div>
		</div>
    </div>    
</section>
<nav class="mainNav" id="mainNav">
    <ul class="text-center">
        <li><a href="#">Home</a></li>
        <li><a href="#next">The Garage</a></li>
        <li><a href="#more">Profile</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
<section class="next" id="next" style="background: url('6fVBDMW.jpg') center center;">
    <h2 class="col-md-12 text-center">Top coders of the month</h2><br><br>
	<?php echo "<h2><center><font color='white'>Hi ".$name."</font><center></h2>";?>
</section>
<section class="more" id="more"style="background: #1B1B1B;">
	<div class="col-sm-4" id="prof" style="height: 600px; border: 2px white solid; color: white;">
		<center>
			<table>
			<tr><td colspan=2><img src="dattu.jpg" class="img-responsive"/></td></tr>
			<h6><tr><td>Name</td><td>&nbsp;:&nbsp;<?php echo $name;?></td></tr>
			<tr><td>Contact</td><td>&nbsp;:&nbsp;<?php echo $numberra;?></td></tr>
			<tr><td>Best ranking</td><td>&nbsp;:&nbsp;xx</td></tr>
			<tr><td>Current ranking</td><td>&nbsp;:&nbsp;xx</td></tr></h6>
			</table
		</center>
	</div>
</section>
<section class="still" id="about">
    <h2 class="col-md-12 text-center">About Us</h2>
</section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
