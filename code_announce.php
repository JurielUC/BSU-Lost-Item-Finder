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
    $Department=$_POST['department'];
    $Campus=$_POST['campus'];
    $Caption=$_POST['caption'];

    date_default_timezone_set("Asia/Kuala_Lumpur");
    $today = date("Y-m-d H:i:s");
    
    //insert data to tb_iteminfo table
    mysql_query("INSERT INTO tb_announcement(department, campus, caption, timedate) VALUES('$Department', '$Campus', '$Caption', '$today')");

    header("location: admin_home.php");
    exit;
?>