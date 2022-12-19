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
    $fullname=$_POST['fullname'];
    $srcode=$_POST['srcode'];
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $program=$_POST['program'];
    $department=$_POST['department'];
    $campus=$_POST['campus'];

    $trim_fullname = trim($fullname);
    $trim_srcode = trim($srcode);
    $valid_email = trim($email);
    $extension = "@g.batstate-u.edu.ph";
    $full_email = sprintf("%s%s", $valid_email, $extension);

    //insert data to tb_accounts table
    mysql_query("INSERT INTO tb_accounts(fullname, srcode, contactno, email, password, program, department, campus) VALUES('$trim_fullname','$trim_srcode','$contactno','$full_email', '$password','$program','$department', '$campus')");

    header("location: create_account.php");
    exit;
?>