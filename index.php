<?php
include "includes/header.php";
?>

<?php
include "includes/navbar.php";
include "includes/slider.php";
?>

<div class="row">
    <!-- this is main content area -->
    <div class="col l9 m12 s12">
        
        <div class="collection white flow-text" style="border:none; margin-left:10px;">
            <blockquote class="grey-text text-darken-3"style="border-color:#ffa500; border-width: 10px;margin:0px;">
            <h4 style="font-weight:500;">Latest Posts</h4>
            </blockquote>
        </div>

        <?php
        $sql="select * from posts order by id DESC";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
            while($row=mysqli_fetch_assoc($res))
            {
        ?>
        <div class="col l4 m6 s12">
            <div class="card medium z-depth-2 hoverable">
                <div class="card-image">
                    <img src="img/<?php echo $row['feature_image'];?>" alt="">
                    <span class="card-title truncate" style="font-size:16px; background-color:rgba(0, 0, 0, 0.2)"><?php echo $row['title'];?></span>
                </div>
                <div class="card-content">
                <?php echo substr($row['content'],0,125);?> ...
                </div>
                <div class="card-action center" style="background-color:#ffa500;" >
                    <a href="post.php?id=<?php echo $row['id'];?>" class=" white-text" >read more</a>
                </div>
            </div>
        </div>

        <?php
            }
        }
        ?>
    </div>

    <?php
    include "includes/sidebar.php";
    ?>
</div>
<?php
include "includes/footer.php";
?>