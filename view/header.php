<?php

if (!isset($_SESSION)){
    session_start();
    if (!isset($_SESSION['TYPE'])){
        $_SESSION['TYPE'] = 'visitor';
    }
}
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <title>Rent Zen</title>
    
        <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    
    
    
    
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">



   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../css/creative.css."/>


   <!-- Custom fonts for this template -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

   <!-- Plugin CSS -->
   <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/creative.min.css" rel="stylesheet">
      <link href="main.css" rel="stylesheet">


<!-- Put in viewport + Bootstrap 4 + jQuery -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    
<!-- Link back to our main css file -->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo $base_path;?>/main.css"/>-->

<!-- Link to image for the favicon -->
 
<link rel="icon" href="<?php echo $base_path . '/images/favicon.png';?>"> 
</head>

<body>
<?php
    //learn from avclub's request_list
    if($_SESSION['TYPE'] == 'visitor') {
?>
    
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <!-- Logo -->
   
    
    <a class ="navbar-brand" aria-label="Home Page" href="<?php echo $base_path;?>/index.php">
          <img alt="RentZen Logo" src="<?php echo $base_path;?>/images/favicon.png" style="width:80px;">
      </a>

    <!-- Toggler Icon for responsiveness -->
    <button aria-label="toggler-icon" id="toggle-icon" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!--Menu sets on the left-->
        <ul class="navbar-nav mr-auto">
            <!-- Search bar -->
            <!--<form class="form-inline" action="<?php echo $base_path;?>/properties" method = 'get'>
            <input class="form-control mr-sm-2" type="text" name='search' placeholder="Search" id="search" aria-label="Search">
            <input class="btn btn-secondary" type="submit" value="Search">
            </form>-->
            
            <!--<li class="nav-item">
            <a class="nav-link" href="<?php //echo $base_path;?>/users?signup">Left link</a>
          </li>-->
        </ul>
    <!--Menu sets on the right-->    
        <ul class="navbar-nav ml-auto">
                <!--<li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>">Hello, visitor</a>
                </li>  
                
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>/properties?search">Search Properties</a>
                </li> -->
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>/users?signup">Sign Up</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>/users?signin">Sign In</a>
                </li>
        </ul>
    </div>  
</nav>

        <?php
            };
        ?>
        
<?php        
    if($_SESSION['TYPE'] == 'renter') {
        $renter_id = $_SESSION['RENTER_ID'];
        $renter_info = getUserInfo($renter_id);
?>      
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <!-- Logo -->
      <a class ="navbar-brand" href="<?php echo $base_path;?>/users?renter_main">
          <img alt="RentZen Logo" src="<?php echo $base_path;?>/images/favicon.png" style="width:40px;">
      </a>

    <!-- Toggler Icon for responsiveness -->
    <button aria-label="toggler-icon" id="toggle-icon" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!--Menu sets on the left-->
        <ul class="navbar-nav mr-auto">
            <!-- Search bar -->
            <!--<form class="form-inline" action="<?php echo $base_path;?>/properties" method = 'get'>
            <input class="form-control mr-sm-2" type="text" name='search' placeholder="Search" id="search" aria-label="Search">
            <input class="btn btn-secondary" type="submit" value="Search">
            </form>-->
            
            <!--<li class="nav-item">
            <a class="nav-link" href="<?php //echo $base_path;?>/users?signup">Left link</a>
          </li>-->
        </ul>
    <!--Menu sets on the right-->    
        <ul class="navbar-nav ml-auto">
                <!--<li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>/properties?search">Hello, renter</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>/properties?search">Search</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>/users?logout">Logout</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $base_path;?>/users?renter_profile">Profile</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_path;?>/users?renter_main"><i class="fas fa-user"></i> Renter <?php echo $renter_info['firstname'];?>
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_path;?>/users?logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>

<!--                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $base_path;?>/site_info/aboutus.php">About Us</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $base_path;?>/site_info/help.php">Help</a>
                </li>-->
        </ul>
    </div>  
</nav>

        <?php
            };
        ?>
        
        <?php        
            if($_SESSION['TYPE'] == 'landlord') {
            $landlord_id = $_SESSION['LANDLORD_ID'];
            $landlord_info = getUserInfo($landlord_id);
            //$user_info = $_SESSION['USER_INFO'];
        ?>      
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <!-- Logo -->
      <a class ="navbar-brand" href="<?php echo $base_path;?>/users?landlord_main">
          <img alt="RentZen Logo" src="<?php echo $base_path;?>/images/favicon.png" style="width:40px;">
      </a>

    <!-- Toggler Icon for responsiveness -->
    <button aria-label="toggler-icon" id="toggle-icon" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <!--Menu sets on the left-->
        <ul class="navbar-nav mr-auto">
            <!-- Search bar -->
            <!--<form class="form-inline" action="<?php echo $base_path;?>/properties" method = 'get'>
            <input class="form-control mr-sm-2" type="text" name='search' placeholder="Search" id="search" aria-label="Search">
            <input class="btn btn-secondary" type="submit" value="Search">
            </form>-->
            
            <!--<li class="nav-item">
            <a class="nav-link" href="<?php //echo $base_path;?>/users?signup">Left link</a>
          </li>-->
        </ul>
    <!--Menu sets on the right-->    
        <ul class="navbar-nav ml-auto">
                <!--<li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>/users/landlord_profile.php">Hello, landlord</a>
                </li>-->
                <!--<li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path;?>/properties?search">Search</a>
                </li>-->
                <!--<li class="nav-item">
                  <a class="nav-link" href="<?php echo $base_path;?>/properties?prop_add">Add a property</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $base_path;?>/users?landlord_profile">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo $base_path;?>/rental_apps?list">Applications</a>
                </li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More
                    </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $base_path;?>/site_info/aboutus.php">About Us</a>
              <a class="dropdown-item" href="<?php echo $base_path;?>/site_info/help.php">Help</a>
              <!--<div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>-->
            
                
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_path;?>/users?landlord_main"><i class="fas fa-user"></i> Landlord <?php echo $landlord_info['firstname'];?>
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_path;?>/users?logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
        </ul>
    </div>  
</nav>

              
        <?php
            };
        ?>
            
           
        
    <br><br><br><br>

<!--Start container for BS4 (Bootstrap 4) formatting-->
<div class="container-fluid" style="min-height: 1000px">
    
     
 
    
