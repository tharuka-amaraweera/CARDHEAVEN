<?php

session_start();
?> 
		
		<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Update</title>
		<meta name="description" content="">
		<meta name="author" content="pandu">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="about.css">
	</head>
	<body>
		
		<div>
			<div>
				<div class="hes" >
			<table border="0px" width="100%" height="150px">
				<tr><td></td>
				<td></td>
				
				<td><font size="4"><?php if (isset($_SESSION['user_name'])) echo $_SESSION['user_name']?>
						<a href="login.php">
			<?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == "login") echo "log out";
			else echo "log In"; 
			//session_destroy();
			?>
			</font>
			
			</a></td></tr>
			
			
			<tr> <td width="10%"> <img src="homepics/aaa.jpg" style="width: 150px;height: 145px" alt="logo"/></td>
				<td width="75%"><h1 class="heading1">Card Heaven</h1></td>
				<td width="10%"><input class="seabod" type="search" placeholder="search" align="left" /> </td>
				<td width="5%"><a href="www.google.com"><img src="homepics/sea.jpg" style="width: 50px;height: 50px" alt="search" /></a></td>
			</tr>	
				
			 </table>
			
		</div>
		<!-- <div style="background-color: yellow; height: 36px; width: 1366px" > -->
		<div class="man"> 
			<ul>
				<li><a href="index.html" class="h11">HOME</a></li>
				<li><a href="aboutus.html"class="h11">ABOUT US</a></li>
				<li><a href="newcontact.html"class="h11">CONTACT US</a> </li>
				<li><a href="rating.html"class="h11">RATE US</a> </li>
				<li><a href="login.html"class="h11"> LOGIN</a></li>
				
			</ul>
		</div>
			</div>
			<div class="wow"  style=" width:100%; height: 900px; background-color:#fdfefe ;color:black;  position: absolute;">
				<link rel="stylesheet" type="text/css" href="signup.css">
				<h1>Account Setting</h1>
		<hr/> 
		<form method="post" action="updateVal.php">
			<table style="margin: auto">
				<tr>
		<td> <h3>User Name</h3></td>  <td><input type="text" name="uname" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="update" class="sgn"></td>
		</tr>
		
		<tr>
			<td colspan="2"><a href="resetPwd.php" >Reset your Password</a></td>
		</tr>
		</table>
		<?php 
		if ( isset($_SESSION['error_flag']) && $_SESSION['error_flag']==1){
			echo $_SESSION['error_flag'];
		?> 
		<font color="red">user name already exist</font>
		
		<?php } else if (isset($_SESSION['error_flag']) && $_SESSION['error_flag']==2) {?>
			<font color="green">Succesfully updated</font>
			
			<?php } else if (isset($_SESSION['error_flag']) && $_SESSION['error_flag']==3) {?>
			<font color="red">not updated</font>
			<?php } ?>
		</form>
			</div>
		</div>
		
	</body>

</html>
<?php
unset($_SESSION['error_flag']);
?> 