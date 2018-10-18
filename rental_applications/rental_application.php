<?php include '../view/header.php'?>
<?php include '../view/navigation.php'?>

<!DOCTYPE HTML>
<html lang="en">

   <title>View Applications</title>
   <form action="index.php" method="POST">

  <label for="first_name">First Name</label>
 <input type="text" name="first_name" id="first_name" value="">
 <br>
 <br>
 <label for="last_name">Last Name</label>
 <input type="text" name="last_name" id="last_name" value="">
 <br>
 <br>
 <label for="phone">Phone:</label>
 <input type="text" name="phone" id="phone" value="">
 <br>
 <br>
 <label for="email">Email:</label>
 <input type="text" name="email" id="email" value="">
 <br>
 <br>
 <label for="income">Income:</label>
 <input type="" name="income" id="income" value="">
 <br>
 <br>
 <label for="credit_score">Credit Score:</label>
 <input type="text" name="credit_score" id="credit_score" value="">
 <br>
 <br>
 <label for="move_in_date">Move In Date:</label>
 <input type="text" name="move_in_date" id="move_in_date" value="">
 <br>
 <br>
 <label for="move_out_date">Move Out Date:</label>
 <input type="text" name="move_out_date" id="move_out_date" value="">
 <br>
 <br>
 <label for="renter_message">Message:</label>
<textarea id="renter_message" name="renter_message" height="5" width="30"></textarea>
 <br>
 <br>
 <label for="status">Status:</label>
 <input type="text" name="status" id="status" value="pending">
 <br>
 <br>
  <div id="buttons">
   <input type="submit" value="Apply" name="ADDAPPLICATION">
   <br>
   </div>     


   </form>
</html>