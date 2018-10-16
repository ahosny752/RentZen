<?php include '../common/configuration.php';?>
<?php include '../view/header.php';?>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="landlord_profile.php">RentZen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="landlord_profile.php">Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_property.php">Add Property</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?listproperties">View Property</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?viewrequest">View Request </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="../index.php">Sign Out</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" placeholder="Search" type="text">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<img src="../images/Landlord.jpg" width="150" height="100" alt="Landlord" style="border:2px solid black"align="left"/><br>
<h2>John Smith</h2>
<p>Property Owner</p>
<p> Welcome John, please review your new notifications below.</p><br>


<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  New Applications Available.
</div>



<form action="add_property.php">
<input type="submit" value="Add a property" class="btn btn-primary" style="float: left;"/>
</form>
<form action="add_property.php">
<input type="submit" value="See Properties" class="btn btn-primary" style="float: right;"/>
</form>


