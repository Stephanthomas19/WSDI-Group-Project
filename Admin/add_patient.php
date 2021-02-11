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
    <h1><?php echo $_SESSION['accCreated'] ?> </h1>
    <div class="formContainer">
    
    <div class="signUpMsgCont">
        <h1 class="greeting">Enter the Patients Info</h1>
        <form action="add_patient_process.php" method= "post">
            <div class="left">
                <input type="number" name="trn" placeholder="TRN" class="credentials" required>
                <p class="errMsg"><?php echo $_SESSION['trnErr'] ?> </p>
            </div>
            
            <div class="right">
    				<select name="title" class="credentials">
					<option value="Mr.">Mr.</option>
					<option value="Miss">Miss</option>
					<option value="Mrs.">Mrs.</option>
                </select>
                <p class="errMsg"></p>
            </div>    
            
           <div class="left">
            <input type="text" name="fname" placeholder="First Name" class="credentials" required>
            <p class="errMsg"><?php echo $_SESSION['fNameErr'] ?> </p>
            </div> 
            
            <div class="right">
             <input type="text" name="lname" placeholder="Last Name" class="credentials" required>
             <p class="errMsg"><?php echo $_SESSION['lNameErr'] ?> </p> 
            </div> 
                
            
            <div class="left">
             <input type="date" name="dob" placeholder="Date of Birth" class="credentials" required>
             <p class="errMsg"><?php echo $_SESSION['dobErr'] ?> </p> 
            </div>
            
            <div class="right">
             <input type="text" name="address" placeholder="Address" class="credentials" required>
             <p class="errMsg"><?php echo $_SESSION['addressErr'] ?> </p> 
            </div>
            
            <div class="left">
             <input type="text" name="telno" placeholder="TelNo." class="credentials" required>
             <p class="errMsg"><?php echo $_SESSION['telNumErr'] ?> </p> 
            </div>
            
            <div class="right">
             <input type="text" name="email" placeholder="Email" class="credentials" required>
             <p class="errMsg"><?php echo $_SESSION['emailErr'] ?> </p> 
            </div>
            
            <button class="registerButt"  name= "submit">Submit</button>
        </form>    
    </div>

    </div>

</body>
</html>

