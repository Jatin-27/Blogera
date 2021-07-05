<?php
 include "includes/header.php";
 if(! isset($_SESSION['username']))
 {
?>
<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="../css/main.css" />
    <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin-Dashboard</title>
</head>

<body style="background-image: url('../img/Background.jpg');background-repeat:no-repeat; background-size:cover;">
<div>
<div class="row" style="margin-top:120px;">
    <div class="col l6 offset-l3 m8 offset-m2 s12">
        <div class="card-panel center " style="margin-bottom:0px;background-color:#ffa500;">
            <ul class="tabs" style="background-color:#ffa500;">
                <li class="tab">
                    <a href="#login" class="white-text">Login</a>
                </li>
                <li class="tab">
                    <a href="#signup" class="white-text">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
    
         <div class="col l6 offset-l3 m8 offset-m2 s12" id="login" > 
            <div class="card-panel grey lighten-5">
                <h5>Login to continue</h5>
                <?php
                 if(isset($_SESSION['message'])) // session checked
                  echo($_SESSION['message']);   //popup
                  session_unset();  // session destroyed
                 ?>
                <form action="login_check.php" method="POST">
                    <div class="input-field">
                        <input type="text" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <input type="submit" name="login" value="Login" class="btn green darken-1 white-text">
                </form>
            </div>
        </div>
        
        <div class="col l6 offset-l3 m8 offset-m2 s12" id="signup"> 
              <div class="card-panel">
                <h5>Signup here</h5>
                 <form action="signup_check.php" method="POST">
                 
                 <div class="input-field">
                 <input type="email" name="email" id="email" placeholder="Enter Email" class="validate"> 
                 <label for="email" data-error="Invalid Email Format" data-success="Valid Email"></label>
                 </div>

                 <div class="input-field">
                  <input type="text" id="username" name="username" placeholder="Username">
                 </div>  

                 <div class="input-field">
                 <input type="password" name="password" placeholder="Password">
                 </div>

                 <input type="submit" name="signup" class="btn green darken-1 white-text" value="Sign Up">

                </form>   
            </div>
        </div>
</div>    

<?php
include "includes/footer.php";
?>

<?php
}
else
 {
 header("Location:dashboard.php");
 }
?>

