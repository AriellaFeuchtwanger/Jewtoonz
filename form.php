<?php include("header.php");?>

        <form method="post" action="accountSummary.php">
            <label> User Name: <br/></label>
            <input type="text" name="userName"><br/>
            <label> Email: <br/></label>
            <input type="text" name="email"><br/>
            <label>Password: <br/></label>
            <input type="password" name="password"><br/>
            <input type="radio" name="gender" value="male" checked> Male<br/>
            <input type="radio" name="gender" value="female"> Female<br/>
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
        include("header.php");
        ?>
    