<?php
	session_start(); 
	if(isset($_SESSION['loginUser'])){
		echo "<title>".$_SESSION['loginUser']."</title>";
	}
	else{
		header("Location:logout.php");
	}

?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<link rel='stylesheet' href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head> 
<body>
	<div class="topStyle">
		<h2 style="color:white;">Garage Management System</h2>
		<a class='userNameDisplay'><?php echo $_SESSION['loginUser']; ?></a>
	</div>
	<div class='sidebar'>
		<button onclick="location.href='customerHome.php'">Home</button>
		<button onclick="location.href='viewProductsCustomer.php'">Employees</button>
		<button onclick="location.href='order.php'">Services</button>
		<button onclick="location.href='cart.php'">Bill</button>
		<button onclick="location.href='customerViewTransactions.php'">Billing History</button>
		<button onclick="location.href='logout.php'">Logout</button>
	</div>
<div class='container'>

	<fieldset><legend><b>You can</b></legend>
<p>- View Employees
- View Services
-View Billing History
</p>
</fieldset>



</div>
</body>
</html>