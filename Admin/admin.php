<?php

session_start();
$_SESSION['dobErr'] ="";
$_SESSION['accCreated']="";
$_SESSION['nameErr']="";
$_SESSION['passWordErr']="";
$_SESSION['trnErr']="";


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
  <div style="margin-left:550px">  
    <nav class="general"> 
        <p>Administrator</p>
    </nav>
    
    <ul>
        <li><a href="add_user.php">Add User</a></li>
        <li><a href="edit_usr.php">Edit User</a></li>
        <li><a href="delete_usr.php">Delete User</a></li>
    </ul>
  </div>
   

</body>
</html>

