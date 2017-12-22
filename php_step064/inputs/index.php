<form method="post">
	<input type="text" name="name" id="name-id"><br>
	<input type="password" name="password" id="password-id"><br>
	<input type="date" name="date" id="date-id"><br>
	<textarea type="date" name="date" id="textarea-id"></textarea><br>
	<input type="radio" name="radio" id="radio-id"><br>
	<input type="checkbox" name="checkbox" id="checkbox-id"><br>
	<input type="submit" name="submit" id="submit-id"><br>
</form>
<?php
require 'functionsLab.php';

$name = html($_POST['name']);
echo $name;
echo '<pre>';
print_r ($_SERVER);
?>