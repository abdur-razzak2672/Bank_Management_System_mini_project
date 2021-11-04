<?php
include_once "login_check.php";
include_once "sql_connection.php";
$c_id=$_SESSION["c_id"];

   $sql="select * from create_account where id = '$c_id' ";
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
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Customer Profile</title>
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
		      .center {
			    margin-left:auto; 
			    margin-right:auto;
			  }


			td{
			  text-align: left;
			  font-size: 20px;
			 
 

			}

			th{
				text-align: left;
			    font-size: 20px;
			    width: 32%;
			 
			}
			td label {
				padding: 5px;
				font-weight: 0;

			}


			.top-bg{
				background: url(images/bg.png) no-repeat center;
				height: 100vh;
				color: #fff;
				min-width: 500px;
				background-size: cover;
			  background-size: 100% 100%;
			  position: relative;
			}


			.create_btn {
				margin: 15px 15px 20px 15%;
				font-size: 20px;
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
			<div class = "top_dot" style="text-align:center ; ">
			    <span class="dot active" onclick="currentSlide(1)">Home</span> 
			    <span class="dot" onclick="currentSlide(2)">View Transaction</span> 
			    <span class="dot" onclick="currentSlide(3)">Check Balance</span>
			    <a style="text-decoration: none;color: white;font-weight: 500;" href="logout.php">Logout</a> 
		    </div>
		    <div class="slideshow-container">
			    <div class="mySlides ">
					<div class="customer_login">
						<div class="form1" style="margin: 5% 1%;">
							<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

							<div class="container-fluid">
								<div class="row" >
									<div class="col-md-12">
										<table class="center">
											<?php
												 $sql="select * from create_account where id = '$c_id'";
										        $result=mysqli_query($connect_mysql,$sql);

										        if(mysqli_num_rows($result)>0){
										            while($row=mysqli_fetch_assoc($result)){
											            echo "<tr>";
											            echo "<td>"."<label>Holder Name  </label>"."</td>";
											            echo "<td>".$row['name']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>NID </label>"."</td>";
											            echo "<td>".$row['nid']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label> Date Of Birth</label>"."</td>";
											            echo "<td>".$row['Date_Of_Birth']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Nationality  </label>"."</td>";
											            echo "<td>".$row['nationality']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Amount </label>"."</td>";
											            echo "<td>".$row['amount']."</td>";
											            echo "</tr>";


											            echo "<tr>";
											            echo "<td>"."<label>Account No  </label>"."</td>";
											            echo "<td>".$row['Account_No']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Account Type</label>"."</td>";
											            echo "<td>".$row['Account_Type']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Mobile</label>"."</td>";
											            echo "<td>".$row['mobile']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Gander</label>"."</td>";
											            echo "<td>".$row['gender']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Address</label>"."</td>";
											            echo "<td>".$row['address']."</td>";
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


							<div class="create_btn">
								<a style="color: white;" class="dot" onclick="currentSlide(4)">Edit</a>
								<input type="submit" class="btnSubmit" value="Save"><br>
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

										        $sql="select * from create_account where id = '$c_id'";
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
									<table >
								<div class="row" >
									<div class="col-md-12">
										<table class="center">
											<?php

										        $sql="select * from create_account where id = '$c_id'";
										        $result=mysqli_query($connect_mysql,$sql);

										        if(mysqli_num_rows($result)>0){
										            while($row=mysqli_fetch_assoc($result)){
											            echo "<tr>";
											            echo "<td>"."<label>Holder Name  </label>"."</td>";
											            echo "<td>".$row['name']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Account No  </label>"."</td>";
											            echo "<td>".$row['Account_No']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>MICR NO</label>"."</td>";
											            echo "<td>".$row['MICR_No']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Balance </label>"."</td>";
											            echo "<td>".$row['amount']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Current Balance</label>"."</td>";
											            echo "<td>".$row['amount']."</td>";
											            echo "</tr>";

											            echo "<tr>";
											            echo "<td>"."<label>Available Balance</label>"."</td>";
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
						<div class="form1" style="margin: 5% 1%;">
							<h5>[ ** Dear applicant fillup all required information, otherwise your application will be rejected. ]</h5>

							<div class="container-fluid">
								<form action="customer_edit_done.php" method="post">
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
										<a class="dot" onclick="currentSlide(4)">Edit</a>
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