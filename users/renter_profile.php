
<?php include '../view/header.php'?>
<script>
                "use strict";
                
		var validate = function(event){
                    
                    var username = $('#un').val();
                    var password = $('#pw').val();
                    var firstname = $('#fn').val();
                    var lastname = $('#ln').val();
                    //var email = $('#inputEmail3').val();
                    var phone = $('#inputPhone').val();
                    var credit = $('#credit_score').val();
                    var income = $('#inc').val();
                    
                    var result = true;
                    
                    /*
                    console.log($("#message").html());
                    $("#message").html("");
                    console.log($("#message").html());
                    */
                    $('#message').html("<div class='alert alert-danger'><ul></ul></div>");
                    if (username === "" || username.length < 2)
                            {
                            $("#message ul").append("<li>You must provide a username.</li>");
                            event.preventDefault();
                            result = false;
                            }
                    if (password === "" || password.length < 2)
                            {
                            $("#message ul").append("<li>You must provide a password.</li>");
                            event.preventDefault();
                            result = false;
                            }
                    if (firstname === "" || firstname.length < 2)
                            {
                            $("#message ul").append("<li>You must provide a first name.</li>");
                            event.preventDefault();
                            result = false;
                            }  
                    if (lastname === "" || lastname.length < 2)
                            {
                            $("#message ul").append("<li>You must provide a last name.</li>");
                            event.preventDefault();
                            result = false;
                            }
                    /*if (email === "" || !email.includes("@"))
                            {
                            $("#message ul").append("<li>You must provide a valid email.</li>");
                            event.preventDefault();
                            result = false;
                            }*/
                    if (phone === "" || phone.length < 10)
                            {
                            $("#message ul").append("<li>You must provide a phone number.</li>");
                            event.preventDefault();
                            result = false;
                            }
                    if (credit === "" || credit < 300 || credit > 850)
                            {
                            $("#message ul").append("<li>You must provide a credit score between 300 and 850.</li>");
                            event.preventDefault();
                            result = false;
                            }
                    if (income === "" || income.length < 0)
                            {
                            $("#message ul").append("<li>You must provide a yearly income.</li>");
                            event.preventDefault();
                            result = false;
                            } 
                    return result;
		};
		
                //tell the browser what to do when the form gets loaded
                
                $(document).ready(function(){
                    $('#profileupdateR').submit(function(event){
                        validate(event);
                    });
                    
                    $('#profilesubmitR').click(function(){
                        $('#profileupdateR').submit();
                    });
                });
                </script>
                
                <h1>Update Profile</h1>
<!--<h3>Common Application</h3>-->
            <form method="POST" action="index.php"  id="profileupdateR">
                <div class="form-group row">
                  <label for="un" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="un" placeholder="Username" name="usernameprofile" value="<?php echo $renter_info['username'];?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="pw" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="pw" placeholder="Password" name="passwordprofile" value="<?php echo $renter_info['username'];?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fn" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="fn" placeholder="First Name" name="firstnameprofile" value="<?php echo $renter_info['firstname'];?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ln" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="ln" placeholder="Last Name" value="<?php echo $renter_info['lastname'];?>" name="lastnameprofile">
                  </div>
                </div> 
                <!--<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email"name="emailprofile" value="<?php echo $renter_info['email'];?>">
                    </div>
                </div>-->
                
                <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputPhone" placeholder="Phone"name="phoneprofile" value="<?php echo $renter_info['phone'];?>">
                    </div>
                </div>
                    
                <div class="form-group row">
                  <label for="credit_score" class="col-sm-2 col-form-label">Credit Score</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="credit_score" placeholder="Credit Score" value="<?php echo $renter_info['credit_rating'];?>" name="creditscoreprofile">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inc" class="col-sm-2 col-form-label">Income</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inc" placeholder="Income" value="<?php echo $renter_info['income'];?>" name="incomeprofile">
                  </div>
                </div>   
                     
                <div class="text-center">    
                    <button type="submit" name="profileupdateR" class="btn btn-primary" id="profilesubmitR">Update Profile</button> 
                </div>
              
            </form>
            <div id="message">
                <?php echo $message;?>
            </div> 
<?php include '../view/footer.php'; ?>
