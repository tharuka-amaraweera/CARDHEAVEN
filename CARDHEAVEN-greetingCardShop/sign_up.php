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

		<title>About us</title>
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
		<div class="hes" >
			<table border="0px" width="100%" height="150px">
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
				<li><a href="login.html"class="h11" >LOGIN</a></li>
				
			</ul>
		</div>
		<!-- ..................................... -->
<link rel="stylesheet" type="text/css" href="signup.css">		
<div class="wow"  style=" width:100%; height: 900px; background-color:#fdfefe ;color:#000000; position: absolute;">
	
			
		
		<h1>Sign up</h1>
		<hr/> 
		<form method="post" action="sign_upVal.php">
			<table style="margin: auto">
				<tr>
		<td> <h3>First Name</h3></td>  <td><input type="text" name="fname" required></td>
		</tr>
		
		<tr>
		<td><h3> Name</h3></td>  <td><input type="text" name="lname" required ></td>
		</tr>
		
		<tr>
		<td> <h3>User Name</h3></td>  <td><input type="text" name="uname" required></td>
		</tr>
		
		<tr>
		<td><h3>Email</h3></td>  <td><input type="email" name="email" required></td>
		</tr>
		
		<tr>
		<td><h3> Mobile Number</h3></td>  <td><input type="text" name="num" required ></td>
		</tr>
		
		<tr>
		<td><h3> Address</h3></td>  <td><textarea name="add" rows="5" cols="16" required></textarea></td>
		</tr>
		
		<tr>
		<td><h3>Password</h3></td> <td><input type="password" name="password" required></td>
		</tr>
		<tr>
		<td> <h3>Confirm Password</h3></td>  <td><input type="password" name="cpassword" required ></td>
		</tr>
		
	
		
		<tr>
		<td><h3>Gender</h3></td> 
		<td>
		<input type="radio" value="male" name="gender" > MALE    <input type="radio" value="female" name="gender">   FEMALE</td>
		</tr>
		
		<tr>
			
	<td>	<h3>Date Of Birth</h3></td> <td><select name="month">
			<option value="January">January</option>
			<option value="February">February</option>
			<option value="March">March</option>
			<option value="April">April</option>
			<option value="May">May</option>
			<option value="June">June</option>
			<option value="July">July</option>
			<option value="August">August</option>
			<option value="September">September</option>
			<option value="Octomber">Octomber</option>
			<option value="November">November</option>
			<option value="December">December</option>
			
		</select>
		
		
		
		
		
		
		
		
			
		<select name="day">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			
		</select>
		
		
		
		<select name="year">
			<option value="1990">1990</option>
			<option value="1991">1991</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			<option value="1994">1994</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2006</option>
			<option value="2007">2007</option>
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			
		</select>
		</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Sign Up" class="sgn"></td>
		</tr>
		</table>
		
		
		
		
		 
		</form>
		
		<?php 
		if ( isset($_SESSION['signup_flag']) && $_SESSION['signup_flag']==1){
			//echo $_SESSION['signup_flag'];
		?> 
		<font color="red">Username already exists</font>
		
		<?php } else if (isset($_SESSION['signup_flag']) && $_SESSION['signup_flag']==2) {?>
			<font color="green">you signed up succesfully!</font>
			
			<?php } else if (isset($_SESSION['signup_flag']) && $_SESSION['signup_flag']==3) {?>
			<font color="red">not succesfully signed up!</font>
			
			<?php } else if (isset($_SESSION['signup_flag']) && $_SESSION['signup_flag']==4) {?>
			<font color="red">two passwords are not matching</font>
			<?php } ?>
			</div>
			</div>
			
		     
		</body>
	
	
	
	
</html>
 	 <?php
unset($_SESSION['signup_flag']);
?> 
			
			
			
