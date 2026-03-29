<?php 


include_once "data.php";
foreach($products as $key => $value){


?>
<div class="card" style="width: 18rem;">
  <img src="<?php echo $value['img_src']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value['name']?>
    <p class="card-text"><?php echo $value['info']?></p>
    <a href="single.php?id=<?php echo $value['id']?>" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<?php 
}
?>