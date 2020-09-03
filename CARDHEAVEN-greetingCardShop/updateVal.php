<?php
session_start();
    $user='root';
$password='';
$database='CARDHEAVEN';
    $con=mysqli_connect('localhost', $user, $password, $database) or die("unable to connect");
	if (mysqli_connect_error())
	{
		echo "error";
	} else 
	{
		echo "great work!!!!!!!";
	
	}
	
	if( isset($_POST["uname"] ))
	{
		$uname=$_POST["uname"];
		
		$q1="SELECT * FROM userdetails WHERE user_name='$uname'";
			$result = mysqli_query($con,$q1);
			
			  if (mysqli_num_rows($result) != 0)
			  {
			      //echo "Username already exists";
			       $_SESSION['error_flag']=1;
				  header("location: update.php");
			  }
			
			  else
			  {
		
			$q2="UPDATE userdetails SET user_name = '$uname' WHERE user_name = '".$_SESSION['user_name']."' " ;
		
			  
		
			if(mysqli_query($con,$q2)){
				$_SESSION['user_name']=$uname;
				//echo "successfully updated";
				$_SESSION['error_flag']=2;
				header("location: update.php");
				//header("location: home.php");
			} else {
				//echo "not updated";
				$_SESSION['error_flag']=3;
				header("location: update.php");
			}
			
		}
		
	}