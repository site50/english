	<CENTER>
	<table class="table table-bordered"   id='shop_table3'   >
<h2 ><i>Shopping cart details </i></h2>
<thead>
      <tr>
    <th class="text-center" >Product name</th>
    <th class="text-center" >Quantity</th>
    <th class="text-center">Price</th>
    <th class="text-center">Total price</th>
 </tr>

  <?php
  if(!empty($_SESSION["cart"])){  //CAR BuY!!!
      $total=0;
      foreach ($_SESSION["cart"] as $key=>$value){
    ?>

    <tr>
    <td class="text-center"><?php echo $_SESSION['pname']=$value["item_pname"];?></td>
    <td class="text-center"><?php echo $_SESSION['quantity']=$value["item_quantity"];?></td> <!-- QUANTITY -->
    <td class="text-center">$<?php echo $_SESSION['price']=$value["product_price"];?></td>
<td class="text-center">$<?php echo ($value["item_quantity"] * $value["product_price"]);?></td>
    <?php
    $total=$total+($value["item_quantity"] * $value["product_price"]);
	//$total=$_SESSION['total'];
	}
    ?>
  </form>
    <tr>
    <td colspan="3" align="right"> TOTAL  </td>
    <th align="right">$<?php echo number_format($total);?></th>
	
    </tr>
    <?php  
	$_SESSION['total']= $total;

	}    ?>
    </table>
	</CENTER>