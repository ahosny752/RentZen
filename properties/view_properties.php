<!DOCTYPE HTML>
<html lang="en">
    
    <title>View Properties</title>
<table border="1">

   <tr>
       <th scope="col">Property ID:</th>
       <th scope="col">Street:</th>
       <th scope="col">City:</th>
       <th scope="col">State:</th>
       <th scope="col">Zip:</th>
       <th scope="col">Beds:</th>
       <th scope="col">Baths:</th>
       <th scope="col">Square Ft.:</th>
       <th scope="col">Type:</th>
       <th scope="col">Property Stats:</th>
       <th scope="col">Income Requirement:</th>
       <th scope="col">Credit Requirement:</th>
       <th scope="col">Rental Fee:</th>
       <th scope="col">Description:</th>
       <th scope="col">Picture:</th> 
   </tr>




<?php
foreach($results as $result)
{
   $property_id = $result['PROPERTY_ID'];
   $street = $result['street'];
   $city = $result['city'];
   $state_id = $result['state'];
   $zip = $result['zip'];
   $beds = $result['beds'];
   $baths = $result['baths'];
   $sqft = $result['sqft'];
   $type_id = $result['type_id'];
   $propstat_id = $result['propstat_id'];
   $income_requirement = $result['income_requirement']; 
   $credit_requirement = $result['credit_requirement'];
   $rental_fee = $result['rental_fee'];
   $description = $result['description'];
   $picture = $result['picture'];
   
   
}
?>
</table>