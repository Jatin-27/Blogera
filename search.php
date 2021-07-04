<?php
include "includes/header.php";
include "includes/navbar.php";
if(isset($_GET['submit']))
{
$q=$_GET['search'];
mysqli_real_escape_string($conn,$q);
$q=htmlentities($q);
$sql="select * from posts where title like '$q' or content like '$q' or title like '%$q%' or content like '%$q%'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
?>
    <div class="row">
        <div class="col l9 m9 s12">
            <div class="collection orange">
                <div class="center white-text flow-text">Search results</div>
            </div>
<?php
    while($row=mysqli_fetch_assoc($res))
    {
?>
            <div class="col l4 m4 s12">
                <div class="card medium z-depth-2 hoverable">
                        <div class="card-image">
                            <img src="img/<?php echo $row['feature_image'];?>" alt="">
                            <span class="card-title truncate" style="font-size:16px; background-color:rgba(0, 0, 0, 0.2)"><?php echo $row['title'];?><span>
                        </div>
                        <div class="card-content">
                        <?php echo substr($row['content'],0,125);?> ...
                        </div>
                        <div class="card-action purple darken-4 center">
                            <a href="post.php?id=<?php echo $row['id'];?>" class=" white-text">read more</a>
                        </div>
                </div>
            </div>
    <?php
    }   
    ?>
        </div>
        <?php
        include "includes/sidebar.php";
        ?>
    </div>
<?php
}
else
{    
?>
<div class="row">
    <div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
        <div class="collection red lighten-3">
            <h5 class="center" style="font-family:Roboto; font-size:20px;">
            Sorry no data found ,Try again with other keyword.
            </h5>
        </div>
    </div>
</div>
<?php
}
}
else
{    
header("Location: index.php");
}
?>