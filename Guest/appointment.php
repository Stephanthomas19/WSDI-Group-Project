<?php
    
    session_start();
    
   
				
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avocado Medical Centre | Appointment</title>
    <link rel="stylesheet" type="text/css"href="appointment.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    
</head>
<body>

<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="mission.php">Mission Statement</a></li>
  <li><a href="aboutUs.php">About Us</a></li>
  <li><a href="services.php">Services</a></li>
  <li><a class="active" href="appointment.php">Appiontment</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>
    <br></br>
        <h1 class="appMade"><?php echo $_SESSION['appMade'] ?>  </h1>
    <br></br>

    <div class="signUpMsgCont">
        <h1 class="greeting">Hello, Friend!</h1>
        <p class="detailMsg">Enter your personal details and start your healthcare journey with us</p>
        <form action="appointment_validation.php" method="post">
			<input type="number" name="trn" placeholder="TRN" class="credentials" required  value="<?php echo htmlspecialchars($_SESSION['trn']); ?>">
                <p class="errMsg"><?php echo $_SESSION['trnErr'] ?>  </p>

            <input type="text" name="fName" placeholder=" First Name" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['fName']); ?>">
                <p class="errMsg"><?php echo $_SESSION['fNameErr'] ?>  </p>

            <input type="text" name="lName" placeholder=" Last Name" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['lName']); ?>">
                <p class="errMsg"><?php echo $_SESSION['lNameErr'] ?>  </p>

            <input type="date" name="appDate" placeholder="Appointment Date" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['appDate']); ?>">
                <p class="errMsg"><?php echo $_SESSION['appDateErr'] ?>  </p>

            <button class="registerButt" name="submit">Register</button>
        </form>    
    </div>

</body>
</html>