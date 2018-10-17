<?php 


include '../common/configuration.php';
include '../model/database.php';
include '../model/users_db.php';
include '../model/properties_db.php';
include '../model/rental_apps_db.php';
include '../common/functions.php';




if (!isset($_SESSION)){
    session_start();
    if (!isset($_SESSION['TYPE'])){
        $_SESSION['TYPE'] = 'visitor';
    }
}

if ($_SESSION['TYPE'] == 'landlord'){
    header('Location: users?landlord_main');
    exit();
} 
if ($_SESSION['TYPE'] == 'renter'){
    header('Location: users?renter_main');
    exit();
} 

?>

