<?php 
include '../common/configuration.php';
include '../model/database.php';
include '../model/users_db.php';
include '../model/properties_db.php';
include '../model/rental_apps_db.php';
include '../common/functions.php';
session_start();

//This is properties/index.php
//$properties = getProperties();

//get default values
$message = "";

if (!isset($_SESSION['USERNAME'])){ 
$_SESSION['USERNAME'] = null;
$_SESSION['RENTER_ID'] = null;
$_SESSION['LANDLORD_ID'] = null;
} else {
    $username = $_SESSION['USERNAME'];
    $renter_id = $_SESSION['RENTER_ID']; //take renter_id out of session and put in variable
    $landlord_id = $_SESSION['LANDLORD_ID'];
    //$user_info = getUserInfo($landlord_id);
}

if (isset($_GET['aboutus'])){
    include 'aboutus.php';
    exit();
}

if (isset($_GET['help'])) {
    include 'help.php';
    exit();
}

?>

