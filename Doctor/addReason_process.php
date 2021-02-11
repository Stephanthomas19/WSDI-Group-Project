<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"href="view.css"/>
	<link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">

    <title>Avocado Medical Centre | Reason</title>
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
		
		if (isset($_POST['submit']) && !empty($_POST['trn']) && !empty($_POST['reason'])) {
			$trnlength = strlen($_POST['trn']);
			if($trnlength == 9) {
				
				$reason = $_POST['reason'];
				$trn = $_POST['trn'];
				
				$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
				
				$updateQuery = "UPDATE appointment SET ReasonForVisit= '$reason' WHERE PatientTRN = '$trn'";
				
				$selQuery = "SELECT PatientTRN, StaffID, Date, ReasonForVisit, Status FROM appointment WHERE PatientTRN = '$trn'";
				
				$update = mysqli_query($conn, $updateQuery) or die ("TRN doesn't exist");
			
				$view = mysqli_query($conn, $selQuery);
			
				while($rows = mysqli_fetch_assoc($view)) {
					echo "<tr>
							<td>".$rows['PatientTRN']."</td>
							<td>".$rows['StaffID']."</td>
							<td>".$rows['Date']."</td>
							<td>".$rows['ReasonForVisit']."</td>
							<td>".$rows['Status']."</td>
						</tr>";
					echo	"<h1>Reason Added !</h1>";
				}
				
				
			
				mysqli_close($conn);
			} else {
				
			}
		} else {
			echo "You must enter a TRN ";
			echo "<a href='AddReason.php'>Click here to try again</a>";
		}
		
		
		?>
		
	</table>

	
   
</body>
</html>