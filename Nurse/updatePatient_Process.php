<?php
	session_start();
	$_SESSION['patientUpdated'] = "";
	$_SESSION['trnErr'] ="";
	$_SESSION['telNumErr']="";
	$_SESSION['emailErr'] ="";
	$_SESSION['addressErr']="";

	$_SESSION['trn'] = $_POST['trn'];
	$_SESSION['telNum'] = $_POST['telNum'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['address'] = $_POST['address'];
	
	if (isset($_POST['update']) && !empty($_POST['telNum']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['trn'])) {
		$phformat = "/([0-9]{3})-([0-9]{3})-([0-9]{4})/";
		if(preg_match($phformat, $_POST['telNum'])) {
			$empattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
			if (preg_match ($empattern, $_POST['email'])) {
				$trnlength = strlen($_POST['trn']);
				if($trnlength == 9) {
			
					$trn = $_POST['trn'];
					$newTelNum = $_POST['telNum'];
					$newEmail = $_POST['email'];
					$newAddress = $_POST['address'];
		
					$connection = mysqli_connect("localhost", "root", "", "avocadomc_db");
			
					$updatequery = "UPDATE patient SET Address= '$newAddress', TelNo= '$newTelNum', Email= '$newEmail' WHERE PatientTRN = '$trn'";
			
					mysqli_query($connection, $updatequery) or die ("could not connect");
			
					mysqli_close($connection);

									
					$_SESSION['trn'] = "";
					$_SESSION['telNum'] = "";
					$_SESSION['email'] = "";
					$_SESSION['address'] = "";
					$_SESSION['patientUpdated'] = "Patient Updated";
					header('Location: updatePatient.php');
					exit();
				} else {
					$_SESSION['trnErr'] = "Invalid TRN";
					header('Location: updatePatient.php');
					exit();
				}
			} else {
				$_SESSION['emailErr'] ="Invalid Email";
				header('Location: updatePatient.php');
				exit();
				
			}		
			
		} else {
			$_SESSION['telNumErr'] = "Invalid Phone Number";
			header('Location: updatePatient.php');
			exit();
		}
	} else {
		echo "please fill out form completely ";
		echo "<a href='updatePatient.php'>Click here to try again</a>";
	}
			
	
			
?>