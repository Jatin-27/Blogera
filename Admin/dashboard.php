 <?php
include "includes/navbar.php";
if(isset($_SESSION['username']))
{
?>
<!-- main content area -->
<div class="main">
    <div class="row">
        <span id="message"></span>
        <div class="col l6 m6 s12">
        
        <ul class="collection with-header">
                <li class="collection-header purple darken-4 white-text">
                   <h5> Recent posts</h5>
                   
                </li>
                <?php
                $sql="select * from posts order by id desc";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)>0)
                {
                 while($row=mysqli_fetch_assoc($res))
                 {
                ?>
                <li class="collection-item">
                    <a href="#"><?php echo $row['title'] ?></a>
                    <br>
                    <span> <a href="edit.php?id=<?php echo $row['id'];?>"> <i class="material-icons tiny">edit</i>edit</a>
                     | <a href="#" id="<?php echo $row['id'];?>" class="delete"> <i class="material-icons tiny red-text">clear</i>delete</a> 
                     | <a href="#"><i class="material-icons tiny green-text">share</i>share</a> </span>
                </li> 
                
                <?php
                 }
                }
                else
                {
                echo "<div class='card-panel grey-text center' style='margin-bottom:0px;margin-top:0px;'>You don't have any post yet :)</div>";
                }
                ?>
        </ul>
                
    </div>
        <div class="col l6 m6 s12">
            <ul class="collection with-header">
                <li class="collection-header purple darken-4 white-text">
                   <h5> Recent Comments</h5>
                </li>
                <li class="collection-item">
                    <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, magni.</a>
                    <br>
                    <span> <a href="#"> <i class="material-icons tiny">done</i>Approve</a> | <a href="#"><i class="material-icons tiny red-text">clear</i>Remove</a> </span>
                </li>

                <li class="collection-item">
                    <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, magni.</a>
                    <br>
                    <span> <a href="#"> <i class="material-icons tiny">done</i>Approve</a> | <a href="#"><i class="material-icons tiny red-text">clear</i>Remove</a> </span>
                </li>

                <li class="collection-item">
                    <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, magni.</a>
                    <br>
                    <span> <a href="#"> <i class="material-icons tiny">done</i>Approve</a> | <a href="#"><i class="material-icons tiny red-text">clear</i>Remove</a> </span>
                </li>

                <li class="collection-item">
                    <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, magni.</a>
                    <br>
                    <span> <a href="#"> <i class="material-icons tiny">done</i>Approve</a> | <a href="#"><i class="material-icons tiny red-text">clear</i>Remove</a> </span>
                </li>

                <li class="collection-item">
                    <a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, magni.</a>
                    <br>
                    <span> <a href="#"> <i class="material-icons tiny">done</i>Approve</a> | <a href="#"><i class="material-icons tiny red-text">clear</i>Remove</a> </span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="fixed-action-btn">
    <a href="write.php" class=" btn-floating btn btn-large white-text purple darken-4 pulse"><i class="material-icons">edit</i></a>
</div>

<script>
 
 const del= document.querySelectorAll(".delete");
 del.forEach(function(item,index)
 {
  item.addEventListener("click",deleteNow)
 })
 
 function deleteNow(e)
 {
   e.preventDefault();
   if(confirm("Do you really want to delete?"))
   {
       const xhr= new XMLHttpRequest();
       xhr.open("GET","delete.php?id="+Number(e.target.id),true)
       xhr.onload=function()
         {
         const messg=xhr.responseText;
         const message=document.getElementById("message")
         message.innerHTML=messg;
         }
         xhr.send()
   } 
 }
 </script>
<?php
include "includes/footer.php";
}

else
{
  $_SESSION['message']="<div class='red-text'>Login To Continue</div>";
  header("Location: login.php");
}

?>