<?php

	if(isset($_POST['submit'])){

		$dob 		=  $_POST['mydob'];
	

		if($dob == ""){
			echo "Null submission...";
		}else{
			echo $dob;
			
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>DOB Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>DOB</legend>
			dob: 		<input type="dob" name="mydob" value="<?php echo $dob; ?>"> <br>
			
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>