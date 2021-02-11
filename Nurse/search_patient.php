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
    <br></br><br></br>
    <div class="signUpMsgCont">
        <h1 class="greeting">Search Patient</h1>
        <form action="search_patient_process.php" method="post">
			<h2>Enter Patient's first name</h2>
            <input type="text" name="fname" placeholder="First Name" class="credentials" required>
            <p class="errMsg"><?php echo $_SESSION['fNameErr'] ?>  </p>

            <button class="registerButt"  name="search">Search</button>
        </form>    
    </div>

</body>
</html>