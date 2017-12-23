<?php session_start(); ?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Название страницы</title>
    <style>
		form {
			background-color: gray;
			width: 300px;
			padding: 10px
		}
        input {
            border: 1px white solid;
            border-radius: 2px;
            padding: 0 5px;
			display: block;
			width: 95%;
			height: 30px;
			margin-top: 5px;
        }

        form input.error {
            border-color: red;
        }
        form input.error::placeholder {
            color: red;
        }
    </style>
</head>
<body>

	<form action="mod.php" method="post">
		<input type="text" name="firstName" placeholder="First Name" 
		value="<?php if ($_SESSION['error_first'] !== 'error') {
		echo $_SESSION['firstname'];
		} else if ($_SESSION['error_first'] == 'error') {
		echo "";
		} 
		if (!isset($_SESSION['error_first'])) {
			echo "";
		}  ?>" 
		class="<?php if (isset($_SESSION['error_first'])) {echo $_SESSION['error_first'];} ?>">
		<input type="text" name="lastName" placeholder="Last Name" value="<?php //echo $_SESSION['lastname']?>" class="<?php if (isset($_SESSION['error_last'])) {echo $_SESSION['error_last'];} ?>">
		<input type="email" placeholder="E-mail" name="email" class="<?php if (isset($_SESSION['error_email'])) {echo $_SESSION['error_email'];} ?>">
		<input type="submit" name="ok">
	</form>

</body>
</html>
<?php// session_destroy() ?>
