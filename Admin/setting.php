<?php
include "includes/navbar.php";
?>

<div class="main">
    <div class="row">
            <?php
            if(isset($_SESSION['message']))
            {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            }
            ?>
        <div style="padding:30px;" class="col s12 left">
            <h5 class="left">Change password</h5>
            <form action="setting.php" method="POST">
                <input type="password" name="password" placeholder="Enter Password">
                <input type="password" name="con_password" placeholder="Confirm Password">
                <div class="left">
                <input type="submit" name="update" value="Change Password" class="btn green darken-1">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "includes/footer.php";
?>

<?php
if(isset($_POST['update']))
{
  $password=$_POST['password'];
  $password=mysqli_real_escape_string($conn,$password);
  $password=htmlentities($password);
  $con_password=$_POST['con_password'];
  $con_password=mysqli_real_escape_string($conn,$con_password);
  $con_password=htmlentities($con_password);
  if($con_password===$password)
  {
    $username=$_SESSION['username'];
    $password=password_hash($password,PASSWORD_BCRYPT);
    $sql="update user set password='$password' where username='$username'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
    $_SESSION['message']="<div class='green white-text center'>Password Successfully Changed.</div>";
    header("Location: setting.php");
    }
    else
    {
        $_SESSION['message']="<div class='red black-text center'>Sorry, Something went wrong, Please Try Again.</div>";
        header("Location: setting.php");
    }
}
else
{
  $_SESSION['message']="<div class='red black-text center'>Password doesn't match</div>";
  header("Location: setting.php");
}
}
?>