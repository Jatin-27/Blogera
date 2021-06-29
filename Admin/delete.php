<?php
    include "includes/header.php";
    if (isset($_GET['id']))
    {
        $id=$_GET['id'];
        $id=mysqli_real_escape_string($conn,$id);
        $id=htmlentities($id);
        $sql="delete from posts where id=$id";
        $res=mysqli_query($conn,$sql);
        if($res)
        {
        echo "<div class='green white-text center'>Deleted succesfully</div>";
        }
        else
        {
        echo "<div class='red black-text center'>Something Went Wrong</div>";
        }
    }
?>