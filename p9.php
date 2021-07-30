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
<!--<link href="int.geog.sp.css" rel="stylesheet">-->
<link href="css/menu1.css" rel="stylesheet">
<link href="css/menu1_cart.css" rel="stylesheet">
<style>

</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12" style='background-color:;'>
  <div id='menu' style="display:"></div>
<textarea id='enter' style='display:none;'/></textarea>
<div id="lesson"><center><h2><b>Вы можете заказать индивидуальную программу обучения 
<h4>Выбрать интересующую для вас тему и вам будет подобран материал для обучения
</center>
</div>
</div>
</div>
		<div class="row">
		<div class="col-md-2" style='background-color:;'></div>
		<div class="col-md-8" style='background-color:;' >
			<center>		<?php include('cart_add.php') ?>	</center>		 
		</div>
		<div class="col-md-2" style='background-color:;'></div>
		</div>
<div class="row">
<div class="col-md-2" style='background-color:;'></div>
<div class="col-md-4" style='background-color:;'>
		
</div>	
<div class="col-md-4" style='background-color:;'>

</div>

<div class="col-md-2" style='background-color:;'></div>
</div>

<div class="row">
<div class="col-md-2" style='background-color:;'></div>
<div class="col-md-4" style='background-color:;'>
<?php
$userErr = $emailErr = "";
$user = $email = $comment3 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["user"])) {
$userErr = "Name is required";
} else {
$user = test_input($_POST["user"]);
if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
$userErr = "Only letters and white space allowed";    }  }
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";     }  }
if (empty($_POST["comment3"])) {
$comment3 = "";  } else {
$comment3 = test_input($_POST["comment3"]);  }}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;}
?>
<center>
<div id='form1'>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"enctype="multipart/form-data"
		autocomplete="off">
		<div class="form-group">
		<label for="Name">Форма для связи</label>
		<input type="text"  name="user" value="<?php echo $user;?>"
		autofocus pattern="^[a-zA-Z]+$" maxlength="10" required placeholder="your name" class="form-control"  >
		<span class="error"> <?php echo $userErr;?></span>
		</div>
		<div class="form-group">
		<label for="pwd"> Email:</label>
		<input type="email" rows="23" cols="40" name="email" value="<?php echo $email;?>"
		pattern="^[a-zA-Z]^+S\[ 0-9]+$\@\{19}"  required placeholder="your email" class="form-control" >
		</div>
		<div class="form-group">
		<label for="pwd">Your comment:</label>
		<input type="text" name="comment3" value=""  value="<?php echo $comment3;?>"maxlength="200"
		autofocus pattern="^[a-zA-Z]+$\ ^[ 0-9]+$\\d+(,\d{2})?"  required placeholder="comment"  class="form-control" >
		</div>
		<input type="submit" name="submit" value="Submit" class="btn btn-danger">
		</form>
</div>
</center>
<?php
$mysqli = new mysqli('localhost','j1136241','j1136241','j1136241');                
if ($_SERVER['REQUEST_METHOD'] =='POST')
{ 
//$id = $mysqli->real_escape_string($_GET['id']);
$user = $mysqli->real_escape_string($_POST['user']);
$email = $mysqli->real_escape_string($_POST['email']);
$comment3 = $mysqli->real_escape_string($_POST['comment3']);
//$_SESSION['id']=$id;
$_SESSION['user']=$user;
$_SESSION['email']=$email;
$_SESSION['comment3']=$comment3;
$sql = "INSERT INTO human ( user,  email,comment3)"
. "VALUES ('$user','$email','$comment3')";
if ($mysqli->query($sql) === true)
if ($_POST ['user']) 
	
?>
</div>
	<div class="col-md-4" style='background-color:;'>
		<?php
echo '<div id="comment">'.$user.','.' I will contact you soon with Your email</div>';
}	
?>
	

</div>

<div class="col-md-2" style='background-color:;'></div>
</div>
</div>	
	<script src='modul/dom.js'></script>		
</body>
</html>