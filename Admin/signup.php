<?php
include "includes/header.php";

if(isset($_POST['signup']))
{
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$email=mysqli_real_escape_string($conn,$email);// this function protect us from sql injection and data hack
$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);

$email=htmlentities($email);// this function prevent script crossing attacks
$username=htmlentities($username);
$password=htmlentities($password);
$password=password_hash($password,PASSWORD_BCRYPT);// for password encryption in database
}



//database query

$sql1="select * from user where email='$email' or username='$username'";//checking whether user is already resgistered or not.
$res1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1)>1)
{
    header("Location: login.php"); 
    $_SESSION['message']="Account already exists, login to continue";// popup
}
else{
$sql="insert into user(email,username,password) values('$email','$username','$password')";
$res=mysqli_query($conn,$sql); // this function use connection variable and query and give us a result 

if($res)
{
    header("Location: login.php"); // if res have a value user redirected to login
    $_SESSION['message']="Signup Succesful, login to continue";// popup
}
else{
    $_SESSION['message']="Something went wrong";
}
}

?>