<?php
header('Content-Type: text/html; charset=utf-8');
require_once('inc.session5.php');
session_start();
require('connection.php');
require_once('cart10.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CART_LESSON</title>
<meta charset='utf-8' >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="cart.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type"  content="text/html" charset="UTF-8" />
<link href="css/menu1.css" rel="stylesheet">
<link href="css/menu1_cart.css" rel="stylesheet">
<style>
a{
	color:white;
}
#account{
	margin-top: 1rem;
margin-bottom: 1rem;
}
#lesson {
    margin-top:4%;
}
@media (min-width: 360px ) and (max-width:1280px) 
{
 #menu {
    margin-top: -1rem;
}   
}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12" style='background-color:;'>
      <div id='menu' style="display:"></div>
<textarea id='enter' style='display:none;'/></textarea>
<div id="lesson"><center><h2><b>Вы можете заказать индивидуальную программу обучения 
<h4>Выбрать интересующую для вас тему и вам будут подобран материал для обучения
</center>
</div>
</div>
</div>
<div class="row">
<div class="col-md-2" style='background-color:;'></div>
<div class="col-md-8" style='background-color:;' >
<center><?php include('cart_add.php') ?>	</center>		 
</div>
<div class="col-md-2" style='background-color:;'></div>
</div>
<div class="row">
<div class="col-md-2 " style='background-color:;'></div>
<div class="col-md-4 " style='background-color:;'>
<?php include('cart_delete.php') ?> 
</div>	
<div class="col-md-4" style='background-color:;'>
<?php  
if(!empty($_SESSION["cart"])){
$total=0;
?>
<center>
<div id="account">
<h2><a href="other.php" >Войти в аккаунт?</br></a>
</h2><h2>
<a href="page_registr.php" > Пройти регистрацию?</br></a> </h2>
</div>	
</center>				
<?php   }      ?>  
<?php  if (isset($_SESSION['username'])) : ?> 
<h2>
2Welcome,  
<strong> 
<?php echo $_SESSION['username'].'!!!'; ?> <!-- registration-->
</strong> 
</h2> 
<p>  
<?php 	endif ?> 

<?php
 
unset($_SESSION['username']); 

?> 	

</div>
<div class="col-md-2" style='background-color:;'></div>
</div>
<div class="row">
<div class="col-md-2" style='background-color:;'></div>
<div class="col-md-8" style='background-color:;'>
</div>
<div class="col-md-2" style='background-color:;'></div>
</div>
</div>	
<script src='modul/dom.js'></script>
</body>
</html>