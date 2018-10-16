<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>

<html>
<head>

<h2>Renters</h2>          
<form id="loginform" action="renters_profile.php">

            <div id="data">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br>
            </div><br>
<input type="submit" value="Submit" name='renter_logon' method='post' class="btn btn-primary" id="renters_logon">
</form>


<?php include '../view/footer.php';?>