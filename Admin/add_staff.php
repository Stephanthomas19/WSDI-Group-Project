<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="admin.css"/>
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Avocado Medical Centre | User Page</title>
</head>
<body style="background-color:rgb(52, 73, 94, 38%)">
    <nav class="general"> 
        <p>Administrator</p>
    </nav>
    
    <ul>
        <li><a href="add_user.php"  class="active">Add User</a></li>
        <li><a href="edit_usr.php">Edit User</a></li>
        <li><a href="delete_usr.php">Delete User</a></li>
    </ul>

    <div class="formContainer">
    <div class="signUpMsgCont">
        <h1 class="greeting">Enter the Staff Member's Info</h1>
        <form action="add_staff_process.php" method= "post" class="staff">
            
            <input type="number" name="id" placeholder="Staff ID" class="credentials" required>
                <p class="errMsg"><?php echo $_SESSION['idErr'] ?> </p>

            <input type="text" name="name" placeholder="Name" class="credentials" required>
                 <p class="errMsg"><?php echo $_SESSION['nameErr'] ?> </p>

            <input type="text" name="email" placeholder="Email" class="credentials" required>
                <p class="errMsg"><?php echo $_SESSION['emailErr'] ?> </p>

            <input type="password" name="psw" placeholder="Password" class="credentials" required>
                 <p class="errMsg"><?php echo $_SESSION['passWordErr'] ?> </p>

				<select name="type" class="credentials">
					<option value="Administrator">Administrator</option>
					<option value="Doctor">Doctor</option>
					<option value="Nurse">Nurse</option>
                </select>
                <p class="errMsg"> </p>
                
            <button class="staffButt"  name= "submit">Submit</button>
        </form>    
    </div>
    </div>
     
   
</body>
</html>

