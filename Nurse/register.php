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
            <h1 class="patientLogged"><?php echo $_SESSION['patientArrival'] ?>  </h1>
    <br></br>
    <div class="signUpMsgCont">
        <h1 class="greeting">Log Pateint</h1>
        <form action="register_validation.php" method = "post">
            <input type="number" name="trn" placeholder=" TRN" class="credentials" required>
            <p class="errMsg"><?php echo $_SESSION['trnErr'] ?>  </p>

			<h3>Enter Date of Arrival</h3>
			<input type="date" name="date" placeholder="Date of Arrival" class="credentials" required>
            <button class="registerButt"  name= "register">Register</button>
        </form>    
    </div>

</body>
</html>