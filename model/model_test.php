<?php
/* for development purposes only */
/* Test model functions here. */

//before I can do anything, I need database credentials
include '../common/configuration.php';

// before I can use the model functions, I need a database connection
include 'database.php';


// ***********************************************************
//TEST WILL SAY IT DOESNT WORK BUT THE DATABASE IS GETTING THE DATA INSERTED
// the properties model
include 'properties_db.php';
echo '<p>Testing the properties functions ... </p>';

$property_id = null;
$street = '8998';
$city = 'allentown';
$state_id = 80;
$zip = '19121' ;
$beds = 5;
$baths = 3;
$sqft = 20;
$type_id = 65;
$propstat_id = 45;
$income_requirement = 4.2;
$credit_requirement = 560;
$rental_fee = 99.99;
$description = 'testing hey hey';
$picture = null;
    
    $result = addProperty($property_id, $street, $city, 
                $state_id,$zip, $beds, $baths, 
                $sqft,$type_id, $propstat_id, $income_requirement, 
                $credit_requirement,$rental_fee, $description, $picture);

if ($result == false){
    echo "<p>Failure.  Request not added</p>";
} else {
    echo "<p>Success.  Request added: $result.</p>";    
}

$city = 'philadelphia';
$data = getAllProperties($city);
print_r($data);

$property_id = 1;
$data = getProperty($property_id);
print_r($data);

$property_id = 699;
$data = closeProperties($property_id);
print_r($data);

if ($data != false){
    echo "<p>Success.  property closed. $property_id</p>";
} else {
    echo "<p>Failure.  property not closed.</p>";    
}


include 'people_db.php';
echo '<p>Testting the people functions ... </p>';

$username = 'ajones@email.com';
$password = 'ajones123';
$role_id = 102;

$result = loginPeople($username,$password,$role_id);

if ($result == true){
    echo "<p>Login for $username was good</p>";
} else {
    echo "<p>Login for $username was bad</p>";    
}

$testusername = 'Gertrude';
$testpassword = 'betty123';
$testusertype = 'tech';

$result = loginPeople($testusername, $testpassword, $testusertype);

if ($result == true){
    echo "<p>Login for $testusername was good</p>";
} else {
    echo "<p>Login for $testusername was bad</p>";    
}

//// ***********************************************************
//// the requests model
include 'requests_db.php';
echo '<p>Testing the request functions ... </p>';
//
////
$role_id = 102;
$data = getPeople($role_id);
print_r($data);


$people_id = 913;
$role_id = 101;

$data = getPeopleRole($role_id, $people_id);
print_r($data);

        if ($role_id == true){
            echo 'renter';
        } else {
            
            echo 'nope';
            
        }

        
?>