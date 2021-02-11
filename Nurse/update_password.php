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
        <h1 class="passChanged"><?php echo $_SESSION['passUpdated'] ?>  </h1>
    <br></br>
    <div class="signUpMsgCont">
      
        <h1 class="greeting">Update Password</h1>
        <form action="update_password_process.php" method="post">
			<h2>Enter new password</h2>
            <input type="text" name="password" placeholder="New Password" class="credentials" required>
            <button class="registerButt"  name="update">Update</button>
        </form>    
    </div>

</body>
</html>