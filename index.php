<?php
    
    session_start();
    $_SESSION['currentDay'] = date("Y-m-d");

    $_SESSION['trn'] = $_SESSION['fName'] =
    $_SESSION['lName'] = $_SESSION['appDate'] = "";

    $_SESSION['trnErr'] = $_SESSION['fNameErr'] =
    $_SESSION['lNameErr'] = $_SESSION['appDateErr'] = "";

    $_SESSION['appMade'] ="";

    $_SESSION['id'] = $_SESSION['email'] =
    $_SESSION['password'] = "";

    $_SESSION['idErr'] = $_SESSION['emailErr'] = $_SESSION['passwordErr'] = "";
   
    $_SESSION['patientArrival'] = "";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="index.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    <title>Avocado Medical Centre</title>
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Guest/mission.php">Mission Statement</a></li>
        <li><a href="Guest/aboutUs.php">About Us</a></li>
        <li><a href="Guest/services.php">Services</a></li>
        <li><a href="Guest/appointment.php">Appointment</a></li>
        <li><a href="Guest/contact.php">Contact</a></li>
    </ul>
    <div class="label">
        <img src="Images/caduceus.png" style="height:200px">
        <h5>Committed to the health of others</h5>
    </div>
    <button class="button"  onclick="window.location.href='Nurse/login.php';">Login</button>
    
</body>
</html>