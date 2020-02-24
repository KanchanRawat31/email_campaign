<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
 .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-image:  url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
      
    }
    .navbar a {
  font-size: 20px;
  color: white;  
  
}   
.navbar ul li a:hover{
  background-color: grey;
}
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
  padding: 7px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


/* Dropdown Button */
/*.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
/*.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
/*.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
/*.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
/*.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
/*.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
/*.dropdown:hover .dropbtn {background-color: #3e8e41;} */

    .sidenav {
      padding-top: 50px;
      background-image:  url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
      height: 750px;
      font-size: 20px;
    }
    .sidenav a{
      font-size: 20px;
  color: darkgrey;
  
    }
    .leftnav{
      background-color:  #E6E6FA;
      height: 750px;
      
    }

    .leftnav h1{
      color:black;
    }

.leftnav h3{
  color:purple;
}
    
    /* Set black background color, white text and some padding */
    footer {
      background-image:  url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
      color: white;
      padding: 15px;
    }
   </style> 
    
</head>
<body>
  <nav class="navbar">
  <div class="container-fluid">
    
     
            <ul class="nav navbar-nav">
              <li style="float: left">
        <img src="https://dt2sdf0db8zob.cloudfront.net/wp-content/uploads/2018/03/Email-Marketing.jpg" style="width:150px;height:100px"></li>
          <li><a href="/login/home"><h2>HOME</h2></a></li>
          <li><a href="/login/logout"><h2>LOGOUT</h2></a></li>
                   
         <!--<li class="dropdown" style="float:right">
    <button class="dropbtn"><img src="/images/setting.png" style="width:30px;height:30px"></button>
    <div class="dropdown-content">
      <a href="#">GMAIL SMTP</a>
      <a href="#">AWS SES</a>
    </div>
   </li>-->
 </ul>
</div>
</div>
</div>
</nav>
      
    

  
<div class="container-fluid leftnav">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <ul class="nav nav-pills nav-stacked">
        
        <p><a href="/subscriber/showSubscriber">LIST OF ALL SUBSCRIBER</a></p><br>
        <p><a href="/campaign/launchCampaign">LAUNCH NEW CAMPAIGNS</a></p><br>
        <p><a href="/campaign/showCampaign">PREVIOUS CAMPAIGNS</a></p><br>
        <p><a href="/subscriber/addSubscriberDisplay">ADD NEW USER</a></p><br>
        
      </ul>
   </div>
  
    <div class="col-sm-9 leftnav">
      <div id="login-box" align="left" width="500px">
        <center><h2>Subscribe to us</h2></center>
          <form action='\subscriber\addSubscriber' method='POST'>
            <div class="container">
              <label for="id" ><b>Id</b></label>
                <input type="text" name="id">
              <label><b>First_name</b></label>
                <input type="text" name="first">
              <label><b>Last_name</b></label>
                <input type="text" name="last">
              <label><b>Email</b></label>
                <input type="text" name="email" >
              <label><b>Phone_no</b></label>
                <input type="text" name="phone">
              <label><b>Profession</b></label><br>
                <input type="text" name="profession" placeholder="Who are you?(Student, Developer)">
              <label><b>Date</b></label>
                <input type="date" name="date"><br><br>
              <select name="Gender">
                <option value="female">female</option>
                <option value="male">male</option>
              </select><br><br>
          </div><br>
            <center><input type="submit" name="subscribe" value="Subscribe" class="btn btn-danger"></center>
          </form>
      </div>
  </div>
</div>
</div>

<footer class="container-fluid">
 
</footer>

</body>
</html>






      