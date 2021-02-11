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
        <li><a href="edit_usr.php" >Edit User</a></li>
        <li><a href="delete_usr.php" class="active">Delete User</a></li>
    </ul>

    <div class="container">
    <div class="signUpMsgCont">
        <h1>Delete Staff Account</h1>
        <br></br>
		<h3 style="text-align:center;">Enter staff member's ID number</h3>
        <form action="delete_staff_process.php" method= "post">
            <input type="number" name="id" placeholder="ID" class="credentials" style="margin-left:470px">
            <p class="errMsg" style="margin-left:550px;"><?php echo $_SESSION['trnErr'] ?> </p>
            <button class="registerButt"  name= "submit" style="margin-left:520px">Submit</button>
        </form>    
    </div>

    </div>

    

</body>
</html>

