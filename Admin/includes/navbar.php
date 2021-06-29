<?php
include "header.php";
if(isset($_SESSION['username']))
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

  <style>
  footer,header,.main{
      margin-left: 300px;
  }
  @media(max-width:992px){
  footer,header,.main{
      margin-left: 0px;
     }
  }
  </style>
</head>
<body>

<!-- nav bar -->

<nav class="purple darken-4">
    <div class="nav-wrapper">
        <div class="container">
            <a href="../index.php" class="brand-logo center">Blogerz</a>
            <a href="" class="button-collapse hide-on-large" data-activates="sidenav"> <i class="material-icons">menu</i> </a>
        </div>
    </div>
</nav> 

<!-- side navigation bar -->

<ul class="side-nav fixed" id="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="../img/vector.jpg" alt="" class="responsive-img">
            </div>
        <a href=""><img src="../img/square1.jpg" class="circle"></a>
        <span class="name white-text"><?php echo $_SESSION['username']; ?></span>
        <span class="email white-text">
            <?php
            $user=$_SESSION['username'];
            $sql="select email from user where username='$user'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);
            echo $row['email'];
            ?>
        </span>
        </div>
    </li>
    <li>
        <a href="dashboard.php" >Dashboard</a>
    </li>

    <li>
        <a href="post.php" >Posts</a>
    </li>

    <li>
        <a href="image.php" >Images</a>
    </li>

    <li>
        <a href="" >Comments</a>
    </li>

    <li>
        <a href="setting.php" >Settings</a>
    </li>

    <div class="divider"></div>
    <li>
        <a href="logout.php" >Logout</a>
    </li>
</ul>
<?php
}
else
{
  $_SESSION['message']="<div class='red-text'>Login To Continue</div>";
  header("Location:login.php");
}
?>
