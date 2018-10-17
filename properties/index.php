<?php
include '../common/configuration.php';
include '../model/database.php';
include '../model/properties_db.php';
include '../common/functions.php';
include '../model/users_db.php';

session_start();

// get default values
$message = "";
$property_id = filter_input(INPUT_POST,'PROPERTY_ID');
$street = filter_input(INPUT_POST,'street');
$city = filter_input(INPUT_POST,'city');
$state_id = filter_input(INPUT_POST,'state_id');
$zip = filter_input(INPUT_POST,'zip');
$beds = filter_input(INPUT_POST,'beds');
$baths = filter_input(INPUT_POST,'baths');
$sqft = filter_input(INPUT_POST,'sqft');
$type_id = filter_input(INPUT_POST,'type_id');
$propstat_id = filter_input (INPUT_POST,'propstat_id');
$income_requirement = filter_input(INPUT_POST,'income_requirement');
$credit_requirement = filter_input(INPUT_POST,'credit_requirement');
$rental_fee = filter_input(INPUT_POST,'rental_fee');
$description = filter_input(INPUT_POST,'description');
$picture = filter_input(INPUT_POST,'picture');



if (isset($_GET['search'])){
    $results = getAllProperties();
    include 'view_properties.php';
    exit();    
}



if (isset($_GET['prop_add'])){
    include 'add_property.php';
    exit();    
}

//if (isset($_GET['id'])){
//    $results = getAllProperties();
//    include 'property_manage.php';
//    exit();    
//}

if (isset($_GET['manage'])){
    $results = getAllProperties();
    include 'property_manage.php';
    exit();    
}

if (isset($_GET['id'])){
    include 'edit_property.php';
    exit();    
}


if (isset($_POST['UPDATEPROPERTY'])){
   if ((empty($street)  || empty($city)) || empty($state_id)) {
       $message = "* One or more required fields are missing.";
       include 'edit_property.php';
       exit();
   } else
   {
       $success = editProperty($property_id, $street, $city, $state_id, $zip, $beds,
               $baths, $sqft, $type_id, $propstat_id, $income_requirement, 
               $credit_requirement, $rental_fee, $description, $picture);
   
       if ($success !== false)
           {
           include 'property_manage.php';
           $results = getAllProperties();
           exit();
           } else {
           $message = "An unexpected error occurred.";
           }

   }
}



if (isset($_POST['ADDPROPERTY'])){
   if ((empty($street)  || empty($city)) || empty($state_id)) {
       $message = "* One or more required fields are missing.";
       include 'add_property.php';
       exit();
   } else
   {
       $confirmation = addProperty($property_id, $street, $city, $state_id, 
               $zip, $beds, $baths, $sqft, $type_id, $propstat_id, 
               $income_requirement, $credit_requirement, $rental_fee, $description, $picture);
   
       if ($confirmation !== false)
           {
           include 'property_confirm.php';
           exit();
           } else {
           $message = "An unexpected error occurred.";
           }

   }
}



?>
