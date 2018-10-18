<?php 


include '../common/configuration.php';
include '../model/database.php';
include '../model/users_db.php';
include '../model/properties_db.php';
include '../model/rental_apps_db.php';
include '../common/functions.php';
session_start();

$message = "";
$rental_application_id = filter_input(INPUT_POST,'rental_application_id');
$renterproperty_id = filter_input(INPUT_POST,'renterproperty_id');
$last_status_id = filter_input(INPUT_POST,'last_status_id');
$first_name = filter_input(INPUT_POST,'first_name');
$last_name= filter_input(INPUT_POST,'last_name');
$phone = filter_input(INPUT_POST,'phone');
$email = filter_input(INPUT_POST,'email');
$income = filter_input(INPUT_POST,'income');
$credit_score = filter_input(INPUT_POST,'credit_score');
$move_in_date = filter_input (INPUT_POST,'move_in_date');
$move_out_date = filter_input(INPUT_POST,'move_out_date');
$renter_message = filter_input(INPUT_POST,'renter_message');
$status = filter_input(INPUT_POST,'status');







//if (!isset($_SESSION)){
//    session_start();
//    if (!isset($_SESSION['TYPE'])){
//        $_SESSION['TYPE'] = 'visitor';
//    }
//}
//
//if ($_SESSION['TYPE'] == 'landlord'){
//    header('Location: users?landlord_main');
//    exit();
//} 
//if ($_SESSION['TYPE'] == 'renter'){
//    header('Location: users?renter_main');
//    exit();
//} 


if (isset($_GET['pending'])){
     $application = getAllApplications();
    include 'manage_applications.php';
    exit();
}
if (isset($_GET['property_id'])){
    include 'rental_application.php';
    exit();
}

if (isset($_GET['view_apps'])){
 $application = getAllApplications();
    include 'view_applications.php';
    exit();
}
if (isset($_POST['ADDAPPLICATION'])){
   if ((empty($first_name)  || empty($last_name)) || empty($phone)) {
       $message = "* One or more required fields are missing.";
       include 'rental_application.php';
       exit();
   } else
   {
       $confirmation = addApplication($rental_application_id, $renterproperty_id, 
               $last_status_id, $first_name, $last_name, $phone, $email, $income, 
               $credit_score, $move_in_date, $move_out_date, $renter_message, $status);
               
   
       if ($confirmation !== false)
           {
           include 'application_confirm.php';
           exit();
           } else {
           $message = "An unexpected error occurred.";
           }
   }

}


//landlord have the option to accpet applications.
$rental_application_id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
if (($_SESSION['TYPE'] == 'landlord') && (!empty($rental_application_id))){
    acceptRentalApp($rental_application_id, $renterproperty_id);
    $application = getAllApplications('pending');
    include 'manage_applications.php';
    exit();
}

//landlord see the request list
if ($_SESSION['TYPE'] == 'landlord'){
    $application = getAllApplications('status');
    include 'manage_applications.php';
    exit();
}
?>

