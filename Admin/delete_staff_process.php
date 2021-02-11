<?php

	session_start();
	$_SESSION['trnErr'] = "";

	if (isset($_POST['submit']) && !empty($_POST['id'])) {
		$idlength = strlen($_POST['id']);
		if($idlength == 7) {
			
			$id = $_POST['id'];
			
			$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
							
			$deletequery = "DELETE FROM staff WHERE StaffID = '$id'";
							
			$result = mysqli_query($conn, $deletequery)or die ("ID doesnt exist");
							
			echo "<h1>Account deleted</h1>";
			echo "</br><a href='admin.php'>click here to go back to main page</a>";
			
			
		} else {
			$_SESSION['trnErr'] = "Invalid TRN";
			header('Location: delete_staff.php');
			exit();
		}
	} else {
		echo "error";
	}
?>