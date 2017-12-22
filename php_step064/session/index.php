<?php
// Start the session
//session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green". "\n";
$_SESSION["favanimal"] = "cat". "\n";
echo $_SESSION["favcolor"];
echo '<hr>'; 
echo $_SESSION["favanimal"];

?>



</body>
</html>