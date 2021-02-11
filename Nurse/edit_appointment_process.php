<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"href="view.css"/>
	<link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">

    <title>Avocado Medical Centre | User Page</title>
</head>
<body >
    <div class = "center-me">
	<h1>Records</h1>
	<table border = '1px' cellpadding =  '10px'>
		<tr>
			<th>PatientTRN</th>
			<th>StaffID</th>
			<th>Date</th>
			<th>Reason For Visit</th>
			<th>Status</th>
		</tr>
		
		<?php
		
		if (isset($_POST['update']) && !empty($_POST['trn']) && !empty($_POST['type'])) {
			$trnlength = strlen($_POST['trn']);
			if($trnlength == 9) {
				
				$type = $_POST['type'];
				$trn = $_POST['trn'];
				
				$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
				
				$updateQuery = "UPDATE appointment SET Status= '$type' WHERE PatientTRN = '$trn'";
				
				$selQuery = "SELECT PatientTRN, StaffID, Date, ReasonForVisit, Status FROM appointment WHERE PatientTRN = '$trn'";
				
				$update = mysqli_query($conn, $updateQuery) or die ("could not connect");
			
				$view = mysqli_query($conn, $selQuery);
			
				while($rows = mysqli_fetch_assoc($view)) {
					echo "<tr>
							<td>".$rows['PatientTRN']."</td>
							<td>".$rows['StaffID']."</td>
							<td>".$rows['Date']."</td>
							<td>".$rows['ReasonForVisit']."</td>
							<td>".$rows['Status']."</td>
						</tr>";
				}
				
				
			
				mysqli_close($conn);
			} else {
				$_SESSION['trnErr'] = "Invalid TRN";
				header('Location: edit_appointment_status.php');
					exit();
			}
		} else {
			echo "You must enter a TRN ";
			echo "<a href='edit_appointment_status.php'>Click here to try again</a>";
		}
		
		
		?>
		
	</table>
	<h1>Status Updated !</h1>
	</div>

   
</body>
</html>