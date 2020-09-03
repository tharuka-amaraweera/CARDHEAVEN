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
	
	
	 if( isset($_POST["uname"]) && isset($_POST["password"]) )
	{
		$uname=$_POST["uname"];
		$password=$_POST["password"];
		
		$q1="SELECT password FROM userdetails WHERE user_name='$uname'" ;
		
		$result1=mysqli_query($con, $q1);
		
		if(mysqli_num_rows($result1)==0)
		{
		//echo "have to register";//redirect to login page with sighn up error
		$_SESSION['error_flag']=1;
		//header("location: loginError1.php");
		//echo $_SESSION['error_flag'];
		header("location: login.php");
		}
		
		else {
			//echo "user exist";
			$row=mysqli_fetch_array($result1);
			$db_pwd = ($row['password'] ) ;
			if($password!=$db_pwd)
			{
				$_SESSION['error_flag']=2;
				//header("location: loginError2.php");	
				header("location: login.php");	// need to refresh login page- to show error msg
			}
			else {
				unset($_SESSION['error_flag']);
				
				$_SESSION['user_name']=$uname;
				echo $_SESSION['user_name'];
				
				$q3="SELECT user_type FROM userdetails WHERE user_name='$uname'";
				$result2=mysqli_query($con, $q3);
				
				
				$r=mysqli_fetch_array($result2);
				$uType=($r['user_type'] ) ;
				
				 $_SESSION['login_status']= "login";
				
				 if($uType==1)
				 {
					 header("location: admin.php");
				 }
				 else {
					 header("location: home.php");
				 }
				
				
			}
		}
		
		
	}
	}
?>