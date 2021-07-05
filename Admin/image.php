<?php
include "includes/navbar.php";
$dir="../img/";
$files=scandir($dir);
if($files)
{
  ?>
  <div class="main">
  <div class="row">
  <?php
  foreach($files as $file)
  {
    if(strlen($file)>2)
    {
    ?>
<div class="col m4 s6">
<div class="card" style="background-color:#14151D" >
<div class="card-image">
<img src="../img/<?php echo $file;?>" class="responsive-img" alt="">
<span class="card-content white-text"><?php echo $file;?></span>
</div>
</div>
</div>
<?php
    }
}
}
?>
  
  </div>
</div>