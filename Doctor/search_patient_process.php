<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css"href="view.css"/>
	<link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">

    <title>Avocado Medical Centre | User Page</title>
</head>
<body>
    <div class = "center-me">
	<h1>Records</h1>
	<table border = '1px' cellpadding =  '10px' style="margin-left:200px">
		<tr>
			<th>PatientTRN</th>
			<th>Title</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>Address</th>
			<th>TelNo.</th>
			<th>Email</th>
		</tr>
		
		<?php
			
			if (isset($_POST['search']) && !empty($_POST['fname'])) {
				if(substr($_POST['fname'], 0, 1) === strtoupper(substr($_POST['fname'], 0, 1))) {
					
					$fname = $_POST['fname'];
					
					$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
			
					$selQuery = "SELECT PatientTRN, Title, FirstName, LastName, DateOfBirth, Address, TelNo, Email FROM patient WHERE FirstName = '$fname'";
			
					$view = mysqli_query($conn, $selQuery);
			
					while($rows = mysqli_fetch_assoc($view)) {
						echo "<tr>
								<td>".$rows['PatientTRN']."</td>
								<td>".$rows['Title']."</td>
								<td>".$rows['FirstName']."</td>
								<td>".$rows['LastName']."</td>
								<td>".$rows['DateOfBirth']."</td>
								<td>".$rows['Address']."</td>
								<td>".$rows['TelNo']."</td>
								<td>".$rows['Email']."</td>
							</tr>";
					}
				} else {
					$_SESSION['fNameErr'] = "Must begin with a Capital Letter ";
					header('Location: search_patient.php');
					exit();
					
				}
			} else {
				
			}
			
			mysqli_close($conn);
		?>
		
	</table>
	</div>

   
</body>
</html>