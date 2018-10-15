<?php include '../view/header.php';?>

        <form action="index.php?role=<?php echo $role_id;?>" method="post">

            <div id="data">
                <label for="username">User name:</label>
                <input type="text" name="username" id="username"><br>
                <label for="username">Password:</label>
                <input type="password" name="password" id="password">
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Go" name="go_button"><br>
            </div>
            
            <div id="message">
                <?php echo $message;?>
            </div> 
        </form>
        <p>&nbsp;</p>
        <p><a href='../index.php'>Go back</a></p>

<?php include '../view/footer.php';?>
