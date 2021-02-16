<?php

	if(isset($_POST['submit'])){

		$gender		=  $_POST['mygender'];
	

		if($gender == ""){
			echo "Null submission...";
		}else{
			echo $gender;
			
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender Input field</title>
</head>
<body>
	<form method="POST" action="anotherpage.php">
		<fieldset>
			<legend>GENDER</legend>
			<tr>
					<td>Gender: </td>
					<td>  
						<input type="radio" name="gender"> Male
						<input type="radio" name="gender"> Female
						<input type="radio" name="gender"> Other 
					</td>
				</tr>
		</fieldset>
	</form>
</body>
</html>