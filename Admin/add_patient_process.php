<?php

  session_start();
	$_SESSION['trnErr'] ="";
	$_SESSION['fNameErr']="";
	$_SESSION['lNameErr'] ="";
	$_SESSION['dobErr']="";
	$_SESSION['addressErr']="";
	$_SESSION['phoneNumErr'] ="";
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
							
							$insertquery = "INSERT INTO patient (PatientTRN, Title, FirstName, LastName, DateOfBirth, Address, TelNo, Email) VALUES ('$trn','$title','$fname','$lname','$dob','$address','$telno','$email')";
							
							$result = mysqli_query($conn, $insertquery)or die ("duplicate TRN");
							
							$_SESSION['accCreated'] = "Account Created";
							
							mysqli_close($conn);
							
							
						} else {
							$_SESSION['emailErr'] ="Invalid Email";
							header('Location: add_patient.php');
							exit();
						}
					} else {
						$_SESSION['telNumErr'] = "Invalid Phone Number ";
						header('Location: add_patient.php');
						exit();
					}
				} else {
					$_SESSION['lNameErr'] = "Invalid Last Name";
					header('Location: add_patient.php');
					exit();
				}
			} else {
				$_SESSION['fNameErr'] = "Invalid First Name";
				header('Location: add_patient.php');
				exit();
			}
		} else {
			$_SESSION['trnErr'] = "Invalid TRN";
			header('Location: add_patient.php');
			exit();
		}
	} else {
		
	}
?>