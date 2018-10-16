<?php 
include '../common/configuration.php';
include '../model/database.php';
include '../model/property_db.php';
include '../model/request_db.php';
include '../common/functions.php';

$results = getproperty();
$requests = getrequest();

if(isset($_GET['listproperties'])){
    include 'view_properties.php';
    exit();    
}

if(isset($_GET['viewrequest'])){
    include 'view_requests.php';
    exit();    
}

if(isset($_POST['submit_property'])){
    
  // get default value
$property_name = filter_input(INPUT_POST, 'property_name');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zip = filter_input(INPUT_POST, 'zip');
$bedrooms = filter_input(INPUT_POST, 'bedrooms');
$bathrooms = filter_input(INPUT_POST, 'bathrooms');
$price = filter_input(INPUT_POST, 'price');
$requirements = filter_input(INPUT_POST, 'requirements');
//works up to here

$addproperty = addproperty( $property_name, $address, $city, $state, $zip, $bedrooms, $bathrooms, $price, $requirements);  
//include a page that returns the table (foreach loop) 
$results = getproperty();
    include 'view_properties.php';
    exit();
    
}



if (empty($property_name) || empty($address) || empty($city) || empty($zip) || empty($bedrooms) || empty($bathrooms) || empty($price) || empty($requirements)) {
    $error = "Invalid property data. Check all fields and try again.";

    exit();
} else {
    include '../model/property_db.php';
}

if($result === FALSE){
        $error = "An unexpected error occured";
        include 'add_property.php';
        exit();
    }

    
