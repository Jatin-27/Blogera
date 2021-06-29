<?php
include "includes/navbar.php";
if (isset($_SESSION['username']))
{
?>
<div class="main">
   <form action="write.php" method="POST" enctype="multipart/form-data"> 
    
        <div class="card-panel">
            <?php
                if(isset($_SESSION['message']))
                {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
            ?>

            <h5>Title for post</h5>
            <textarea name="title" placeholder="Title" class="materialize-textarea"></textarea>
            <h5>Featured Image</h5>
            <div class="input-field file-field">
                <div class="btn green darken-1">
                Upload file
                <input type="file" name="image">
                </div>
                <div class="file-path-wrapper">
                <input type="text" class="file-path">
                </div>
            </div>
            <h5>Post content</h5>
            <textarea name="ckeditor" id="ckeditor" class="ckeditor"></textarea>
            <br>
            <div class="center">
                <input type="submit" value="Publish" name="publish" class="btn white-text green darken-1">
            </div>
        </div>
    </form>

    <!-- database query -->
        <?php
        include "write_check.php";
        ?>
</div>



<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
<?php
include "includes/footer.php";
}
else{
    $_SESSION['message']="<div class='red-text'>Login To Continue</div>";
    header("Location: login.php");
}
?>