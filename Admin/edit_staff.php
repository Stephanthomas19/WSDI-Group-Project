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
        <li><a href="add_user.php">Add User</a></li>
        <li><a href="edit_usr.php" class="active">Edit User</a></li>
        <li><a href="delete_usr.php">Delete User</a></li>
    </ul>

    <div class="container">
    <div class="signUpMsgCont">
        <h1 class="greeting">Edit Staff Info</h1>
        <form action="edit_staff_process.php" method= "post">
			<h3>Enter ID of the Staff member who's info you wish to update</h3>
            <input type="number" name="id" placeholder="TRN" class="credentials">
            <p class="errMsg"><?php echo $_SESSION['trnErr'] ?> </p>

            <h3 style="margin-left:120px;">Enter updated info</h3>
            
            
            <div class="left">
                <input type="text" name="name" placeholder="Name" class="credentials">
                <p class="errMsg"><?php echo $_SESSION['nameErr'] ?> </p>
                
            </div>

            <div class="right">
            <input type="text" name="email" placeholder="Email" class="credentials">
            <p class="errMsg"><?php echo $_SESSION['emailErr'] ?> </p>
            </div>
            
            <div class="right">
            <input type="text" name="psw" placeholder="Password" class="credentials"> 
            <p class="errMsg"><?php echo $_SESSION['passwordErr'] ?> </p>

            </div>
            
            <div class="right">
            <select name="type" class="credentials">
					<option value="Administrator">Administrator</option>
					<option value="Doctor">Doctor</option>
					<option value="Nurse">Nurse</option>
                </select>
            </div>    
            <button class="Button"  name= "submit">Submit</button>
        </form>    
    </div>    
    
    </div>

    

</body>
</html>

