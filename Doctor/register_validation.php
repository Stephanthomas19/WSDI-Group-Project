<?php

session_start();
$_SESSION['trnErr'] = "";
if (isset($_POST['register']) && !empty($_POST['date']) && !empty($_POST['trn'])) {
	$trnlength = strlen($_POST['trn']);
	if($trnlength == 9) {
	
		$date = $_POST['date'];
		$trn = $_POST['trn'];
		
		$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
		
		$updatequery = "UPDATE appointment SET DateOfArrival='$date' WHERE PatientTRN = '$trn'";
		
		$update = mysqli_query($conn, $updatequery) or die ("Duplicate TRN");
		
		$_SESSION['patientArrival'] = "Patient Arrival Logged";
		header('Location: register.php');
		exit();
	
	
	} else {
		$_SESSION['trnErr'] = "Invalid TRN";
		header('Location: register.php');
		exit();
	}
} else {
	echo "error";
	
}

?>