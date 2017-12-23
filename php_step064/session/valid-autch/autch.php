<?php //session_start()?>
<style>
    form {
        width: 300px;
        height: auto;
        margin: 0 auto;
    }
    input {
        display: block;
        margin-bottom: 10px;
        width: 100%;
        border: 1px solid gainsboro;
        border-radius: 4px;
        height: 30px;
        padding: 0 15px;
    }
</style>

<form action="mod.php" method="post">
    <input type="text" name="firstName" placeholder="First Name">
    <input type="text" name="lastName" placeholder="Last Name">
    <input type="email" name="email" placeholder="example@email.com">
    <input type="submit" name="ok" value="ok">
</form>

