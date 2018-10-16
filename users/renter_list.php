<?php include '../view/header_renter.php'?>

<div>
    <h2>Renter Dashboard</h2>
    

<div class="row justify-content-md-center"> <!--Variable width content BS4-->
    
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending Rental Applications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Your Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pending-app-tab">...

              </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form>
                <div class="form-group row">
                  <label for="credit_score" class="col-sm-2 col-form-label">Your name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="credit_score" placeholder="Credit Score">
                  </div>
                </div>    
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                    
                <div class="form-group row">
                  <label for="credit_score" class="col-sm-2 col-form-label">Credit Score</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="credit_score" placeholder="Credit Score">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="credit_score" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="credit_score" placeholder="Credit Score">
                  </div>
                </div>    
            
                your name: 
            Your phone:
            Your email:
                </form>
            </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>

<!--
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
            <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
        </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
        
-->
    </div>
    <div class="col-md-1"></div>
</div>
    </div>
     
<?php include '../view/footer.php'?>