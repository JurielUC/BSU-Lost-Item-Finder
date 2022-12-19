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
    $Finder=$_POST['findername'];
    $Time=$_POST['time'];
    $Date=$_POST['date'];
    $ItemNo=$_POST['itemno'];
    $ItemCategory=$_POST['itemcategory'];
    $ItemLoc=$_POST['itemlocation'];
    $Department=$_POST['department'];
    $Campus=$_POST['campus'];
    
    //insert data to tb_iteminfo table
    mysql_query("INSERT INTO tb_iteminfo(findername, time, date, itemno, itemcategory, itemlocation, department, campus) VALUES('$Finder','$Time','$Date','$ItemNo', '$ItemCategory','$ItemLoc','$Department', '$Campus')");

    header("location: admin_add.php");
    exit;
?>