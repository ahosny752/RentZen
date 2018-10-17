<?php
/* for development purposes only */
/* Test model functions here. */

//before I can do anything, I need database credentials
include '../common/configuration.php';

// before I can use the model functions, I need a database connection
include 'database.php';



include 'rental_apps_db.php';
echo '<p>Testing the application functions ... </p>';



$result = acceptRentalApp(1, 3);

if ($result == false){
    echo "<p>Failure.  rental NOT accpeted</p>";
} else {
    echo "<p>Success.  rental accepted: $result.</p>";    
}




$data = getAllApplications();
print_r($data);

if ($data == false){
    echo "<p>Failure. cant get</p>";
} else {
    echo "<p>Success we got it all: $result.</p>";   
    
}



$rental_application_id = 28;
$data = getApplication($rental_application_id);
print_r($data);

if ($data == false){
    echo "<p>Failure. cant get</p>";
} else {
    echo "<p>Success we got it AJ: $result.</p>";    
}


// ***********************************************************
//TEST WILL SAY IT DOESNT WORK BUT THE DATABASE IS GETTING THE DATA INSERTED
// the properties model
include 'properties_db.php';
echo '<p>Testing the properties functions ... </p>';

//$property_id = null;
//$street = '8998';
//$city = 'allentown';
//$state_id = 80;
//$zip = '19121' ;
//$beds = 5;
//$baths = 3;
//$sqft = 20;
//$type_id = 65;
//$propstat_id = 45;
//$income_requirement = 4.2;
//$credit_requirement = 560;
//$rental_fee = 99.99;
//$description = 'testing hey hey';
//$picture = null;
//    
//    $result = addProperty($property_id, $street, $city, 
//                $state_id,$zip, $beds, $baths, 
//                $sqft,$type_id, $propstat_id, $income_requirement, 
//                $credit_requirement,$rental_fee, $description, $picture);
//
//if ($result == false){
//    echo "<p>Failure.  Request not added</p>";
//} else {
//    echo "<p>Success.  Request added: $result.</p>";    
//}


$property_id = 302;
$street = '89984';
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
    
    $result = editProperty($property_id, $street, $city, $state_id, $zip, $beds, 
            $baths, $sqft, $type_id, $propstat_id, $income_requirement,
            $credit_requirement, $rental_fee, $description, $picture);
            
if ($result == false){
    echo "<p>Failure.  property not updated</p>";
} else {
    echo "<p>Success.  property updated: $result.</p>";    
}




$success = editProperty(301, '544', 'pa', '43', 'asdf',
        '$beds', '$baths', '$sqft', 44, 44, 555, 
        555, 44, 'test', 'images');
        
        
if ($success == true){
    echo "Edit property  was OK<br>";
}
echo "get problem types<br><br>";

print_r(getAllProperties());


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



$role_id = 101;

$result = getPeople($role_id);

if ($result == true){
    echo "<p>It  was good</p>";
} else {
    echo "<p>It was bad</p>";    
}
        

       
$role = 'renter';
$result = getPeopleRole($role);


if ($result == TRUE){
    print_r($result);
} else {
    echo "<p>role was bad</p>";    
}
         

$username = 'test@test.com';
$password = 'test';
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

        
?>