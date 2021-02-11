<?php

	session_start();
	$_SESSION['trnErr'] = "";
	$_SESSION['fName'] = "";
	$_SESSION['lName'] = "";
	$_SESSION['phoneNumErr'] = "";
	$_SESSION['emailErr'] = "";




	if (isset($_POST['submit']) && !empty($_POST['trn']) && !empty($_POST['title']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['dob']) && !empty($_POST['address']) && !empty($_POST['telno']) && !empty($_POST['email'])) {
		$trnlength = strlen($_POST['trn']);
		if($trnlength == 9) {
			if(substr($_POST['fname'], 0, 1) === strtoupper(substr($_POST['fname'], 0, 1))) {
				if(substr($_POST['lname'], 0, 1) === strtoupper(substr($_POST['lname'], 0, 1))) {
					$phformat = "/([0-9]{3})-([0-9]{3})-([0-9]{4})/";
					if(preg_match($phformat, $_POST['telno'])) {
						$empattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
						if (preg_match ($empattern, $_POST['email'])) {
							
							$trn = $_POST['trn'];
							$title = $_POST['title'];
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$dob = $_POST['dob'];
							$address = $_POST['address'];
							$telno = $_POST['telno'];
							$email = $_POST['email'];
							
							$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
							
							$updatequery = "UPDATE patient SET Title='$title',FirstName='$fname',LastName='$lname',DateOfBirth='$dob',Address='$address',TelNo='$telno',Email='$email' WHERE PatientTRN = '$trn'";
							
							$result = mysqli_query($conn, $updatequery)or die ("could not connect");
							
							echo "<h1>Account updated</h1>";
							echo "</br><a href='admin.php'>click here to go back to main page</a>";
							
							mysqli_close($conn);
							
							
						} else {
							$_SESSION['emailErr'] = "Invalid Email";
							header('Location: edit_patient.php');
							exit();
						}
					} else {
						$_SESSION['phoneNumErr'] = "Invalid Phone Num";
						header('Location: edit_patient.php');
						exit();
					}
				} else {
					$_SESSION['lName'] = "Invalid Last Name";
					header('Location: edit_patient.php');
					exit();
				}
			} else {
				$_SESSION['fName'] = "Invalid First Name";
				header('Location: edit_patient.php');
				exit();
			}
		} else {
			$_SESSION['trnErr'] = "Invalid TRN";
			header('Location: edit_patient.php');
			exit();
		}
	} else {
		
	}
?>