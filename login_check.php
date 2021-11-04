<?php
session_start();
if(!isset($_SESSION["c_id"])){
    header("Location:login.php");
 
}


 