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

//$property_id = 8; // this id assigned to the user joe in the database
//$street = "2222 winter lane"; // free text
//$city = "easton"; // this is the problem type id for 'computer problem'
//$state_id = 9;
//
//$result = addProperty($property_id, $street, $city, $state_id);
//
//if ($result != false){
//    echo "<p>Success.  Request added. $result</p>";
//} else {
//    echo "<p>Failure.  Request not added.</p>";    
//}

//$city = 'philadelphia';
//$data = getAllProperties($city);
//print_r($data);

//$property_id = 1;
//$data = getProperty($property_id);
//print_r($data);

$property_id = 3;
$data = closeProperties($property_id);
print_r($data);

if ($data != false){
    echo "<p>Success.  property closed. $property_id</p>";
} else {
    echo "<p>Failure.  property not closed.</p>";    
}



?>