<?php

session_start();
$_SESSION['id'] = $_POST['id'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];



$_SESSION['idErr'] = $_SESSION['emailErr'] = $_SESSION['passwordErr'] = "";
   
    


if (isset($_POST['signIn']) && !empty($_POST['id']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['type'])) {
	$idlength = strlen($_POST['id']);
	if($idlength == 7) {
		$empattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
		if (preg_match ($empattern, $_POST['email'])) {
			
			$_SESSION['type'] = $_POST['type'];
			$_SESSION['id'] = $_POST['id'];
			$usrid = $_POST['id'];
			$usremail = $_POST['email'];
			$usrpw = $_POST['password'];
			
			$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
			
			switch ($_POST['type']) {
				case "Admin" :
					$adminQuery = "SELECT StaffID, Name, Email, Password, Type FROM staff WHERE StaffID = '$usrid' AND Email = '$usremail' AND Password = '$usrpw' AND Type = 'Administrator'";    
					$result = mysqli_query($conn, $adminQuery);
				
					if(mysqli_num_rows($result) == 1) {
						header("Location: ../Admin/admin.php");
						exit();
					} else {
						
						$_SESSION['passwordErr'] = "Invalid Email or Password";
						header("Location: login.php");
						exit();
					}
					mysqli_close($conn);
					break;
				case "Doctor" :
					$doctorQuery = "SELECT StaffID, Name, Email, Password, Type FROM staff WHERE StaffID = '$usrid' AND Email = '$usremail' AND Password = '$usrpw' AND Type = 'Doctor'";    
					$dresult = mysqli_query($conn, $doctorQuery);
				
					if(mysqli_num_rows($dresult) == 1) {
						header("Location: ../Doctor/profile.php");
						exit();
					} else {
						header("Location: login.php");
						exit();
					}
					mysqli_close($conn);
					break;
				case "Nurse" :
					$nurseQuery = "SELECT StaffID, Name, Email, Password, Type FROM staff WHERE StaffID = '$usrid' AND Email = '$usremail' AND Password = '$usrpw' AND Type = 'Nurse'";    
					$nresult = mysqli_query($conn, $nurseQuery);
				
					if(mysqli_num_rows($nresult) == 1) {
						header("Location: profile.php");
						exit();
					} else {
						header("Location: login.php");
						exit();
					}
					mysqli_close($conn);
					break;
				default :
					mysqli_close($conn);
					header("Location: login.php");
					exit();
					break;
			}
		} else {
			$_SESSION['emailErr'] = "Invalid Email";
			header("Location: login.php");
			mysqli_close($conn);
			exit();
		}
	} else {
		$_SESSION['idErr'] = "Invalid ID"; 
		header("Location: login.php");
		mysqli_close($conn);
		exit();
	}	
} else {
	header("Location: login.php");
	mysqli_close($conn);
	exit();
}
?>