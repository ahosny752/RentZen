<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>
<html>
<head>

<h2>Landlords</h2>          
<form id="loginform" action="landlord_profile.php">

            <div id="data">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br>
            </div><br>
<input type="submit" value="Submit" name='landlords_logon' method='post' class="btn btn-primary" id="landlords_logon">
</form>
<?php include '../view/footer.php';?>