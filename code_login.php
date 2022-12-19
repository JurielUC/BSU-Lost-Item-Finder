<?php
session_start();
$dbname = "db_batstateu";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$_SESSION["userlogin"] = "admin_email";

if(isset($_POST['admin_email']) && isset($_POST['admin_password'])){
    
    $email = ($_POST['admin_email']);
    $password = ($_POST['admin_password']);
    }
    
    if (empty($email)) {
        header("Location: admin_login.php?error=Username is required");
        exit();
    }else if(empty($password)){
        header("Location: admin_login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM tb_admin WHERE admin_email='$email' AND admin_password='$password'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result)=== 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['admin_email']=== $email && $row['admin_password']===$password){
                echo"<meta http-equiv='refresh' content='0;url=admin_home.php'>";
                
            }else{
                header("Location: admin_login.php");
                exit();
            }              
    }else{
        header("Location: admin_login.php?error=Incorrect Password or Username");
        exit();
    }
}
?>
