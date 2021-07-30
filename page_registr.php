<?php  
require_once('inc.session5.php');
session_start();
require('connection.php');
require_once('cart10.php');	
include('reg_user.php') ;
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
input {
    font-size: 1.7rem;
    margin-bottom: 1rem;
	height: 5rem;
	width: 80%;
}
input:focus{
background-color:#acecdd;	
	
}

.btn-danger {
    width: 100%;

}
#my_form{
background-color: coral;
width: 53rem;
border-radius: 2rem;
border: 5px solid #62e1ee;

}
.table {
    margin-top: 0.3rem;
	width: 90%;
	background-color: #00beff;
}
h2{
margin-top: 3rem;	
margin-bottom: 3rem;
}
.error{
	
	font-size: 2rem;
color: green;
}

#enter_account{
	margin-top: 14rem;
}
a{
color: red;
}

@media (min-width: 240px ) and (max-width:414px) 
{
	.error {
    font-size: 1.5rem;
}
.table {
    font-size: 60%;
}
#my_form {
    width: 99%;
}
input {
    height: 3rem;
	margin-bottom: 0.1rem
}
h4 ,h2{
    margin-top: 5px;
    margin-bottom: 5px;
	font-size: 1.4rem;
	
}
#menu {
    margin-top: -1rem;
}
input {
    font-size: 1.3rem;
}

p {
    margin: 10px 0 10px;
}	
}
@media (min-width: 900px ) and (max-width:950px) 
{
  #menu {
    margin-top: -4rem;
}  
}
@media (min-width: 1024px ) and (max-width:1024px) 
{
#my_form {
      width: 90%;	
}	
}
@media (min-width: 1440px ) and (max-width:1440px) 
{
#my_form {
     width: 60%;
    margin-right: 15%;
}
}
</style>
</head>
<body>
<div class="header"> 

</div>
	<div class="container-fluid">
	<div class="row">
				<div class="col-md-6" style='background-color:;'>
				    <div id='menu' style="display:"></div>
<textarea id='enter' style='display:none;'/></textarea>
			<?php	include('shopping_cart.php');?>
			</div>
				<div class="col-md-6" style='background-color:;'>
				<div id="header">
<center> 
<h2><i>Пройти регистрацию</i></h2> 
 </center>
	</div>
	<center>
	<div id='my_form'>	
<?php include('errors.php'); ?> 	
<form method="post" action="page_registr.php" >                     <!--registration-->
					
<h4>Enter Username: <p>
<input type="text" name="username" id="enter_form"  value="<?php echo $username; ?>"> </p>
<h4>Enter email: <p>
<input type="email" name="email"  id="enter_form"  value="<?php echo $email; ?>"> </p>
<h4>Enter Password: <p>
<input type="password" name="password_1"> </p>		
<h4>Confirm password: <p>
<input type="password" name="password_2">  </p>
<h4>Enter comment: <p>
<input type="comment" name="comment3"  id="enter_form"  value="<?php echo $comment3; ?>"> </p>
<input type='hidden' name='pname'value="<?php echo $_SESSION['pname']=$value["item_pname"];?>" /> 
<input type='hidden' name='price'value="<?php echo $_SESSION['price']=$value["product_price"];?>" /> 
<input type='hidden' name='quantity'value="<?php echo $_SESSION['quantity']=$value["item_quantity"];?>" /> 
					<div class="input-group"> 
<button type="submit" class="btn btn-danger" name="reg_user" id="reg_user">REGISTER!</button> <!--reg_user-->
					</div> 
</form> 
					</div>
</center> 

<?php include('logout.php') ?> 
		<?php  if (isset($_SESSION['username'])) : ?> 
		<h2>
		2Welcome,  
		<strong> 
		<?php echo $_SESSION['username'].'!!!'; ?> <!-- registration-->
		</strong> 
		</h2> 
		<p>  
		<a href="page_registr.php?logout='1'" style="color: red;"> 
		Выйти из аккаунта?
		</a> 
		</p> 
		<?php
$result_query->close();
//Останавливаем  скрипт
exit(); 
		endif ?> 	

         </div>
</div>
</div>		 
             
<script src='modul/dom.js'></script>
</body>
</html>
	