<?php 
session_start();
$login_email = $_POST["login_email"];
$login_password = $_POST["login_password"];
include_once "sql_connection.php";
$sql = "select * from admin where email = '$login_email' and password = '$login_password'";
$result=mysqli_query($connect_mysql,$sql);

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$_SESSION["c_id"] =$row["id"];
		echo $_SESSION["c_id"];
		header("Location:admin_task.php");


	}
}else{
	header("Location:admin_login.php");
}




 ?>