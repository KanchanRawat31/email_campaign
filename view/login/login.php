<html>
<head>
    <meta name="robots" content ="noindex,nofollow">
    <title>Login With Google</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://apis.google.com/js/platform.js" async defer> </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
color: white;
}

img {
border-radius: 50%;
display: block;
  margin-left: auto;
  margin-right: auto;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 500px;
margin-top: auto;
margin-bottom: auto;
width: 370px;
align-content: center;
background-color: rgba(0,0,0,0.5) !important;
}

.card-header h3{
color: white;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}
.btn-primary{
    padding: 11px 40px;

}
.btn-danger{
    padding: 11px 40px;
}
.btn-danger a{
    color: white;
}


</style>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
<?php
require_once '../common/config.php';
//echo '<br>I am after config file has been incorporated<br>';
if(isset($_SESSION['access_token'])){
  header('Location:/login/dashboard');
  exit();
}
$loginURL = $gClient->createAuthUrl();
?>

</head>
<body>
    <?php
 $reslt;
?>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <center><h3>Sign In</h3></center>
            </div>
            	<img src="https://www.w3schools.com/howto/img_avatar2.png" width="100px" height="100px"><br>
<div class="card-body">
<form action="/login/login" method="POST">
<div class="input-group form-group">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div>
        <input id="username" value="" name="username" type="text" placeholder="Username" required="required"/><br>
</div>

<div class="input-group form-group">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div>
    <input id="password" name="password" type="password" placeholder="Password"  required="required"/>
</div>
<br/>

	 <button type="submit" name="Login" class="btn float-center btn-primary"><span>Login</span></button>
   <button type="submit" name="SignIn" class="btn float-center btn-danger"><a href='/login/signUpDisplay'>Sign Up</a>
    </button><br>
     ---------------or-----------------<br>
     <input type="button" onclick="window.location ='<?php echo $loginURL?>';" value="Log In With Google" class ="btn float-center btn-warning">
</form>
</div>
</div>
</div>
</div>
</body>
</html>




                   