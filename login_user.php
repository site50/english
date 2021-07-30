<?php
require_once('inc.session5.php');
require('connection.php');
require_once('cart10.php');	

$username = ""; 
$email    = ""; 
$comment3    = ""; 
$errors = array();  
$_SESSION['success'] = ""; 
		if (isset($_POST['login_user'])) { 
$username = mysqli_real_escape_string($con, $_POST['username']); 
$password = mysqli_real_escape_string($con, $_POST['password']); 
	$pname = mysqli_real_escape_string($con, $_POST['pname']); //change on con , was $bd!!!
	$price = mysqli_real_escape_string($con, $_POST['price']); 
	$quantity = mysqli_real_escape_string($con, $_POST['quantity']); //change on con , was $bd!!!
	$email = mysqli_real_escape_string($con, $_POST['email']); 
    $comment3 = mysqli_real_escape_string($con, $_POST['comment3']); 
if (empty($username)) { 
array_push($errors, "Username is required"); 
} 
if (empty($password)) { 
array_push($errors, "Password is required"); 
} 
if (count($errors) == 0) { 
$password = md5($password); 
		$query = "SELECT * FROM lesson1 WHERE username= '$username' AND password='$password'"; 
		$results = mysqli_query($con, $query); 
	if (mysqli_num_rows($results) >= 1) {         //change == on >=
	$query = "INSERT INTO lesson1 (pname, price, quantity, username, email, password, comment3)  
			VALUES('$pname', '$price', '$quantity','$username', '$email', '$password','$comment3')";  
			mysqli_query($con, $query); 
$_SESSION['username'] = $username; 
$_SESSION['email'] = $email; 
$_SESSION['success'] = "Вы вошли в свой аккаунт!"; 
header("Location: other1.php");
} 
else { 
array_push($errors, "Username or password incorrect");  
}
}
}
?>
