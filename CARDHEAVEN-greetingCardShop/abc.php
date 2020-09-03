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

		<title>Login</title>
		<meta name="description" content="">
		<meta name="author" content="pandu">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="about.css">
	</head>

	<body >
			<div class="headerdiv">
			<div class="logo"> <img src="homepics/aaa.jpg" style="width: 130px;height: 100px" alt="logo"/> </div>
			<div class="head"><p class="headerp1">CARD HEAVEN</p></div>
			<div class="sea">
				<table>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td><input class="seabod" type="search" placeholder="search" align="left" /></td>
						<td><a href="www.google.com"><img src="homepics/sea.jpg" style="width: 50px;height: 50px" alt="search" /></a></td></tr>	
				</table>
			</div>
		</div>
		<div class="mainmenudiv">
			<ul class="m_menu">
				<li><a href="index.html" class="h">HOME</a></li>
				<li><a href="aboutus.html" class="h">ABOUT US</a></li>
				<li><a href="newcontact.html"class="h">CONTACT US</a></li>
				<li><a href="rating.html"class="h">RATE US</a></li>	
				<li><a href="login.html" class="h">LOGIN</a></li></ul>	
		</div>
		<!-- .......................................... -->
<div>			
<div class="wow"  style=" width:100%; height: 900px; background-color:#fdfefe ;color:black;  position: absolute;">
<link rel="stylesheet" type="text/css" href="signup.css">

		
		
		
		<h1 style="color: #000000">login</h1>
		<hr/> 
		<form method="post" action="loginVal.php">
			<table style="margin: auto">
				<tr>
		<td> <h3 style="color: #000000">User Name</h3></td>  <td><input type="text" name="uname" required></td>
		</tr>
		
		<tr>
		<td><h3 style="color: #000000">Password</h3></td> <td><input type="password" name="password" required></td>
		</tr>
		
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="login" class="sgn"></td>
		</tr>
		</table>
		</form>
		<br/>
		
		
		 <?php 
		if (isset($_SESSION['error_flag']) && $_SESSION['error_flag']==1)
		{//echo $_SESSION['this_flag'];
		
		?>
		 
		<center><font color="red" >Incorrect User name. Sign in first</font></center>
		 
		 <?php } else if (isset($_SESSION['error_flag']) && $_SESSION['error_flag']==2){
			?>
		<center><font color="red">Password is wrong</font>	</center>
		<?php }?> 
		
		
<center><a href="sign_up.php">SIGN UP</a></center>
<br/><br/>

<center><a href="resetPwd.php">forget password</a></center>
		</body>
		</html>
	
		
</div>
</div>	
</body>
</html>
<?php
session_destroy();
?>	