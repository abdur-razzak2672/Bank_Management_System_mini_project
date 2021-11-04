<?php
 
include_once "sql_connection.php";
if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $Account_No=$_POST["account"];
  $password=$_POST["password"];
  $Account_Type=$_POST["type"];
  $MICR_No=$_POST["micr"];
  $amount=$_POST["amount"];
  $address=$_POST["address"]; 
  $Date_Of_Birth=$_POST["dob"];
  $nid=$_POST["nid"];
  $nationality=$_POST["nationality"];
  $gander=$_POST["gander"];
  $mobile=$_POST["mobile"];
  $sql="Insert into create_account(name,Account_No,password,Account_Type,MICR_No,amount,address,Date_Of_Birth,nid,nationality,gender,mobile) values('$name','$Account_No','$password','$Account_Type','$MICR_No',$amount,'$address','$Date_Of_Birth',$nid,'$nationality','$gander','$mobile')";
  if(mysqli_query($connect_mysql,$sql)){
    echo "successfully added";
  }else{
    echo "error: ". mysqli_error($connect_mysql);
  }
}




 ?>