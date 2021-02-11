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
            <h2> Sign In </br>Invalid Login, Please try again</h2>
            <div class="loginForm">
                <input type="text" name="id" placeholder=" ID" class="credentials">
                <input type="email" name="email" placeholder=" Email" class="credentials">
                <input type="password" name="password" placeholder=" Password" class="credentials">
                <button class="signInButt" name="signIn">Sign In </button>
            </div>
			<div class = "loginForm">
				<label for "type">Login as:</label>
						<select name="type">
							<option value="Admin">Admin</option>
							<option value="Doctor">Doctor</option>
							<option value="Nurse">Nurse</option>
						</select>
			</div>
        </form>
    </div>    
</body>
</html>