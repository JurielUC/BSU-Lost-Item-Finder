<?php 
session_start(); //starts all the sessions  
if($_SESSION["userlogin"] == NULL) { 
   header('Location: index.php'); //take user to the login page if there's no information stored in session variable 
}
?>