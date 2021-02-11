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
        <h1 class="passChanged"><?php echo $_SESSION['patientUpdated'] ?>  </h1>
    <br></br>

    <div class="signUpMsgCont">
        <h1 class="greeting">Update Patient Contact Info</h1>
        <form action="updatePatient_Process.php" method="post">
            <h3>Enter the TRN for the patient you wish to update</h3>
            
            <input type="number" name="trn" placeholder="Patient's TRN" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['trn']); ?>">
                <p class="errMsg"><?php echo $_SESSION['trnErr'] ?>  </p>
            
         
            <h3>Enter Patient's new contact info</h3>
            <input type="text" name="telNum" placeholder="Telphone Number" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['telNum']); ?>">
                <p class="errMsg"><?php echo $_SESSION['telNumErr'] ?>  </p>

            <input type="text" name="email" placeholder="Email Address" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['email']); ?>">
                <p class="errMsg"><?php echo $_SESSION['emailErr'] ?>  </p>

            <input type="text" name="address" placeholder="Mailing Address" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['address']); ?>"> 
                <p class="errMsg"><?php echo $_SESSION['addressErr'] ?>  </p>

            <button class="registerButt"  name="update">Update</button>
        </form>    
    </div>

</body>
</html>