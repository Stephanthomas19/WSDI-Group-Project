<?php

if (isset($_POST['submit']) && !empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['psw']) && !empty($_POST['type'])) {
	$idlength = strlen($_POST['id']);
	if($idlength == 7) {
		if(substr($_POST['name'], 0, 1) === strtoupper(substr($_POST['name'], 0, 1))) {
			$empattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
			if (preg_match ($empattern, $_POST['email'])) {
				
				$id = $_POST['id'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$psw = $_POST['psw'];
				$type = $_POST['type'];
				
				$conn = mysqli_connect("localhost", "root", "", "avocadomc_db");
							
				$updatequery = "UPDATE staff SET Name='$name',Email='$email',Password='$psw',Type='$type' WHERE StaffID = '$id'";
							
				$result = mysqli_query($conn, $updatequery)or die ("could not connect");
							
				echo "<h1>Account updated</h1>";
				echo "</br><a href='admin.php'>click here to go back to main page</a>";
							
				mysqli_close($conn);
				
				
			} else {
				echo "error1";
			}
		} else {
			echo "error2";
		}
	} else {
		echo "error3";
	}
} else {
	echo "error4";
}

?>