<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:lightgrey;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
</style>
<?php
require_once '../common/config.php';
echo '<br>I am after config file has been incorporated<br>';
if(isset($_SESSION['access_token'])){
  header('Location:/login/dashboard');
  exit();
}
$loginURL = $gClient->createAuthUrl();
?>

<meta charset="UTF-8">
<!--<link href='/assets/css/signup.css' rel='stylesheet' media='all'>-->

          <div id="login-box" align="left">
        
          <center><h1>Sign Up</h1></center>
        <form action='/auth/signUp' method='POST'>
          <div class="container">
          <label for="id" ><b>USERNAME</b></label>
            <input type="text" name="uname"><br>
          <label><b>E-mail</b></label>
            <input type="text" name="email"><br>
          <label><b>PASSWORD</b></label>
            <input type="text" name="pass"><br>
          <label><b>OCCUPATION</b></label>
            <input type="text" name="occu"><br>
          <input type="submit" name="signup_submit" value="Sign Up">
          <input type="button" onclick="window.location ='<?php echo $loginURL?>';" value="Log In With Google" class ="btn btn-danger">
      </form>
       <!---   <button class="social-signin facebook">Log in with facebook</button>
          <button class="social-signin twitter">Log in with Twitter</button>
          <button class="social-signin google">Log in with Google+</button>-->