<?php

session_start();

	$_SESSION['trn'] =  $_POST['trn'];
	$_SESSION['fName'] =  $_POST['fName'];
	$_SESSION['lName'] =  $_POST['lName'];
	$_SESSION['appDate'] =  $_POST['appDate'];
	$_SESSION['appMade'] ="";
	
	$_SESSION['trnErr'] = $_SESSION['fNameErr'] =
    $_SESSION['lNameErr'] = $_SESSION['appDateErr'] = "";

	

if (isset($_POST['submit']) && !empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['appDate']) && !empty($_POST['trn'])) {
	if(substr($_POST['fName'], 0, 1) === strtoupper(substr($_POST['fName'], 0, 1))) {
			if(substr($_POST['lName'], 0, 1) === strtoupper(substr($_POST['lName'], 0, 1))) {
				$trnlength = strlen($_POST['trn']);
			if(( $_SESSION['appDate'] >=  $_SESSION['currentDay']) ){
				if($trnlength == 9) {
				
					$fName = $_POST['fName'];
					$lName = $_POST['lName'];
					$date = $_POST['appDate'];
					$trn = $_POST['trn'];
					
					

					$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
					
					$insertquery1 = "INSERT INTO appointment(PatientTRN, Date) VALUES ('$trn', '$date')";
					
					$insertquery2 = "INSERT INTO patient(PatientTRN, FirstName, LastName) VALUES ('$trn','$fName','$lName')";
					
					$insert1 = mysqli_query($conn, $insertquery1) or die ("Duplicate TRN");
					
					$insert2 = mysqli_query($conn, $insertquery2) or die ("Duplicate TRN");
					
					$_SESSION['appMade'] ="Appointment made";
					$_SESSION['trn'] = "";
					$_SESSION['fName'] ="";
					$_SESSION['lName'] = "";
					$_SESSION['appDate'] = "";
					header('Location: appointment.php');
					exit();
				
				} else {
					$_SESSION['trnErr'] = "TRN Error";
					header('Location: appointment.php');
					exit();
				}
			}else{
				$_SESSION['appDateErr'] = "Choose an appropriate date ";
				    header('Location: appointment.php');
					exit();
			}
			} else {
				$_SESSION['lNameErr'] = "Last Name Error";
				header('Location: appointment.php');
					exit();
			}
	} else {
		$_SESSION['fNameErr'] = "First Name Error";
		header('Location: appointment.php');
					exit();
	}
} else {
	echo "error";
	
}

?>