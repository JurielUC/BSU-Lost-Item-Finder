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
    $Owner=$_POST['owner'];
    $ItemNo=$_POST['itemno'];
    $TimeDate=$_POST['tdclaimed'];
    //inserting data from tb_iteminfo to tb_claimedrecord
    mysql_query("INSERT INTO tb_claimedrecord (SELECT * FROM tb_iteminfo WHERE itemno='$ItemNo')");
    mysql_query("INSERT INTO tb_claimedowner(itemno, owner, tdclaimed) VALUES('$ItemNo','$Owner','$TimeDate')");
    mysql_query("DELETE FROM tb_iteminfo WHERE itemno = $ItemNo");

    header("location: admin_claimed.php");
    exit;
?>