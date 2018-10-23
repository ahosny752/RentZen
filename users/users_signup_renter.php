<?php include '../view/header.php'?>
    <br>
<script>
                "use strict";
                
		var validate = function(event){
                    
                    var username = $('#username').val();
                    var password = $('#password').val();
                    
                    $('#message').html("<div class='alert alert-danger'><ul></ul></div>");
                    if (username === "" || username.length < 2)
                            {
                            $("#message ul").append("<li>You must provide an email.</li>");
                            event.preventDefault();
                            result = false;
                            }
                    if (password === "" || password.length < 2)
                            {
                            $("#message ul").append("<li>You must provide a password.</li>");
                            event.preventDefault();
                            result = false;
                            }
                             
                    return result;
		};
		
                //tell the browser what to do when the document gets loaded
                
                $(document).ready(function() {

                    $("#form1").submit(function(event){
                        validate(event);
                       }
                    ); //end submit 

                }); // end ready
	</script>
    <h2 class="text-center"> Renter sign up</h2>
<!--<div class="container-fluid">-->
    <div class="row justify-content-md-center">
        
        <div class="col col-md-2"></div>
        <div class="col-md-auto"> <!--variable width content-->
            <form action="index.php" style="" method="post" id="form1">

            <div id="data">
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="usernameR" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" placeholder="Password" type="password" name="passwordR" id="password">
                    
                </div>
            </div>

                <div class="text-center" id="buttons">
                <input class="btn btn-primary" type="submit" value="Sign up" name="confirmationR"><br>
                
                </div>
                                <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>

            <div id="message">
                <?php echo $message;?>
            </div> 
            </form>
            
        </div>
        <div class="col col-md-2"></div>
    </div>
<!--</div>-->
<?php include '../view/footer.php'?>