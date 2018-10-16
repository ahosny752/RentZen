<?php include '../common/configuration.php'?>
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
                            $("#message").html("<div class='alert alert-danger'>You must provide a valid email.</div>");
                            event.preventDefault();
                            result = false;
                            }*/
                    if (phone === "" || phone.length < 10)
                            {
                            $("#message ul").append("<li>You must provide a phone number.</li>");
                            event.preventDefault();
                            result = false;
                            }
                   
                    return result;
		};
		
                //tell the browser what to do when the form gets loaded
                
                $(document).ready(function(){
                    $('#profileupdateL').submit(function(event){
                        validate(event);
                    });
                    
                    $('#submitprofileL').click(function(){
                        $('#profileupdateL').submit();
                    });
                });
                </script>

<!--<h3>Common Application</h3>-->
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-8">
        <h1>Update Profile</h1>
            <form method="POST" action="index.php" id="profileupdateL">
                <div class="form-group row">
                  <label for="un" class="col-md-3 col-form-label">Username</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="un" placeholder="Username" name="usernameprofile" value="<?php echo $user_info['username'];?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="pw" class="col-md-3 col-form-label">Password</label>
                  <div class="col-md-6">
                    <input type="password" class="form-control" id="pw" placeholder="Password" name="passwordprofile" value="<?php echo $user_info['password'];?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fn" class="col-md-3 col-form-label">First Name</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="fn" placeholder="First Name" name="firstnameprofile" value="<?php echo $user_info['firstname'];?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ln" class="col-md-3 col-form-label">Last Name</label>
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="ln" placeholder="Last Name" value="<?php echo $user_info['lastname'];?>" name="lastnameprofile">
                  </div>
                </div> 
                <!--<div class="form-group row">
                    <label for="inputEmail3" class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-6">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email"name="emailprofile" value="<?php echo $user_info['email'];?>">
                    </div>
                </div>-->
                
                <div class="form-group row">
                    <label for="inputPhone" class="col-md-3 col-form-label">Phone Number</label>
                    <div class="col-md-6">
                      <input type="tel" class="form-control" id="inputPhone" placeholder="Phone"name="phoneprofile" value="<?php echo $user_info['phone'];?>">
                    </div>
                </div>
                     
                     
                <div class="text-center">    
                    <button type="submit" name="profileupdateL" class="btn btn-primary" id="submitprofileL">Update Profile</button> 
                </div>
    </div> <!--close col-md-8-->
</div>
    
              
            </form>
            <div id="message">
                <?php echo $message;?>
            </div> 
<?php include '../view/footer.php'; ?>