<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form method="post">
	<fieldset>
		<legend>Details</legend>
			<div><label for="name">Name:</label><input type="text" id="name" name="name"></div>
			<div><label for="age">Age:</label><input type="number" id="age" name="age" min="18" max="150"</div>
	</fieldset>
</form>

</body>
</html>