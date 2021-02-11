<?php
 
 session_start();
 $_SESSION['emailErr'] ="";
 $_SESSION['nameErr'] = "";
 $_SESSION['idErr'] = "";

if (isset($_POST['submit']) && !empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['psw']) && !empty($_POST['type'])) {
	$idlength = strlen($_POST['id']);
	if($idlength == 7) {
		if(substr($_POST['name'], 0, 1) === strtoupper(substr($_POST['name'], 0, 1))) {
			$empattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
			if (preg_match ($empattern, $_POST['email'])) {
				
				$id = $_POST['id'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$psw = $_POST['psw'];
				$type = $_POST['type'];
				
				$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
							
				$insertquery = "INSERT INTO staff(StaffID, Name, Email, Password, Type) VALUES ('$id','$name','$email','$psw','$type')";
							
				$result = mysqli_query($conn, $insertquery)or die ("duplicate id");
							
				echo "<h1>Account created</h1>";
							
				mysqli_close($conn);
				
				
			} else {
				$_SESSION['emailErr'] ="Invalid Email";
				header('Location: add_staff.php');
				exit();
			}
		} else {
			$_SESSION['nameErr'] = "Invalid Name";
			header('Location: add_staff.php');
			exit();
		}
	} else {
		$_SESSION['idErr'] = "Invalid ID";
		header('Location: add_staff.php');
		exit();
	}
} else {
	echo "error";
}

?>