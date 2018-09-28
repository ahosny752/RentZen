<?php
include '../common/configuration.php';
include '../model/database.php';
include '../model/requests_db.php';
include '../common/functions.php';
session_start();

// get default values
$property_id = filter_input(INPUT_POST,'POPERTY_ID');
$street = filter_input(INPUT_POST,'STREET');
$city = filter_input(INPUT_POST,'CITY');
$state_id = filter_input(INPUT_POST,'STATE_ID');
$zip = filter_input(INPUT_POST,'ZIP');
$beds = filter_input(INPUT_POST,'BEDS');
$baths = filter_input(INPUT_POST,'BATHS');
$sqft = filter_input(INPUT_POST,'SQFT');
$type_id = $_SESSION['TYPE_ID'];
$propstat_id = $_SESSION['PROPSTAT_ID'];
$income_requirement = filter_input(INPUT_POST,'INCOME_REQUIREMENT');
$credit_requirement = filter_input(INPUT_POST,'CREDIT_REQUIREMENT');
$rental_fee = filter_input(INPUT_POST,'RENTAL_FEE');
$description = filter_input(INPUT_POST,'DESCRIPTION');
$picture = filter_input(INPUT_POST,'PICTURE');










?>
