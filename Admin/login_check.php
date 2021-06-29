<?php
include "includes/header.php";

if(isset($_POST['login']))
{

$username=$_POST['username'];
$password=$_POST['password'];

// this function protect us from sql injection and data hack
$username=mysqli_real_escape_string($conn,$username);
$password=mysqli_real_escape_string($conn,$password);

$username=htmlentities($username);
$password=htmlentities($password);

// database sql queries

$sql="select password from user where username='$username'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);// function used to fetch object data from res
$pass=$row['password'];
if(password_verify($password,$pass))//password verification and matching with encrypted password
{
    $_SESSION['username']=$username;
     header("Location: dashboard.php");
}
else{
    header("Location: login.php");
    $_SESSION['message']="<div class='red-text'>sorry! wrong credentials try again</div>";
}
}


?>