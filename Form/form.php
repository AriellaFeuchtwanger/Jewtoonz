
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Accounts</title>
    </head>
    <body>
        <form>
            User Name: <br/>
            <input type="text" name="userName"><br/>
            Email: <br/>
            <input type="text" name="email"><br/>
            Password: <br/>
            <input type="text" name="password"><br/>
            <input type="radio" name="gender" value="male" checked> Male<br/>
            <input type="radio" name="gender" value="female"> Female<br/>
            <p>What type of cartoons do you like?</p>
            <select name="cars">
                <!--I have no idea what types of jewtoonz there are -->
                <option value="volvo">Type A</option>
                <option value="saab">Type B</option>
                <option value="fiat">Type C</option>
                <option value="audi">Type D</option>
            </select>
            <br/>
            <a href="AccountSummary.php">Create Account</a>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
