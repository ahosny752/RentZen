<?php include '../view/header.php'?>
<?php include '../view/navigation.php'?>




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
       <th scope="col">Apply:</th> 
       
   </tr>




<?php
foreach($results as $result)
{
   $property_id = $result['property_id'];
   $street = $result['street'];
   $city = $result['city'];
   $state_id = $result['state_id'];
   $zip = $result['zip'];
   $beds = $result['beds'];
   $baths = $result['baths'];
   $sqft = $result['sqft'];
   $type_id = $result['type_id'];
   $propstat_id = $result['propstat_id'];
   $income_requirement = $result['income_requirement']; 
   $credit_requirement = $result['credit_requirement'];
   $rental_fee = $result['rental_fee'];
   $description = nl2br(htmlspecialchars($result['description']));
   $picture = $result['picture'];
   
   
      echo "<tr>
       <td>$property_id</td>
       <td>$street</td>
       <td>$city</td>
       <td>$state_id</td>
       <td>$zip</td>
       <td>$beds</td>
       <td>$baths</td>
       <td>$sqft</td>
       <td>$type_id</td>
       <td>$propstat_id</td>
       <td>$income_requirement</td>
       <td>$credit_requirement</td>
       <td>$rental_fee</td>
       <td>$description</td>
       <td><img src=$picture style='width:100px; height:80px'> </td>
       <td><a href='index.php?id=$property_id'>Apply</a></td>
      </tr>";
}
?>
</table>'
    '
