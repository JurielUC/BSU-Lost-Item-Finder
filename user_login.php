<?php
session_start();
$dbname = "db_batstateu";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $password=mysqli_real_escape_string($conn,$_POST['password']);
 $result = mysqli_query($conn,"SELECT * FROM tb_accounts");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$email || $c_rows!=$password) {
  header("location: index.php?remark_login=failed");
 }
 $sql="SELECT srcode FROM tb_accounts WHERE email='$email' and password='$password'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 $count=mysqli_num_rows($result);
 if($count==1) {
  $_SESSION['login_user']=$email;
  header("location: viewer_home.php");
 }
}
?>
