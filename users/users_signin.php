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
        
        <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }
  
  


  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '354450151958863',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

    // Now that we've initialized the JavaScript SDK, we call 
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
FB.logout(function(response) {
   // Person is now logged out
}); </script>

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
                 
                <br>
            
                
        </div>
        </form>

    <p class="text-center">Don't have an account? <a href="<?php echo $base_path; ?>/users?signup">Sign Up</a></p>
    <br>
<!--                <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>-->
                

        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
    
                    <input  id="clickMe" type="button" value="logout" onclick="FB.logout();" />


    
    
       



<div id="status">
</div>

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