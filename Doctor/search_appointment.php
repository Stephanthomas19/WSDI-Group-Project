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
        <h1 class="greeting">Personal Information</h1>
        <form action="search_appointment_process.php" method="post">
            <h2>Enter Patient's TRN to search for appointment</h2>
            <p class="errMsg"><?php echo $_SESSION['trnErr'] ?>  </p>
            <input type="number" name="trn" placeholder="TRN" class="credentials" required>
            <button class="registerButt"  name="search">Search</button>
        </form>    
    </div>

</body>
</html>