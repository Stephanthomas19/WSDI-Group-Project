<?php
	session_start();
	
	$id = $_SESSION['id'];
	
	if (isset($_POST['update']) && !empty($_POST['password'])) {
		
		$newPassword = $_POST['password'];
		
		$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
		
		$query = "UPDATE staff SET Password = '$newPassword' WHERE StaffID = '$id'";
		
		mysqli_query($conn, $query)or die ("could not connect");
		mysqli_close($conn);
		

		$_SESSION['passUpdated'] = "Password Updated ";
		header('Location: update_password.php');
		exit();
			
	} else {
		
	}
			
	
			
?>