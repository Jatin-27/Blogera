<?php
    include "includes/header.php";
    if(isset($_SESSION['username']))
    {
        unset($_SESSION['username']);
        header("Location: login.php");
        $_SESSION['message']="<div class='green-text'>You have been succesfully logged out :)</div>";
    }
    else
    {
        header ("Location: login.php");
    }
?>