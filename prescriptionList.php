<?php
   require_once('config.php');
   if (isset($_GET['view'])) {
   
   	$result = $db->query("SELECT* FROM images") or die($db->error);
   
   	  if($result->num_rows > 0) { ?> 
<div class="gallery"> 
   <?php while($row = $result->fetch_assoc()){ 
   	$id=$row['id'];
   	$uploaded=$row['uploaded']; ?> 
  <b> Prescription no.<?php echo $id ?></b> Upload date <?php echo $uploaded ?> </p> <img style="height:228px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /><br> <br> <br> 
   <?php } ?> 
</div>
<?php }
}
?>