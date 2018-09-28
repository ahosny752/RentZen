<?php
include '../common/configuration.php';
include '../model/database.php';
include '../model/properties_db.php';
include '../common/functions.php';
include 'add_property.php';


// get default values
$message = "";
$property_id = filter_input(INPUT_POST,'PROPERTY_ID');
$street = filter_input(INPUT_POST,'STREET');
$city = filter_input(INPUT_POST,'CITY');
$state_id = filter_input(INPUT_POST,'STATE_ID');
$zip = filter_input(INPUT_POST,'ZIP');
$beds = filter_input(INPUT_POST,'BEDS');
$baths = filter_input(INPUT_POST,'BATHS');
$sqft = filter_input(INPUT_POST,'SQFT');
$type_id = filter_input(INPUT_POST,`TYPE_ID`);
$propstat_id = filter_input (INPUT_POST,`PROPSTAT_ID`);
$income_requirement = filter_input(INPUT_POST,'INCOME_REQUIREMENT');
$credit_requirement = filter_input(INPUT_POST,'CREDIT_REQUIREMENT');
$rental_fee = filter_input(INPUT_POST,'RENTAL_FEE');
$description = filter_input(INPUT_POST,'DESCRIPTION');
$picture = filter_input(INPUT_POST,'PICTURE');

if (isset($_POST['ADDPROPERTY'])){
    
        $confirmation = addProperty($property_id, $street, $city, 
                $state_id,$zip, $beds, $baths, 
                $sqft,$type_id, $propstat_id, $income_requirement, 
                $credit_requirement,$rental_fee, $description, $picture);
        if ($confirmation !== false)
            {
            include 'property_confirm.php';
            exit();
            } else {
            $message = "An unexpected error occurred.";
            }
        
    }

//    PROBLEM WITH THIS. DOES NOT READ CONTROLLER




?>
