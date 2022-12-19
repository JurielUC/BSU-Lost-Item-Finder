<?php
    ini_set('display_errors',1);
    //error_reporting(E_ALL & ~E_NOTICE);
    Error_reporting(0);
    //Make a MySQL Connection
    //server
    mysql_connect("localhost", "root", "");
    //echo" Connected to localhost ";
    //database
    mysql_select_db("db_batstateu");
    //echo" Connected to database ";
    $fullname=$_POST['admin_name'];
    $email=$_POST['admin_email'];
    $password=$_POST['admin_password'];
    $department=$_POST['admin_department'];
    $campus=$_POST['admin_campus'];
    //insert data to tb_accounts table
    mysql_query("INSERT INTO tb_admin(admin_name, admin_email, admin_password, admin_department, admin_campus) VALUES('$fullname','$email', '$password','$department', '$campus')");

    header("location: admin_admin-accounts.php");
    exit;
?>