<!-- search bar -->
      <div class="col l3 m3 s12">
        <div class="card-panel">
            <form action="search.php" method="GET">
                <div class="input-field">
                    <input type="text" id="search" name="search" placeholder="search anything..">
                    <div class="center">
                        <input type="submit" value="search" name="submit" class="btn purple darken-4">
                    </div>
                </div>
            </form>
        </div> 
<!-- trending blogs -->
        <div class="collection with-header">
            <h5 class="collection-header purple darken-4 white-text">Trending blogs</h5>
            <?php
            $sql="select * from posts order by view DESC limit 5";
            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                ?>
                <a href="post.php?id=<?php echo $row['id'];?>" class="collection-item hoverable blue"><p class="black-text" style="font-size:16px; font-family:arial;"><?php echo $row['title'];?></p></a>
                <?php
                }
            }
            ?>
        </div>
    </div>