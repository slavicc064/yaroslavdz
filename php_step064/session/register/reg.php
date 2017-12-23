<style>
    input,
    div {
        margin-bottom: 5px;
        display: block;
    }
    [type="checkbox"] {
        float: left;
    }
</style>
<form action="mod.php" method="post">
    <input type="text" name="login" placeholder="User Name">
    <input type="password" name="pass" placeholder="User Password">
    <div><input type="checkbox" name="checkbox">enable cookies</div>
    <input type="submit" name="register">
</form>
