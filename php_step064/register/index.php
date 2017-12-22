<style>
	[name="login"],
	[name="pass"],
	[name="submit"] {
		display: block;
		margin: 5px;
	}
	[name="pass"]{
		color: red;
	}
</style>
<form method="post" action="mod.php">
	<input type="text" name="login">
	<input type="password" name="pass">
	<input type="checkbox" name="check" id="checkbox">setcookie	
	<textarea col="3"></textarea>
	<input type="submit" name="submit">
	
</form>
