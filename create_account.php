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
	<style>
		table{
	    	text-align: center;
	    }


		td {
		  text-align: left;
		  width: 50%;
		  font-size: 20px;
		  margin: 0 80px;

		}
		td label {
			padding: 5px;
			font-weight: 0;

		}
	</style>
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
			<input type="submit" class="btnSubmit" value="Customer Login" />
			<input type="submit" class="btnSubmit" value="Admin Login" />
		</div>
		<div class="customer_login">
			 <h3>Please Fillup Information</h3>
			<div class="form1">
				<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

				<div class="container-fluid">
					<form action="create_account_server.php" method="post">
						<div class="row">
							<div class="col-md-6">
								<form>
								<table>
									<tr>
										<td>
											<label><p>Account No </p></label>	
										</td>
										<td>
											<input type="text" name="account">		
										</td>
									</tr>
									<tr>
										<td>
											<label>MICR NO  </label>	
										</td>
										<td>
											<input type="text" name="micr">		
										</td>
									</tr>
									<tr>
										<td>
											<label>Password</label>	
										</td>
										<td>
											<input type="text" name="password">		
										</td>
									</tr>

									<tr>
										<td>
											<label><p>Account Type </p></label>	
										</td>
										<td>
											<input type="text" name="type">		
										</td>
									</tr>
									<tr>
										<td>
											<label>Amount  </label>	
										</td>
										<td>
											<input type="text" name="amount">		
										</td>
									</tr>
									<tr>
										<td>
											<label>Address</label>	
										</td>
										<td>
											<input type="text" name="address">		
										</td>
									</tr>
								</table>
							</div>

							<div class="col-md-6">
								<table>
									<tr>
										<td>
											<label><p>Holder Name </p></label>	
										</td>
										<td>
											<input type="text" name="name">		
										</td>
									</tr>
									<tr>
										<td>
											<label>Date Of Birth  </label>	
										</td>
										<td>
											<input type="text" name="dob" >		
										</td>
									</tr>
									<tr>
										<td>
											<label>NID</label>	
										</td>
										<td>
											<input type="text" name="nid">		
										</td>
									</tr>

									<tr>
										<td>
											<label><p>Gander </p></label>	
										</td>
										<td>
											<input type="text" name="gander">		
										</td>
									</tr>
									<tr>
										<td>
											<label>Mobile </label>	
										</td>
										<td>
											<input type="text" name="mobile">		
										</td>
									</tr>
									<tr>
										<td>
											<label>Nationality</label>	
										</td>
										<td>
											<input type="text" name="nationality">		
										</td>
									</tr>
								</table>
								
							</div>

						</div>
						<div class="create_btn">
							<input type="submit" class="btnSubmit1"name = "submit" value="Submit">
							<input type="submit" class="btnSubmit" value="Back"><br>
						</div>
					</form>
				</div>
 
				
			</div>
		</div>
	</section>

	<footer class="btm-foot">
		<i class="fa fa-copyright"> Abdur Razzak</i>
	</footer>





</body>
</html>

