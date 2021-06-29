<?php
include "includes/navbar.php";

if(isset($_GET['id']))       // checking whether post id is set or not
{
$id=$_GET['id'];
$id=mysqli_real_escape_string($conn,$id);
$id=htmlentities($id);

$sql="select * from posts where id=$id";
$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0)
{
$row=mysqli_fetch_assoc($res);
?>

<!-- html starts from here -->
<div class="main">

    <form action="edit_check.php?id=<?php echo $id;?>" method="POST" enctype="multipart/form-data"> 

        <div class="card-panel">
            <?php
            if(isset($_SESSION['message']))
            {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            }
        
            ?>
            <h5>Title for post</h5>
            <textarea name="title" placeholder="Title for blog" class="materialize-textarea">
            <?php
            echo $row['title'];
            ?>
            </textarea>

            <h5>Post content</h5>
            <textarea name="ckeditor" id="ckeditor" class="ckeditor">
            <?php
            echo $row['content'];
            ?>
            
            </textarea>

            <div class="center" style="margin-top:10px;">
                <input type="submit" value="Update" name="update" class="btn white-text green">
            </div>
        </div>
    </form>

</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
<?php
include "includes/footer.php";
?>

<?php
}
}
?>