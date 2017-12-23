<?php
    /*session_start();
    if ( isset( $_SESSION['firstname'] ) ) {
        include 'home.php';
    }
    else {
        include 'autch.php';
    }*/
?>

<?php session_start(); ?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Название страницы</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-block {
            width: 400px;
            min-height: 200px;
            background: #99d39f;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px 0 15px;
        }

        .form-block form {
            width: 100%;
            position: relative;
        }

        .form-block input {
            width: 100%;
            height: 35px;
        }

        .form-block input[type=submit] {
            height: auto;
            margin-top: 15px;
            margin-bottom: 15px;
            font-size: 18px;
            text-transform: uppercase;
            color: white;
            background: orangered;
            border: none;
            padding: 10px 0 10px 0;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type=text] {
            border: 1px white solid;
            border-radius: 5px;
            padding: 0 5px;
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

<div class="wrapper">
    <div class="form-block">
        <form action="mod.php" method="post">
            <input type="text" name="firstName" placeholder="First Name" class="<?php if (isset($_SESSION['error_email'])) {echo $_SESSION['error_email'];} ?>">
            <input type="text" name="lastName" placeholder="Last Name" class="<?php if (isset($_SESSION['error_email'])) {echo $_SESSION['error_email'];} ?>">
            <input type="text" placeholder="E-mail" name="email" class="<?php if (isset($_SESSION['error_email'])) {echo $_SESSION['error_email'];} ?>">
            <input type="submit" value="Подписаться">
        </form>
    </div>
</div>

</body>
</html>
<?php session_destroy() ?>