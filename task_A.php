<?php

	if(isset($_POST['submit'])){

		$bg		=  $_POST['mybg'];
	

		if($bg == ""){
			echo "Null submission...";
		}else{
			echo $bg;
			
		}
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Blood group Input field</title>
</head>
<body>
	<form method="POST" action="anotherpage.php">
		<fieldset>
			<legend>Blood Group</legend>
			<tr>
					<td>bg: </td>
					<td>  
						<select name="bg">
							<option value=""></option>
							<option value="">A+</option>
							<option value="">O-</option>
							<option value="" >B+</option>
						</select>
					</td>
				</tr>
		</fieldset>
	</form>
</body>
</html>