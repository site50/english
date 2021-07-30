<?php  
	if(!empty($_SESSION["cart"])){
	$total=0;
	?>
				<table  border="1"  id='shop_table1'style="background-color: #00beff"; >
				<center><h2><i>Корзина покупок</h2></center>
				<tr >
				<th width="30%"  ><h6><i>Наименование</th>
				<th width="10%" ><h6><i>Кол-во</th> 
				<th width="13%"  ><h6><i>Цена</th>
				<th width="10%"  ><h6><i>Общая цена</th>
				<th width="17%"  ><h6><i>Удалить</th>
				</tr>
			<?php  
			foreach ($_SESSION["cart"] as $key=>$value){
			?>
			<tr>
			<td ><i><h6 style="color:white; " ><?php echo $_POST['pname']=$value["item_pname"];?></td>
			<td><i><h5 style="color:white; " ><?php echo $_POST['quantity']=$value["item_quantity"];?></td> 
			<td><i><h5 style="color:white; " ><?php echo $_POST['price']=$value["product_price"];?> руб</td>
			<td><i><h5 style="color:white; " ><?php echo ($value["item_quantity"] * $value["product_price"]);?> руб</b></td>
<form method='POST' action='p10.php'    >
<!--<form method="post" action='p10.php?action=delete&id=<?php echo $row["id"]?>'>-->
				<td><input type='hidden' name='pname'value="<?php echo $row['pname']; ?>" />
					<input type='hidden' name='quantity'value="<?php echo $row['quantity']; ?>" /> 
					<input type='hidden' name='price'value="<?php echo $row['price']; ?>" /> 

<a href="p10.php?action=delete&id=<?php echo $value['product_id'];?>">
			<span class="text-danger" ><b style="color:white; " >Remove</span></a>
			</tr>
			<?php 
			$total=$total+($value["item_quantity"] * $value["product_price"]);
			}
			
			?>  
</form>    
			<tr>
			<td colspan="3" align="right"><i> TOTAL  </td>
			<th align="right" style="background:white;"  ><i><?php echo number_format($total);?> руб</th>
			<td></td>
			</tr>
			</table>	<?php }    ?> 
			