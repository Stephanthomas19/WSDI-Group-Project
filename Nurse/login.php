<!DOCTYPE html>

<?php
	session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="login.css"/>
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    <title>Avocado Medical Centre | Login</title>
</head>
<body>

<ul>
  <li><a href="../index.php">Home</a></li>
  <li><a href="../Guest/mission.php">Mission Statement</a></li>
  <li><a href="../Guest/aboutUs.php">About Us</a></li>
  <li><a href="../Guest/services.php">Services</a></li>
  <li><a href="../Guest/appointment.php">Appiontment</a></li>
  <li><a href="../Guest/contact.php">Contact</a></li>
</ul>

    <div class="loginFormCont">   
        <form action="login_validation.php" method="post" >
            <h1>Avocado Medical Centre</h1>
            <h2> Sign In </h2>
            <div class="loginForm">
                <input type="text" name="id" placeholder=" ID" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['id']); ?>" >
                    <p class="errMsg"><?php echo $_SESSION['idErr'] ?>  </p>
                <input type="email" name="email" placeholder=" Email" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['email']); ?>">
                    <p class="errMsg"><?php echo $_SESSION['emailErr'] ?>  </p>
                <input type="password" name="password" placeholder=" Password" class="credentials" required value="<?php echo htmlspecialchars($_SESSION['password']); ?>">
                    <p class="errMsg"><?php echo $_SESSION['passwordErr'] ?>  </p>
                <div class = "loginForm">
				    <h2>Login as:</h2>
						<select name="type" class="credentials">
							<option value="Admin">Admin</option>
							<option value="Doctor">Doctor</option>
							<option value="Nurse">Nurse</option>
						</select>
			    </div>
                <button class="signInButt" name="signIn">Sign In </button>
            </div>
			
        </form>
    </div>    
</body>
</html>