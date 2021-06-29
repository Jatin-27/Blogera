<?php
   
    include "includes/header.php";
    if(isset($_POST['update']))
    {
      $id=$_GET['id'];
      $id=mysqli_real_escape_string($conn,$id) ;
      $id=htmlentities($id);

      $data=$_POST['ckeditor'];
      $data=mysqli_real_escape_string($conn,$data) ;

      $title=$_POST['title'];
      $title=mysqli_real_escape_string($conn,$title);
      $title=htmlentities($title);

      $sql="update posts set title='$title',content='$data' where id=$id";
      $res=mysqli_query($conn,$sql);
            if($res)
            {
            $_SESSION['message']="<div class='green white-text center'>Post is updated</div>";
            header("Location: edit.php?id=".$id);
            }
            else
            {
                $_SESSION['message']="<div class='red black-text'>Something went wrong</div>";
                header("Location: edit.?id=".$id);
            }
    } 
?> 