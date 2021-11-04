<?php
include_once "login_check.php";
include_once "sql_connection.php";
$c_id=$_SESSION["c_id"];
if(isset($_POST["submit"])){
	$Account_no1=$_POST["Account_no1"];
   $sql="select * from create_account where Account_No = '$Account_no1' ";
   $result=mysqli_query($connect_mysql,$sql);

   if(mysqli_num_rows($result)>0){
     while($row=mysqli_fetch_assoc($result)){
     $name=$row["name"];
     $Account_No=$row["Account_No"];
     $Account_Type=$row["Account_Type"];
	  $MICR_No=$row["MICR_No"];
	  $amount=$row["amount"];
	  $address=$row["address"]; 
	  $Date_Of_Birth=$row["Date_Of_Birth"];
	  $nid=$row["nid"];
	  $nationality=$row["nationality"];
	  $gander=$row["gender"];
	  $mobile=$row["mobile"];
	  $id=$row["id"];
     }
   }else{
   }
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Pannel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<style>
	    .mySlides {
	        display: none;
	        transition: all 06s ease;
	    }
	    img {
	        vertical-align: middle;
	    }

	    /* Slideshow container */
	    .slideshow-container {
	        max-width: 1000px;
	        position: relative;
	        margin: auto;
	    }

	     
	     



	    /* The dots/bullets/indicators */
	    .dot {
     
		        cursor : pointer ;
		        margin: 25px 20px;
		        border-radius: 6px;
		        display: inline-block;
		        transition: background-color 0.6s ease;
		        font-size: 18px;
		        border: 1px solid crimson;
		        padding: 0 2px;
		        background: crimson;
		    }
		    .active{
		    	color: crimson;
		    	background: white;
		    }

		    .dot:hover{
		    	color: crimson;
		    }
	     

	 

	    

	    /* On smaller screens, decrease text size */
	    @media only screen and (max-width: 300px) {
	        .prev, .next,.text {font-size: 11px}
	    }
	    table{
	    	text-align: center;
	    }


		td{
		  text-align: left;
		  width: 33%;
		  font-size: 20px;
		  margin: 0 80px;

		}
		th{
			text-align: left;
		    width: 33%;
		    font-size: 20px;
		    margin: 0 40px;
		}

		.customer_list{
			text-align: left;
		    width: 10%;
		    font-size: 15px;
		    margin: 0 40px;
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



	<section class="top-bg1">
		<div style="text-align:center">
		    <span class="dot active" onclick="currentSlide(1)">User Profile</span> 
		    <span class="dot" onclick="currentSlide(2)">Deposit</span> 
		    <span class="dot" onclick="currentSlide(3)">Withdraw</span> 
		    <span class="dot" onclick="currentSlide(4)">Transfer Money</span> 
		    <span class="dot" onclick="currentSlide(5)">View Balance</span> 
		    <span class="dot" onclick="currentSlide(6)">Transaction</span>
		    <span class="dot" onclick="currentSlide(7)">Customer List</span> 
		    <span class="dot" onclick="currentSlide(8)">About</span> 
		    <a style="text-decoration: none;color: white;font-weight: 500;" href="logout.php">Logout</a> 
	    </div>
	    <form action="admin_task.php" method="post" style="padding: 0 11%;">
	    	<br><input type="text" name="Account_no1">
	    	<input type="submit" name="submit" value = "Search">
	    	<?php 

	       $fifth = strtotime('fifth friday of this month');

				if (date('m') === date('m', $fifth)) {
				  echo  $fridays[4] =   date('Y-m-d', $fifth) ;
				}
				?>


	  


	     <?php
					function formMonth(){
					  $month = strtotime(date('Y').'-'.date('m').'-'.date('j').' - 12 months');
					  $end = strtotime(date('Y').'-'.date('m').'-'.date('j').' + 0 months');
					  $val=1;
					  echo "<select>";
					  while($month < $end){

					      $selected = (date('F', $month)==date('F'))? ' selected' :'';
					      echo '<option'.$selected.' value='.$val.'>'.date('F', $month).'</option>'."\n";
					      $month = strtotime("+1 month", $month);
					       $val++;
					  }
					   echo "</select>";
					}

					formMonth();


					echo "<select name='years'>";
				   for($i=-11; $i <= 9; $i++){
				        $test = date('Y', strtotime($i.'year'));
				        echo '<option value='.$test.'>'.$test.'</option>';
				   }
				echo "</select>";



					?>


	  

	   
	    
	    <div class="slideshow-container">
		    <div class="mySlides ">
					<div class="customer_login">
						<div class="form1" style="margin: 5% 1%;">
							<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

							<div class="container-fluid">
								<form action="admin_edit_done.php" method="post">
									<div class="row">
										<div class="col-md-6">
											<table>
												<tr>
													<td>
														<label><p>Name </p></label>	
													</td>
													<td>
														<input type="text" name="name" value="<?php echo $name  ?>">		
													</td>
												</tr>
												<tr>
													<td>
														<label>Date Of Birth </label>	
													</td>
													<td>
														<input type="text" name="Date_Of_Birth" value="<?php echo $Date_Of_Birth  ?>">		
													</td>
												</tr>
												<tr>
													<td>
														<label>NID</label>	
													</td>
													<td>
														<input type="text" name="nid" value="<?php echo $nid  ?>" >		
													</td>
												</tr>

												<tr>
													<td>
														<label>Nationality</label>	
													</td>
													<td>
														<input type="text" name="nationality"  value="<?php echo $nationality  ?>">		
													</td>
												</tr>

												<tr>
													<td>
														<label>Amount </label>	
													</td>
													<td>
														<input type="text" name="amount" value="<?php echo $amount  ?>">		
													</td>
												</tr>

												
											</table>
										</div>

										<div class="col-md-6">
											<table>
												<tr>
													<td>
														<label>Account No </label>	
													</td>
													<td>
														<input type="text" name="Account_No" value="<?php echo $Account_No  ?>">		
													</td>
												</tr>

												<tr>
													<td>
														<label>Account Type </label>	
													</td>
													<td>
														<input type="text" name="Account_Type" value="<?php echo $Account_Type  ?>">		
													</td>
												</tr>

												<tr>
													<td>
														<label>Mobile </label>	
													</td>
													<td>
														<input type="text" name="mobile" value="<?php echo $mobile  ?>">		
													</td>
												</tr>

												<tr>
													<td>
														<label>Gander </label>	
													</td>
													<td>
														<input type="text" name="gander" value="<?php echo $gander  ?>">		
													</td>
												</tr>

												<tr>
													<td>
														<label>Address</label>	
													</td>
													<td>
														<input type="text" name="address" value="<?php echo $address  ?>">		
													</td>
												</tr>
											</table>


										</div>
									</div>

									<div class="create_btn">
										<a style="color: white;" class="dot" onclick="currentSlide(9)">Edit</a>
										<input type="submit" class="btnSubmit" name="save" value="Save"><br>
									</div>
								</form>
							</div>


							
							
						</div>
					</div>
				</div>


			<div class="mySlides ">
				<div class="customer_login">
					<div class="form1">
						<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

						<div class="container">
							<div class="row">
								<div class="col-md-12" style="text-align: center;">
									<table style="text-align: center; margin: 0 20%;">
										<tr>
											<td>
												<label>Name</label>	
											</td>
											<td>
												<input type="text" name="" value="<?php echo $name  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>Account No</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $Account_No  ?>">		
											</td>
										</tr>

										<tr>
											<td>
												<label>Available Balance</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $amount  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>Deposit Amount</label>	
											</td>
											<td>
												<input type="text" name="">		
											</td>
										</tr>

										<tr>
											<td>
												<label>Total Balance</label>	
											</td>
											<td>
												<input type="text" name="">		
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="create_btn1">
							<input type="submit" class="btnSubmit1" value="Show">
							<input type="submit" class="btnSubmit" value="Deposit"><br>
						</div>
						
					</div>
				</div>
			</div>






			<div class="mySlides ">
				<div class="customer_login">
					<div class="form1">
						<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

						<div class="container">
							<div class="row">
								<div class="col-md-12" style="text-align: center;">
								<table style="text-align: center; margin: 0 20%;">
										<tr>
											<td>
												<label>Name</label>	
											</td>
											<td>
												<input type="text" name="" value="<?php echo $name  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>Account No</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $Account_No  ?>">		
											</td>
										</tr>

										<tr>
											<td>
												<label>Available Balance</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $amount  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>Deposit Amount</label>	
											</td>
											<td>
												<input type="text" name="">		
											</td>
										</tr>

										<tr>
											<td>
												<label>Total Balance</label>	
											</td>
											<td>
												<input type="text" name="">		
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="create_btn1">
							<input type="submit" class="btnSubmit1" value="Show">
							<input type="submit" class="btnSubmit" value="Withdraw"><br>
						</div>
						
					</div>
				</div>
			</div>





			<div class="mySlides ">
				<div class="customer_login">
					<div class="form1">
						<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

						<div class="container">
							<div class="row">
								<div class="col-md-12" style="text-align: center;">
									<table style="text-align: center; margin: 0 20%;">
										<tr>
											<td>
												<label>Name</label>	
											</td>
											<td>
												<input type="text" name="" value="<?php echo $name  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>Account No</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $Account_No  ?>">		
											</td>
										</tr>

										<tr>
											<td>
												<label>Available Balance</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $amount  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>Deposit Amount</label>	
											</td>
											<td>
												<input type="text" name="">		
											</td>
										</tr>

										<tr>
											<td>
												<label>Total Balance</label>	
											</td>
											<td>
												<input type="text" name="">		
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="create_btn1">
							<input type="submit" class="btnSubmit1" value="Show">
							<input type="submit" class="btnSubmit" value="Transfer"><br>
						</div>
						
					</div>
				</div>
			</div>


			<div class="mySlides ">
				<div class="customer_login">
					<div class="form1">
						<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

						<div class="container">
							<div class="row">
								<div class="col-md-12" style="text-align: center;">
									<table style="text-align: center; margin: 0 20%;">
										
										<tr>
											<td>
												<label>Name</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $name  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>Account No</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $Account_No  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>MICR No</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $MICR_No  ?>">		
											</td>
										</tr>

										<tr>
											<td>
												<label>Rate Of Interest</label>	
											</td>
											<td>
												<input type="text" name=""value="2.05%">		
											</td>
										</tr>
										<tr>
											<td>
												<label>Available Balance</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $amount  ?>">		
											</td>
										</tr>
										<tr>
											<td>
												<label>MOD Balance</label>	
											</td>
											<td>
												<input type="text" name=""value="<?php echo $amount  ?>">		
											</td>
										</tr>

										<tr>
											<td>
												<label>Nomination Registration</label>	
											</td>
											<td>
												<input type="text" name=""value="not set">		
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>




			<div class="mySlides ">
				<div class="customer_login">
					<div class="form1">
						<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<table>
										<tr>
											<th>Account No</th>
											<th>Name</th>
											<th>MICR No</th>
											<th>Balance</th>
										</tr>


										<?php

										  $sql="select * from create_account";
										  $result=mysqli_query($connect_mysql,$sql);

										  if(mysqli_num_rows($result)>0){
										    while($row=mysqli_fetch_assoc($result)){
											    echo "<tr>";
												    echo "<td >".$row['Account_No']."</td>";
												    echo "<td>".$row['name']."</td>";
												    echo "<td>".$row['MICR_No']."</td>";  
												    echo "<td>".$row['amount']."</td>";
											      echo "</tr>";
										    }
										  }else{
										    echo "There is no data";
										  }

										?>
									</table>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>




			<div class="mySlides ">
				<div class="customer_login">
					<div class="form1">
						<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<table>
										<tr >
											<th class="customer_list">Account No</th>
											<th class="customer_list">Name</th>
											<th class="customer_list">Date Of Birth</th>
											<th class="customer_list">Account Type</th>
											<th class="customer_list">Balance</th>
											<th class="customer_list">Gander</th>
											<th class="customer_list">Mobile Number</th>
										</tr>



										<?php

										  $sql="select * from create_account";
										  $result=mysqli_query($connect_mysql,$sql);

										  if(mysqli_num_rows($result)>0){
										    while($row=mysqli_fetch_assoc($result)){
											    echo "<tr>";
												    echo "<td >".$row['Account_No']."</td>";
												    echo "<td>".$row['name']."</td>";
												    echo "<td>".$row['Date_Of_Birth']."</td>";  
												    echo "<td>".$row['Account_Type']."</td>";
												    echo "<td>".$row['amount']."</td>";
												    echo "<td>".$row['gender']."</td>";  
												    echo "<td>".$row['mobile']."</td>";
											      echo "</tr>";
										    }
										  }else{
										    echo "There is no data";
										  }

										?>
									</table>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>





			<div class="mySlides ">
				<div class="customer_login">
					<div class="form1">
						<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h1>Abdur Razzak <br>Version 1.0</h1>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>


			<div class="mySlides ">
				<div class="customer_login">
					<div class="form1" style="margin: 5% 1%;">
						<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

						<div class="container-fluid">
							<form action="admin_edit_done.php" method="post">
								<div class="row">
									<div class="col-md-6">
										<table>
											<tr>
												<td>
													<label><p>Name </p></label>	
												</td>
												<td>
													<input type="text" name="name" value="<?php echo $name  ?>">		
												</td>
											</tr>
											<tr>
												<td>
													<label>Date Of Birth </label>	
												</td>
												<td>
													<input type="text" name="Date_Of_Birth" value="<?php echo $Date_Of_Birth  ?>">		
												</td>
											</tr>
											<tr>
												<td>
													<label>NID</label>	
												</td>
												<td>
													<input type="text" name="nid" value="<?php echo $nid  ?>" >		
												</td>
											</tr>

											<tr>
												<td>
													<label>Nationality</label>	
												</td>
												<td>
													<input type="text" name="nationality"  value="<?php echo $nationality  ?>">		
												</td>
											</tr>

											<tr>
												<td>
													<label>Amount </label>	
												</td>
												<td>
													<input type="text" name="amount" value="<?php echo $amount  ?>">		
												</td>
											</tr>

											
										</table>
									</div>

									<div class="col-md-6">
										<table>
											<tr>
												<td>
													<label>Account No </label>	
												</td>
												<td>
													<input type="text" name="Account_No" value="<?php echo $Account_No  ?>">		
												</td>
											</tr>

											<tr>
												<td>
													<label>Account Type </label>	
												</td>
												<td>
													<input type="text" name="Account_Type" value="<?php echo $Account_Type  ?>">		
												</td>
											</tr>

											<tr>
												<td>
													<label>Mobile </label>	
												</td>
												<td>
													<input type="text" name="mobile" value="<?php echo $mobile  ?>">		
												</td>
											</tr>

											<tr>
												<td>
													<label>Gander </label>	
												</td>
												<td>
													<input type="text" name="gander" value="<?php echo $gander  ?>">		
												</td>
											</tr>

											<tr>
												<td>
													<label>Address</label>	
												</td>
												<td>
													<input type="text" name="address" value="<?php echo $address  ?>">		
												</td>
											</tr>
										</table>


									</div>
								</div>

								<div class="create_btn">
									<a class="dot" onclick="currentSlide(9)">Edit</a>
									<input type="submit" class="btnSubmit" name="save" value="Save"><br>
								</div>
							</form>
						</div>					
					</div>
				</div>
			</div>

		</div>
	</section>

	<footer class="btm-foot">
		<i class="fa fa-copyright"> Abdur Razzak</i>
	</footer>

    <script>
	    var slideIndex = 1;
	    showSlides(slideIndex);

	    function plusSlides(n) {
	      showSlides(slideIndex += n);
	    }

	    function currentSlide(n) {
	      showSlides(slideIndex = n);
	    }

	    function showSlides(n) {
	        var i;
	        var slides = document.getElementsByClassName("mySlides");
	        var dots = document.getElementsByClassName("dot");
	        if (n > slides.length) {slideIndex = 1}    
	        if (n < 1) {slideIndex = slides.length}
	        for (i = 0; i < slides.length; i++) {
	          slides[i].style.display = "none";  
	        }
	        for (i = 0; i < dots.length; i++) {
	            dots[i].className = dots[i].className.replace(" active", "");
	        }
	        slides[slideIndex-1].style.display = "block";  
	        dots[slideIndex-1].className += " active";
	    }
    </script>

</body>
</html>