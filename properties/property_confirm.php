<?php include '../view/header.php'?>
<?php include '../view/navigation.php'?>

    <p>Property Added successfully!</p>
    <p>Your property ID is: <?php echo $confirmation;?></p>
    
    <form action="index.php" method="post">
    <input type="submit" value="Logout" name="btn_logout">
    <br>
    </form>
<?php include '../view/footer.php'?>