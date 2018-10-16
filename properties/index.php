<?php
include '../common/configuration.php';
include '../model/database.php';
include '../model/properties_db.php';
include '../common/functions.php';
include '../model/users_db.php';



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
    $result = getAllProperties($city);
    include 'view_properties.php';
    exit();    
}

if (isset($_GET['prop_add'])){
    include 'add_property.php';
    exit();    
}



if (isset($_POST['ADDPROPERTY'])){
 
        echo "b<br>";
    echo $street;
        echo "c<br>";
    
        $confirmation = addProperty($property_id, $street, $city, 
                $state_id,$zip, $beds, $baths, 
                $sqft,$type_id, $propstat_id, $income_requirement, 
                $credit_requirement,$rental_fee, $description, $picture);
        

        echo "d<br>";
            
        
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
