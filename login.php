<?php
include("header.php");
include("menu.php");
?>
<h1>Log In</h1>
<form method="post" action="loginResponse.php">
    <label>Username:<input type="text" name="username"></label>
    <br>
    <label>Password:<input type="text" name="password"></label>
    <br>
    <input type="submit" value="Log In">
</form>
<?php
include("footer.php");
?>