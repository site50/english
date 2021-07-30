<?php
//session_start();
$username = ""; 
$pname = ""; 
$email    = ""; 
$comment3  = ""; 
$errors = array();  
$_SESSION['success'] = ""; 
		$con = mysqli_connect('localhost','j1136241','j1136241','j1136241'); //change on con, was $bd!!!!
		if (isset($_POST['reg_user']))
	{ 
	$pname = mysqli_real_escape_string($con, $_POST['pname']); //change on con , was $bd!!!
	$price = mysqli_real_escape_string($con, $_POST['price']); 
	$quantity = mysqli_real_escape_string($con, $_POST['quantity']); //change on con , was $bd!!!

	$username = mysqli_real_escape_string($con, $_POST['username']); //change on con , was $bd!!!
	$email = mysqli_real_escape_string($con, $_POST['email']); 
	$comment3 = mysqli_real_escape_string($con, $_POST['comment3']); 
	$password_1 = mysqli_real_escape_string($con, $_POST['password_1']); 
	$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

	if (empty($pname)) { array_push($errors, "pname is required"); } 
	if (empty($price)) { array_push($errors, "price is required"); } 
	if (empty($quantity)) { array_push($errors, "quantity is required"); } 

	if (empty($username)) { array_push($errors, "Username is required"); } 
	if (empty($email)) { array_push($errors, "Email is required"); } 
	if (empty($password_1)) { array_push($errors, "Password is required"); } 
	if ($password_1 != $password_2) { 
	array_push($errors, "The two passwords do not match"); 
	} 
			if (count($errors) == 0) { 
			$password = md5($password_1); 
$query = "INSERT INTO lesson1 (pname, price, quantity, username, email, password, comment3)  
VALUES('$pname', '$price', '$quantity','$username', '$email', '$password', '$comment3')";  
mysqli_query($con, $query); 
$_SESSION['pname']=$pname;
$_SESSION['quantity']=$quantity;
$_SESSION['price']=$price;
$_SESSION['email']=$email;
$_SESSION['comment3']=$comment3;
			$_SESSION['username'] = $username; 
			$_SESSION['success'] = "Вы вошли в аккаунт!"; 
			
			header("Location: enter_account.php");
			} 
			else { 
echo "ffff";  
}
	} 
	?>
	<?php
// $mysqli = new mysqli('localhost','root','root','new1');                
// if (($_SERVER['REQUEST_METHOD'] =='POST')&& isset($_POST['reg_user']))
// { 
// $pname = $mysqli->real_escape_string($_POST['pname']);
// $quantity = $mysqli->real_escape_string($_POST['quantity']);
// $price = $mysqli->real_escape_string($_POST['price']);

// $username = $mysqli->real_escape_string($_POST['username']);
// $email = $mysqli->real_escape_string($_POST['email']);
// $password_1 = $mysqli->real_escape_string($_POST['password_1']); 
// $password_2 = $mysqli->real_escape_string($_POST['password_2']);

// if (empty($pname)) { array_push($errors, "pname is required"); } 
	// if (empty($price)) { array_push($errors, "price is required"); } 
	// if (empty($quantity)) { array_push($errors, "quantity is required"); } 

	// if (empty($username)) { array_push($errors, "Username is required"); } 
	// if (empty($email)) { array_push($errors, "Email is required"); } 
	// if (empty($password_1)) { array_push($errors, "Password is required"); } 
	// if ($password_1 != $password_2) { 
	// array_push($errors, "The two passwords do not match"); 
	// } 

// if (count($errors) == 0) { 
			// $password = md5($password_1); 


// $_SESSION['pname']=$pname;
// $_SESSION['quantity']=$quantity;
// $_SESSION['price']=$price;
// $_SESSION['username'] = $username; 
// $_SESSION['success'] = "You have logged in"; 
// $sql = "INSERT INTO lesson1 (pname, quantity, price,username,email,password)"
// . "VALUES ('$pname','$quantity','$price','$username','$email','$password')";


// if ($mysqli->query($sql) === true)
// if ($_POST ['pname']) 
// echo '<center><h4>'.$pname.','.' I will contact you soon with Your email'.'  '.$quantity.'</br>';
// }}
?> 