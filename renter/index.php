<?php 
include '../common/configuration.php';
include '../model/database.php';
include '../model/request_db.php';
include '../model/property_db.php';
include '../common/functions.php';


$requests = getrequest(); 
$results = getproperty();

if (isset($_GET['viewrequest'])){
    include 'view_requests.php';
    exit();    
}

if (isset($_GET['listproperties'])){
    include 'view_properties.php';
    exit();    
}

if (isset($_POST['submit_request'])){
    
  // get default value
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');

$addrequest = addrequest($first_name, $last_name, $phone, $email, $message);


$requests = getrequest(); 
include 'view_requests.php';
exit();
}

?>