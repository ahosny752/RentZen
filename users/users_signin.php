<?php include '../view/header.php'; ?>
 <script>
                "use strict";
                
		var validate = function(event){
                    
                    var username = $('#username').val();
                    var password = $('#password').val();
                    $('#message').html("<div class='alert alert-danger'><ul></ul></div>");
                    if (username === "" || username.length < 2)
                            {
                            $("#message").append("<li>You must provide an email.</li>");
                            event.preventDefault();
                            result = false;
                            }
                    if (password === "" || password.length < 2)
                            {
                            $("#message").append("<li>You must provide a password.</li>");
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
<div class="row">
    <div class="col text-center">
        <img class="img-fluid rounded" src="../images/city.png" alt="city">
        <h1>Sign In</h1>
    </div>
</div>

<div class="row justify-content-md-center"> <!--Variable width content BS4-->
    <div class="col-md-2"></div>
    <div class="col-md-auto">
        <form style="" action="index.php" method="post" id="form1">
            <div class="form-group" align="left">
                <label for="username">Email</label>
                <input name='username' type="email" class="form-control" placeholder="Email" id="username">
            </div>
            <div class="form-group">
                <label for="password" type="hidden">Password</label>
                <input name='password' type="password" class="form-control" placeholder="Password" id="password">
            </div>
        <div class="text-center">
               <button type="submit" name="sign-in-landlord" class="btn btn-primary">Sign in as landlord</button> 
                <button type="submit" name="sign-in-renter" class="btn btn-primary">Sign in as renter</button> 
        </div>
        </form>

    <p class="text-center">Don't have an account? <a href="<?php echo $base_path; ?>/users?signup">Sign Up</a></p>
        

    </div>
    <div class="col-md-2"></div>
</div>
<!--
<div class="checkbox">
    <label><input type="checkbox"> Landlord</label><br>
  <label><input type="checkbox"> Renter</label>
</div>
    <button type="submit" name="sign-in-landlord" class="btn btn-default">Submit</button>
--> 
            <div id="message">
                <?php echo $message;?>
            </div> 
<?php include '../view/footer.php'; ?>