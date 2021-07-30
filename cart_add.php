

<table class="tbl-cart" cellpadding="5" cellspacing="8"  >
						<?php 
						$query="SELECT * FROM shop1 ORDER BY id ASC";
						$result=mysqli_query($con,$query);
						if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_array($result)){
						?>
						<td valign="bottom" align="center" valign="middle"   >
						<img  src='<?php echo $row["image"];?>'  id='img'/></br>
						<b><h5><?php echo $row["pname"];?>  </b></br>
						<b><h5 id="price"> <?php echo $row["price"];?> руб</b></br>
									
<form method="post" action='p10.php?action=add&id=<?php echo $row["id"]?>'>
<input type="digit" name="quantity"  value="" size='8'placeholder="введите количество" required pattern="^[ 0-9]+$"></br>
<input type="hidden"  name='price' value="<?php echo $row["price"];?>">
<input type="hidden"  name='pname' value="<?php echo $row["pname"];?>"> 
<input type="submit" class="btn btn-primary" name="add" id='add_cart'  value="Добавить в корзину">
									</form>  <?php   }} ?></td>
						</table>  
