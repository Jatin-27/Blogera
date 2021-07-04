<?php
include "includes/header.php";
?>

<?php
include "includes/navbar.php";
?>

<div class="row">
    <div class="col l9 m9 s12">
    <?php
    if(isset($_GET['id']))
    {

        $id=$_GET['id'];
        $id=mysqli_real_escape_string($conn,$id);
        $id=htmlentities($id);
        $sql="select * from posts where id =$id";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
            $sql2="select view from posts where id=$id";
            $res2=mysqli_query($conn,$sql2);
            $row2=mysqli_fetch_assoc($res2);
            $view=$row2['view'];
            $view=$view+1;
            $sql3="update posts set view=$view where id=$id";
            mysqli_query($conn,$sql3);
            $row=mysqli_fetch_assoc($res);
            $title=$row['title'];
            $content=$row['content'];
    ?>
        <div class="card z-depth-0">
                <div class="card-image" >
                    <img src="img/<?php echo $row['feature_image'];?>" class="responsive-img" alt="">
                    <span class="card-title flow-text" style="background-color:rgba(0, 0, 0, 0.2)"><?php echo ucwords($title); ?></span>
                </div>
                <div class="card-content" style="font-size:17px;">
                <?php echo $content;?>
                </div>
        </div>
    
    <?php
        }
        else
        {
            header("Location:index.php");
        }
    
    ?>
    </div>
    <?php
    include "includes/sidebar.php";
    ?>

    <!-- related blog area -->
    <div class="col l9 m9 s12">
        <div class="collection white flow-text" style="border:none; margin-left:10px;">
            <blockquote class="grey-text text-darken-3"style="border-color:#ffa500; border-width: 10px;margin:0px;">
            <h4 style="font-weight:500;">Related Posts</h4>
            </blockquote>
        </div>

        <?php
        $sql="select * from posts order by rand() limit 4";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0)
        {
            while($row=mysqli_fetch_assoc($res))
            {
        ?>
        <div class="col l3 m3 s6">
            <div class="card small z-depth-2 hoverable">
                <div class="card-image">
                    <img src="img/<?php echo $row['feature_image'];?>" alt="">
                    <span class="card-title truncate" style="font-size:16px; background-color:rgba(0, 0, 0, 0.2)"><?php echo $row['title'];?></span>
                </div>
                <div class="card-content">
                <?php echo substr($row['content'],0,75);?> ...
                </div>
                <div class="card-action center" style="background-color:#ffa500;">
                    <a href="post.php?id=<?php echo $row['id'];?>" class=" white-text">read more</a>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</div>

<?php
include "includes/footer.php";
}
else
{
header("Location:index.php");
}
?>