<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avocado Medical Centre | Search</title>
    <link rel="stylesheet" type="text/css"href="register.css">
    <link rel="stylesheet" href="https://use.typekit.net/bsm6rwg.css">
    
</head>
<body>
    <br></br>
    <div class="signUpMsgCont">
        <h1 class="greeting">Add Reason For Visit</h1>
        <form action="addReason_process.php" method="post">
			<h2>Enter Patient's TRN</h2>
            <input type="number" name="trn" placeholder="TRN" class="credentials" required>
			<h2>Enter Patient's Reason  for Visit</h2>
			<input type="text" name="reason" placeholder="Reason" class="credentials" required>
            <button class="registerButt"  name="submit">Register</button>
        </form>    
    </div>

</body>
</html>