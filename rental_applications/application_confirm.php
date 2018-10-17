<?php include '../view/header.php'?>
<?php include '../view/navigation.php'?>
<?php include '../common/configuration.php'?>

    <p>Application Added successfully!</p>
    <p>Your Application ID is: <?php echo $confirmation;?></p>
    
    <form action="index.php" method="post">
    <input type="submit" value="Logout" name="btn_logout">
    <br>
    </form>
<?php include '../view/footer.php'?>