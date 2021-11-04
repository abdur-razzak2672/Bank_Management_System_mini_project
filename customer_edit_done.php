<?php
include_once "login_check.php";
$c_id=$_SESSION["c_id"];
 
include_once "sql_connection.php";
if(isset($_POST["save"])){
  $name=$_POST["name"];
  $Account_No=$_POST["Account_No"];
  $Account_Type=$_POST["Account_Type"];
  $amount=$_POST["amount"];
  $address=$_POST["address"]; 
  $Date_Of_Birth=$_POST["Date_Of_Birth"];
  $nid=$_POST["nid"];
  $nationality=$_POST["nationality"];
  $gander=$_POST["gander"];
  $mobile=$_POST["mobile"];
  $sql="update create_account set name ='$name',address='$address',Date_Of_Birth='$Date_Of_Birth',nid='$nid',nationality='$nationality',gender='$gander',mobile='$mobile' where id = '$c_id' ";
  if(mysqli_query($connect_mysql,$sql)){
    echo "successfully added";
    header ("Location:customer_info.php");
  }else{
    echo "error: ". mysqli_error($connect_mysql);
  }
}




 ?>