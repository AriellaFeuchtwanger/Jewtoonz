<?php
include("header.php");
include ("menu.php");
require_once 'functions.php';
?>

<script>
    $(function () {
        $("#joinForm").validate({
            rules: {
                firstName: "required",
                lastName: "required",
                email: {
                    required: true,
                    email: true
                },
                gender: "required",
                type: "required",
                password: "required"
            },
            messages: {
                firstName: "Please enter your first name.",
                lastName: "Please enter your last name",
                email: "Please enter a valid email",
                gender: "Please select your gender",
                type: "Please select the type of user",
                password: "Please enter a password"
            }
        });
    });
</script>

<form method="post" action="accountSummary.php" id="joinForm">
    <label> First Name: </label>
    <input type="text" name="firstName" placeholder="First Name"><br>
    <label>Last Name:</label>
    <input type="text" name="lastName" placeholder="Last Name"><br>
    <label> Email:</label>
    <input type="text" name="email" placeholder="someone@example.org"><br/>
    <label>Password: </label>
    <input type="password" name="password" placeholder="Password"><br/>
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
    