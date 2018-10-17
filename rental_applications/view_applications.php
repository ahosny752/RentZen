<!DOCTYPE HTML>
<html lang="en">

   <title>View My Properties</title>
<table border="1">

  <tr>
      <th scope="col">Application ID:</th>
      <th scope="col">Property ID:</th>
      <th scope="col">Last Status ID:</th>
      <th scope="col">First Name:</th>
      <th scope="col">Last Name:</th>
      <th scope="col">Phone:</th>
      <th scope="col">Email:</th>
      <th scope="col">Income:</th>
      <th scope="col">Credit Score:</th>
      <th scope="col">Move In Date:</th>
      <th scope="col">Move Out Date:</th>
      <th scope="col">Message:</th>
  </tr>




<?php
foreach($application as $a)
{
  $rental_application_id = $a['rental_application_id'];
  $renterproperty_id = $a['renterproperty_id'];
  $last_status_id = $a['last_status_id'];
  $first_name = $a['first_name'];
  $last_name = $a['last_name'];
  $phone = $a['phone'];
  $email = $a['email'];
  $income = $a['income'];
  $credit_score = $a['credit_score'];
  $move_in_date = $a['move_in_date'];
  $move_out_date = $a['move_out_date']; 
  $renter_message = $a['renter_message'];



     echo "<tr>
      <td>$rental_application_id</td>
      <td>$renterproperty_id</td>
      <td>$last_status_id</td>
      <td>$first_name</td>
      <td>$last_name</td>
      <td>$phone</td>
      <td>$email</td>
      <td>$income</td>
      <td>$credit_score</td>
      <td>$move_in_date</td>
      <td>$move_out_date</td>
      <td>$renter_message</td>

     </tr>";
}






?>
</table>