<?php include '../view/header.php';?>
<?php include '../common/configuration.php'?>
<?php include '../view/navigation.php'?>


        <form action="index.php?role=<?php echo $role;?>" method="post">

            <div id="data">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"><br>
                <label for="username">Password:</label>
                <input type="password" name="password" id="password">
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Go" name="go_button"><br>
            </div>
            
            <div id="message">
              
            </div> 
        </form>
        <p>&nbsp;</p>
        <p><a href='../index.php'>Go back</a></p>

<?php include '../view/footer.php';?>
