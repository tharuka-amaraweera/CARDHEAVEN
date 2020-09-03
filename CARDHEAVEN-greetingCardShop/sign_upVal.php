<?php

session_start();

$user='root';
$password='';
$database='CARDHEAVEN';
    $con=mysqli_connect('localhost', $user, $password, $database) or die("unable to connect");
	if (mysqli_connect_error()){
		echo "error";
	} else {
		echo "great work!!!!!!!";
	}
	


    if( isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["uname"]) &&  isset($_POST["email"]) &&  isset($_POST["num"])
	&& isset($_POST["add"]) && isset($_POST["password"]) && isset($_POST["cpassword"])
	&& isset($_POST["gender"]) && isset($_POST["month"]) && isset($_POST["day"]) && isset($_POST["year"]))
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$uname=$_POST["uname"];
		$email=$_POST["email"];
		$num=$_POST["num"];
		$add=$_POST["add"];
		$password=$_POST["password"];
		$cpassword=$_POST["cpassword"];
		$gender=$_POST["gender"];
		$month=$_POST["month"];
		$day=$_POST["day"];
		$year=$_POST["year"];
		
		if($password==$cpassword)
		{
			$q1="SELECT * FROM userdetails WHERE user_name='$uname'";
			$result = mysqli_query($con,$q1);
			
			  if (mysqli_num_rows($result) != 0)
			  {
			       //echo "Username already exists";
			      
			      $_SESSION['signup_flag']=1;
				 //echo $_SESSION['error_flag'];
				  header("location: sign_up.php");
			  }
			
			  else
			  {
			 
			$q="INSERT INTO userdetails(fname,lname, user_name, email,mob_num,address,password,gender,MOB,DOB,YOB)
			VALUES('$fname','$lname','$uname', '$email',$num,'$add','$password','$gender','$month',$day,$year)";

				if(mysqli_query($con,$q))
			{
				//echo "you signed up succesfully!!!";
				$_SESSION['signup_flag']=2;
				 //echo $_SESSION['error_flag'];
				  header("location: login.php");
				
			}
				else
				{
//echo "not succesfully signed up!!!";
					$_SESSION['signup_flag']=3;
					 //echo $_SESSION['signup_flag'];
				  header("location: sign_up.php");				
			  }
			

		}
		}
		
		
	
		else {
			//echo "two passwords are not matching";
			$_SESSION['signup_flag']=4;
			 //echo $_SESSION['signup_flag'];
				  header("location: sign_up.php");
		}

}

mysqli_close($con);
?>