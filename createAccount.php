<?php
include("header.php");
include ("menu.php");
require_once 'functions.php';
?>

<form method="post" action="accountSummary.php">
    <label> First Name: </label>
    <input type="text" name="firstName"><br>
    <label>Last Name:</label>
    <input type="text" name="lastName"><br>
    <label> Email:</label>
    <input type="text" name="email"><br/>
    <label>Password: </label>
    <input type="password" name="password"><br/>
    <div>
    <label>Male<input type="radio" name="gender" value="male" checked></label>
    <label>Female<input type="radio" name="gender" value="female"> </label><br>
    </div>
    <label>User Type:</label>
    <select name="type">
        <option selected disabled>User Type</option>
       <?php
        getUserTypes();
       ?>
    </select>
    <br/>
    <input type="submit" value="Create Account"/>
</form>
<?php
include("footer.php");
?>
    