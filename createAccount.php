<?php
include("header.php");
include ("menu.php");
?>

<form method="post" action="accountSummary.php">
    <label> User Name: </label>
    <input type="text" name="userName"><br>
    <label> Email:</label>
    <input type="text" name="email"><br/>
    <label>Password: </label>
    <input type="password" name="password"><br/>
    <label>Male<input type="radio" name="gender" value="male" checked></label>
    <label>Female<input type="radio" name="gender" value="female"> </label><br>
    <label>What type of cartoons do you like?</label>
    <select name="type">
        <!--I have no idea what types of jewtoonz there are
        Going to pull from a database-->
        <option selected disabled>Select a type of cartoon</option>
        <option value="a">Type A</option>
        <option value="b">Type B</option>
        <option value="c">Type C</option>
        <option value="d">Type D</option>
    </select>
    <br/>
    <input type="submit" value="Create Account"/>
</form>
<?php
include("footer.php");
?>
    