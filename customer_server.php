<?php 
session_start();
$login_account = $_POST["login_account"];
$login_password = $_POST["login_password"];
$c_id = $GET["id"];
include_once "sql_connection.php";
$sql = "select * from create_account where Account_No = '$login_account' and password = '$login_password'";
$result=mysqli_query($connect_mysql,$sql);

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION["c_id"] =$row["id"];
		echo $_SESSION["c_id"];
		header("Location:customer_info.php");


	}
}else{
	header("Location:customer_login.php");
}




 ?>