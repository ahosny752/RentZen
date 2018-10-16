<?php include '../common/configuration.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/people_db.php"; ?>
<?php
$message = "";
$role = filter_input(INPUT_GET,'role');
    
if (isset($_GET['logout'])){
    include 'people_logout.php';
    exit();
}
if (isset($_POST['go_button']) && $role='renter')
{
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    $renter_id = loginPeople($username, $password, 101);
    if (!empty($renter_id)){
        session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['role_id']=101;
        $_SESSION['renter_id'] = $renter_id;
        $_SESSION['landlord_id'] = null;
        $_SESSION['USERNAME'] = $username;
        header('Location: ../renter/index.php');
        exit();
    } else
    {
        $message = "Login failed. Please try again.";
        include 'people_login.php';
        exit();
    }
} 

if (isset($_POST['go_button']) && $role='landlord')
{
    $username = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
    $landlord_id = loginPeople($username, $password, 102);
    if (!empty($landlord_id)){
        session_start();
        $_SESSION['LOGGED_IN']='OK';
        $_SESSION['role_id']=102;
        $_SESSION['landlord_id'] = $landlord_id;
        $_SESSION['renter_id'] = null;
        $_SESSION['USERNAME'] = $username;
        header('Location: ../landlord/index.php');
        exit();
    } else
    {
        $message = "Login failed. Please try again.";
        include 'people_login.php';
        exit();
    }
} 

//look for a token named persontype
if (isset($_GET['role'])){

    // here i am checking to see if the user
    // is logged in.  if the user is not logged in
    // I shouldn't display the user list.
    session_start();
    if (!isset($_SESSION['LOGGED_IN'])){
        header('Location: ../index.php');
        exit();
    }
    
    // this is the really important part :-)
    $persontype = $_GET['role'];
    $people = getPeopleRole($role);
    include 'people_login.php';
    exit();
    
}

//if all else fails
include 'people_login.php';
exit();
?>
