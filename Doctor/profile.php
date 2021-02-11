<?php
 session_start();

 $_SESSION['passUpdated']="";
 $_SESSION['patientUpdated'] = "";
 $_SESSION['trnErr'] ="";
 $_SESSION['telNumErr']="";
 $_SESSION['emailErr'] ="";
 $_SESSION['addressErr']="";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="profile.css"/>
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    <title>Avocado Medical Centre | User Page</title>
</head>
<body style="background-color:rgb(52, 73, 94, 38%)">
    <nav class="general"> 
        <img src="../Images/notepad.png" class="notepad">
        <img src="../Images/notes.png" class="notes">
        <img src="../Images/folder.png" class="files">
        <img src="../Images/medicalfiles.png" class="medicalFiles">
    </nav>
    
    <div class="container">
        <div class="schedule">
          <a href="../Admin/calendar.php">    
            <img src="../Images/calendarHeading.png"class="calendarHeading">
            <img src="../Images/cal.png" class="calendar">   
          </a>
            <a href= "viewAppointments.php"><img src="../Images/appointments.png" class="appointments"></a>
         
        </div>
        
        <div class="details">
            <h1 class="userName"><?php echo $_SESSION['type']; ?></h1>
				<button class="actionButt" onclick="window.location.href='update_password.php';">Change Password</button>
				<button class="actionButt" onclick="window.location.href='updatePatient.php';">Update Patient</button>
				<button class="actionButt" onclick="window.location.href='search_patient.php';">Search Patient</button>
				<button class="actionButt" onclick="window.location.href='edit_appointment_status.php';">Edit Status</button>
				<button class="actionButt" onclick="window.location.href='register.php';">Register Patient</button>
				<button class="actionButt" onclick="window.location.href='search_appointment.php';">Search Appointment</button>
            
        </div>
    </div>

   
</body>
</html>


