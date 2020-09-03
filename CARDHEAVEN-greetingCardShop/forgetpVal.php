<?php
session_start();
$user = 'root';
$password = '';
$database = 'CARDHEAVEN';
$con = mysqli_connect('localhost', $user, $password, $database) or die("unable to connect");
if (mysqli_connect_error()) {
	echo "error";
} else {
	
	echo "great work!!!!!!!";
	if (isset($_POST["uname"]) && isset($_POST["password2"]) && isset($_POST["password3"])) {
		$uname = $_POST["uname"];
		$pwd2 = $_POST["password2"];
		$pwd3 = $_POST["password3"];
echo $uname;
		$q1 = "SELECT user_name FROM userdetails WHERE user_name = '$uname' ";
		$result1 = mysqli_query($con, $q1);

		//check username exist
		if (mysqli_num_rows($result1) != 0) {
			//correct username
			//echo "Username already exists";
 //mail("tharukiamayasewwandi95@gmail.com","Test Email","hi");
				if ($pwd2 == $pwd3) {

					$q2 = "UPDATE userdetails SET password = '$pwd3' WHERE user_name = '$uname' ";

					if (mysqli_query($con, $q2)) {
						//pwsrd updated
						$_SESSION['forget_flag'] = 1;
						header("location: forgetp.php");
					} else {
						$_SESSION['forget_flag'] = 2;
						//echo $_SESSION['reset_flag'];
						header("location: forgetp.php");
					}

				} else {
					//pswd not matching
					$_SESSION['forget_flag'] = 3;
					//echo $_SESSION['reset_flag'];
					header("location: forgetp.php");
				}
			
		} else {
			//incorrect userName
			$_SESSION['forget_flag'] = 4;
			header("location: forgetp.php");
		}
	}
}
