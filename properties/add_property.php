<?php include '../view/header.php'?>
<?php include '../view/navigation.php'?>

<form action="index.php" method="post">

    <?php  $message = "";?>
  <label for="street">Street</label>
  <input type="text" name="street" id="street" value="">
  <br>
  <br>
  <label for="city">City</label>
  <input type="text" name="city" id="city" value="">
  <br>
  <br>
  <label for="state_id">State ID</label>
  <input type="text" name="state_id" id="state_id" value="">
  <br>
  <br>
  <label for="zip">Zip</label>
  <input type="text" name="street" id="zip" value="">
  <br>
  <br>
  <label for="beds">Beds</label>
  <input type="text" name="street" id="beds" value="">
  <br>
  <br>
  <label for="baths">Baths</label>
  <input type="text" name="street" id="baths" value="">
  <br>
  <br>
  <label for="sqft">Sqft</label>
  <input type="text" name="street" id="sqft" value="">
  <br>
  <br>
  <label for="type_id">Type ID</label>
  <input type="text" name="street" id="type_id" value="">
  <br>
  <br>
  <label for="propstat_id">Propstat ID</label>
  <input type="text" name="street" id="propstat_id" value="">
  <br>
  <br>
  <label for="income_requirement">Income Requirement</label>
  <input type="text" name="street" id="income_requirement" value="">
  <br>
  <br>
  <label for="credit_requirement">Credit Requirement</label>
  <input type="text" name="street" id="credit_requirement" value="">
  <br>
  <br>
  <label for="rental_fee">Rental Fee</label>
  <input type="text" name="street" id="rental_fee" value="">
  <br>
  <br>
  <label for="description">Description</label>
  <textarea id="description" name="comment" height="5" width="30"></textarea>
  <br>
  <br>
     
    
    
  
    <br>  
    <br>  
        
    <div id="buttons">
    <input type="submit" value="Add Property" name="ADDPROPERTY">
    <br>
    </div>
    
     <br>
    </div>
        
        
 <?php echo $message;?></p>
    </form>


<?php include '../view/footer.php'?>