<?php 
    session_start();
    $dbname = "db_batstateu";
    $conn = mysqli_connect("localhost", "root", "", $dbname);
    
    $user_check=$_SESSION['login_user'];
    $ses_sql=mysqli_query($conn,"select email,srcode from tb_accounts where email='$user_check'");
    $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    $loggedin_session=$row['email'];
    $loggedin_id=$row['srcode'];
    if(!isset($loggedin_session) || $loggedin_session==NULL) {
        echo "Go back";
        header("Location: index.php");
    }
?>