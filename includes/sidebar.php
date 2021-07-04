<!-- search bar -->
      <div class="col l3 m12 s12">
        <div class="collection white flow-text" style="border:none; padding:20px;">
            <blockquote class="grey-text text-darken-3"style="border-color:#ffa500; border-width: 8px;margin:0px;">
            <h5>Search Posts Here</h5>
            </blockquote>
            
            <form action="search.php" method="GET">
                <div class="input-field" style="margin-top:20px;">
                    <input type="text" id="search" name="search" placeholder="search anything..">
                    <div class="left">
                        <input type="submit" value="search" name="submit" class="btn" style="background-color:#ffa500;">
                    </div>
                </div>
            </form>
        </div> 
<!-- trending blogs -->
        <div class="collection with-header white" style="border:none; margin-top:30px;">
            <h5 class="collection-header white-text" style="padding:20px;margin-top:0; background-color:#14151D;">Trending blogs</h5>
            <?php
            $sql="select * from posts order by view DESC limit 5";
            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                ?>
                <blockquote style="border-color:#ffa500; border-width: 8px; padding-left:0px; margin-top:5px;" class="white">
                <a href="post.php?id=<?php echo $row['id'];?>" class="collection-item">
                
                    <p class="black-text" style="font-size:16px; margin:0px;"><?php echo substr($row['title'],0,85);?>...</p>
                
                </a>
                </blockquote>
                <?php
                }
            }
            ?>
        </div>
    </div>