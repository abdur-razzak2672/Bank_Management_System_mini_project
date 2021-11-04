<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customer Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<section>
	 
		<nav>
			<ul class="top-left">
			  <li><a>Contact Us : <i class="fas fa-phone"></i> 01734360072 </a></li>
			  <li> <a ><i class="fa fa-envelope"></i> abdur35-2672@diu.edu.bd.com </a></li>
			</ul>
			<ul  class="top-right">
				<li >
				    <a href="#"><i class="fa fa-facebook"></i> </a>
				</li>
				<li>
				    <a href="#"><i class="fa fa-whatsapp"></i> </a>
				</li>
				<li>
				    <a href="#"><i class="fa fa-twitter"></i> </a>
				</li>
				<li>
				    <a href="#"><i class="fa fa-linkedin"></i> </a>
				</li>
			</ul>
		</nav>
	</section>

	<section class="top-bg">
		<div class="login">
			<form action="customer_login.php" method="get">
				<input  type="submit" class="btnSubmit" value="Customer Login" />
			</form>
			<form action="admin_login.php" method="get">
				<input  type="submit" class="btnSubmit" value="Admin Login" />
			</form>>
		</div>
		<div class="customer_login">
			 g
			<div class="form">
				<h1>Customer Login</h1>
				<form action="customer_server.php" method="post">
					<div class="text_input">
						<label>Account No   </label>
						<input type="number" name="login_account"><br>
						<label> Password N </label>
						<input type="Password" name="login_password"><br>
						<div class="login_btn">
							<input  type="submit" class="btnSubmit1" value="Login">
							<a href="create_account.php">Creat Account</a>
							
						</div>
					</div>
				</form>


      
				

				 
				<div class="back_btn">
					<input type="submit" class="btnSubmit" value="Back">
					<input type="submit" class="btnSubmit" value="Help">
				</div>
			</div>
		</div>
	</section>

	<footer class="btm-foot">
		<i class="fa fa-copyright"> Abdur Razzak</i>
	</footer>





</body>
</html>