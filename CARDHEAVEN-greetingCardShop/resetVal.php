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
		if( isset($_POST["password1"]) && isset($_POST["password2"]) && isset($_POST["password3"]) )
		{
			$pwd1=$_POST["password1"];
			$pwd2=$_POST["password2"];
			$pwd3=$_POST["password3"];
			
			$q1="SELECT password FROM userdetails WHERE user_name = '".$_SESSION['user_name']."' ";
			$result1=mysqli_query($con,$q1);
			$row=mysqli_fetch_array($result1);
			$db_pwd=($row['password']);
			//echo $db_pwd ;
			
			if($pwd1!=$db_pwd)
			{
				//unset($_SESSION['user_name']);
				$_SESSION['reset_flag']=1;
				echo $_SESSION['reset_flag'];
				//echo "current password is incoorrect";
				header("location: resetPwd.php");	// need to refresh login page- to show error msg
				
			}
			else {
				//unset($_SESSION['reset_flag']);
				 echo "current passwrd is correct ".$pwd2." ".$pwd3;
			
			
			 if($pwd2==$pwd3)
				  {
				 	//echo "password2 and password3 are equal!!";
					 $q2="UPDATE userdetails SET password = '$pwd3' WHERE password ='$pwd1' " ;
					 //$result2=mysqli_query($con,$q2);
					 if(mysqli_query($con,$q2)){
					 	$_SESSION['reset_flag']=2;
					 	//echo $_SESSION['reset_flag'];
						header("location: resetPwd.php");
					 } else {
					 	$_SESSION['reset_flag']=3;
						//echo $_SESSION['reset_flag'];
						header("location: resetPwd.php");
					 }
					 
				 }
else {
	//pswd not matching
	$_SESSION['reset_flag']=4;
	//echo $_SESSION['reset_flag'];
	header("location: resetPwd.php");
}
			}
			
		}
	}
