<?php
include "includes/header.php";
?>

<?php
include "includes/navbar.php";
include "includes/slider.php";
?>

<div class="row">
    <!-- this is main content area -->
    <div class="col l9 m9 s12">
        <div class="collection purple darken-4">
            <h5 class="white-text center">Our posts</h5>
        </div>
        <?php
        $sql="select * from posts order by id DESC";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
            while($row=mysqli_fetch_assoc($res))
            {
        ?>
        <div class="col l4 m4 s12">
            <div class="card medium z-depth-2 hoverable">
                <div class="card-image">
                    <img src="img/<?php echo $row['feature_image'];?>" alt="">
                    <span class="card-title truncate" style="font-size:16px;"><?php echo $row['title'];?></span>
                </div>
                <div class="card-content">
                <?php echo $row['content'];?>
                </div>
                <div class="card-action purple darken-4 center">
                    <a href="post.php?id=<?php echo $row['id'];?>" class=" white-text">read more</a>
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