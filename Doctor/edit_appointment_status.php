<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avocado Medical Centre | Register</title>
    <link rel="stylesheet" type="text/css"href="register.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    
</head>
<body>
   <br></br>
    <div class="signUpMsgCont">
        <h1 class="greeting">Edit Appointment Status</h1>
        <form action="edit_appointment_process.php" method="post">
			<h2>Enter TRN of Patient</h2>
            <input type="number" name="trn" placeholder="TRN" class="credentials" required>
            <p class="errMsg"><?php echo $_SESSION['trnErr'] ?>  </p>
			<h2>Updated Status:</h2>
				<select name="type" class="credentials">
					<option value="Pending">Pending</option>
					<option value="Cancelled">Cancelled</option>
					<option value="Complete">Completed</option>
				</select>
            <button class="registerButt"  name="update">Update</button>
        </form>    
    </div>

</body>
</html>