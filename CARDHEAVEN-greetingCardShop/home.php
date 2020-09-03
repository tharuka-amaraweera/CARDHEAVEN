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

		<title>Homepage</title>
		<meta name="description" content="">
		<meta name="author" content="pandu">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link href='//fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="homepage.css" />
		<link rel="stylesheet" href="newcontact.css" />
		<script type="text/javascript" src="slider.js"></script>
		
	</head>

	<body>
		<div class="headerdiv" >
			<div class="logo"> <img src="homepics/aaa.jpg" style="width: 130px;height: 100px" alt="logo"/> </div>
			<div class="head"><p class="headerp1">CARD HEAVEN</p>        </div>
			<div class="sea">
				<table>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr><td> <?php if (isset($_SESSION['user_name'])) echo $_SESSION['user_name']?>
						<a href="login.php">
			<?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == "login") echo "log out";
			else echo "log In"; 
			//session_destroy();
			?>
			</a></td>
						<td>
			
			
			<?php if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == "login"){ ?>
			<a href="update.php"><img src="settings_logo.png" width="50%"></a>
			<?php }
			//session_destroy();
			?></td></tr>
						
						
						
					<tr><td><input class="seabod" type="search" placeholder="search" align="left" /></td>
						<td><a href="www.google.com"><img src="homepics/sea.jpg" style="width: 50px;height: 50px" alt="search" /></a></td></tr>	
				</table>
			</div>
		</div>
		<div class="img1div">
			<img src="homepics/h1.jpg" style="width: 100%;height: 500px;" alt="lovely" />
	
		</div>
		<div class="mainmenudiv">
			<ul class="m_menu">
				<li><a href="index.html" class="h">HOME</a></li>
				<li><a href="aboutus.html" class="h">ABOUT US</a></li>
				<li><a href="newcontact.html"class="h">CONTACT US</a></li>
				<li><a href="rating.html"class="h">RATE US</a></li>	
				<li><a href="login.html" class="h">LOGIN</a></li></ul>	
		</div>
		<div class="weldiv">
			<img  class="img2" src="homepics/wel2.jpg" style="width: 340;height: 220px;"  />
		</div>
		<div class="paraemptydiv">
			<a href="Thankyou.html"><input class="button" type="button" value="THANKYOU         " /></a><br/>
			<a href="Getwell.html"><input class="button" type="button" value="GET WELL SOON" /></a><br/>
			<a href="sympathy.html"><input class="button" type="button" value="SYMPATHY        " /></a><br/>
			<a href="Love.html"><input class="button" type="button" value="LOVE                " /></a>
		</div> 
		<div class="paradiv">
			<p class="parap1">
				We provide the keys and secrets you need to manifest a card that surpasses your wildest hopes and dreams.
				 We believe a meaningful card planning process is the stepping stone into an authentic satisfaction.
				  We promise a flawless dream day and give you the opportunity to write your love story.
			</p>
		</div>
		<div class="paraemptydi">
			<a href="Congradulation.html"><input class="button" type="button" value="CONGRATULATION" /></a><br/>
			<a href="Anniversary.html"><input class="button" type="button" value="ANNIVERSARY       " /></a><br/>
			<a href="Friendship.html"><input class="button" type="button" value=" FRIENDSHIP          "  /></a><br/>
			<a href="Birthday.html"><input class="button" type="button" value=" BIRTHDAY             " /></a>
		</div>
		
		<div class="pic1"> <img src="homepics/hom1.jpg" style="width: 300px;height: 300px " /> </div>
		<div class="pic2"> <img src="homepics/ho1.gif"  style="width: 600px;height: 600px " /> </div>
		<div class="pic3"> <img src="homepics/hom3.jpg" style="width: 300px;height: 300px " /> </div>
		<div class="pic4"> <img src="homepics/hom4.jpg" style="width: 300px;height: 300px " /> </div>
		<div class="pic5"> <img src="homepics/hom2.jpg" style="width: 300px;height: 300px " /> </div>
		
		<div class="slider-holderempty"> </div>
		<div id="sliderholder">
			<img class="slider" src="homepics/sl1.jpg">
			<img class="slider" src="homepics/sl2.jpg">
			<img class="slider" src="homepics/sl3.jpg">
			<img class="slider" src="homepics/sl4.jpg">
			<img class="slider" src="homepics/sl6.jpg">
			<img class="slider" src="homepics/sl7.jpg">
			<img class="slider" src="homepics/s22.jpg">
			<button class="btn" onclick="plusIndex(-1)" id="btn1"> &#10094;</button>
			<button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
		</div>
 		<div class="test">
 			<img  src="homepics/te2.jpg" style="width: 1336px;height: 500px"> 
 			<p class="testp" >---Testimonals---</p>
 			<input class="testemailp"  type="email" placeholder="EMAIL" />  
 			<img class="testspic" src="homepics/testpic1.png " style="width: 300px;height: 250px;" >
              <input class="testsubp" type="button" value="SUBSCRIBE" />
 		</div>
 
	<div class="fot"> 
		<div class="stay">
		<p class="PPP">STAY CONNECTED </p>
		<p align="justify" style="font-size: 0.8em;font-family:Verdana">
			Join our people community who recevies bi weekly card marking tips.
		</p>	
		 </div>	
		 <div class="fotbod"> <img src="homepics/vet.jpg" style="width: 46px;height: 160px;" /></div>
		 <div class="stay1">
		<p class="PPP">NAVIGATOR </p>
		<table>
		<tr>
			<td><a href="index.html"><input type="button" class="button1" value="Home" /></a> </td> 
			<td>&nbsp;</td>
		    <td><a href="aboutus.html"><input type="button" class="button1" value="About us" /></a></td>
		    <td>&nbsp;</td>
		    <td><a href="Birthday.html"><input type="button"class="button1"  value="Birthday" /></a></td>
		    <td>&nbsp;</td>
		    <td><a href="Thankyou.html"><input type="button"class="button1"  value="Thankyou" /></a></td>
		    <td>&nbsp;</td>
		    <td><a href="Getwell.html"><input type="button" class="button1" value="Get well soon" /></a></td>
		    <td>&nbsp;</td>
		    <td><a href="Love.html"><input type="button" class="button1" value="love" /></a></td>
		</tr>
		<tr>
			
			<td><a href="Congradulation.html"><input type="button" class="button1" value="congrats" /></a></td>
			<td>&nbsp;</td>
		    <td><a href="Friendship.html"><input type="button"class="button1"  value="Friendship" /></a></td>
		    <td>&nbsp;</td>
		    <td><a href="sympathy.html"><input type="button"class="button1"  value="sympathy" /></a></td>
		    <td>&nbsp;</td>
		    <td><a href="Anniversary.html"><input type="button" class="button1" value="Anniversary" /></a></td>
		    <td>&nbsp;</td>
		    <td><a href="newcontact.html"><input type="button" class="button1" value="contact us" /></a></td>
		    <td>&nbsp;</td>
		    <td><a href="logout.php"><input type="button" class="button1" value="log out" /></a></td>

		</tr>
		</table>
		</div>
		<div class="fotbod"> <img src="homepics/vet.jpg" style="width: 46px;height: 160px;" /></div>
		<div class="stay">
		<pre class="PPP"> You can pay using </pre>  
		<img src="contactpics/pp.gif" style="width:300px ;height:100px; " align="center" />
		</div>
	 </div> 	
	 <div class="fot1">
	 <p class="P"> @ 2010 CARD HEAVEN.ALL RIGHTS ARE RESERVED. </p>	
	  </div>
 	  
	</body>
	
	
</html>
