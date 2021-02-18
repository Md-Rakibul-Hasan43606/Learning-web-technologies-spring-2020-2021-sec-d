<!DOCTYPE html>
<html>
<head>
	<title>Blood group Input</title>
</head>
<body>
	<form action="#" method="post">
		<fieldset>
			<legend>BLOOD GROUP</legend>
			<table>
				<tr>
					<td>
						<select name="blood" >
							<option value="A+" <?php echo (isset($_POST['blood']) && $_POST['blood'] == 'A+') ? 'selected' : ''; ?>>A+</option>
							<option value="A-" <?php echo (isset($_POST['blood']) && $_POST['blood'] == 'A-') ? 'selected' : ''; ?>>A-</option>
							<option value="B+" <?php echo (isset($_POST['blood']) && $_POST['blood'] == 'B+') ? 'selected' : ''; ?>>B+</option>
							<option value="B-" <?php echo(isset($_POST['blood']) && $_POST['blood'] == 'B-')? 'selected': '' ?>>B-</option>
							<option value="O+" <?php echo(isset($_POST['blood']) && $_POST['blood'] == 'O+')? 'selected': '' ?>>O+</option>
							<option value="O-" <?php echo(isset($_POST['blood']) && $_POST['blood'] == 'O-')? 'selected': '' ?>>O-</option>
							<option value="AB+" <?php echo(isset($_POST['blood']) && $_POST['blood'] == 'AB+')? 'selected': '' ?>>AB+</option>
							<option value="AB-" <?php echo(isset($_POST['blood']) && $_POST['blood'] == 'AB-')? 'selected': '' ?>>AB-</option>
						</select>
						<hr width="300px" />
						<input type="submit" name="submit" value="submit">
					</td>
				</tr>
			</table>
			
		</fieldset>
	</form>
</body>
</html>