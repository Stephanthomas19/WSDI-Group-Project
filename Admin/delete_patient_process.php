<?php

	session_start();
	$_SESSION['trnErr'] = "";

	if (isset($_POST['submit']) && !empty($_POST['trn'])) {
		$trnlength = strlen($_POST['trn']);
		if($trnlength == 9) {
			
			$trn = $_POST['trn'];
			
			$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
							
			$deletequery = "DELETE FROM patient WHERE PatientTRN = '$trn'";
							
			$result = mysqli_query($conn, $deletequery)or die ("TRN doesnt exist");
							

			
		} else {
			$_SESSION['trnErr'] = "Invalid TRN";
			header('Location: delete_patient.php');
			exit();
		}
	} else {
		
	}
?>