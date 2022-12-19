<?php
    ini_set('display_errors',1);
    //error_reporting(E_ALL & ~E_NOTICE);
    Error_reporting(0);
    //Make a MySQL Connection
    mysql_connect("localhost", "root", "", "db_batstateu");
    //echo" Connected to localhost ";
    //database
    mysql_select_db("db_batstateu");
    //echo" Connected to database ";
    $SrCode=$_POST['srcode'];
    $ItemNumber=$_POST['itemnumber'];
    $Myfile=$_FILES['myfile']['name'];
    $Description=$_POST['description'];

    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable

    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $dst = "./all_images/".$var3.$Myfile;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$Myfile; // storing image path into the database with 32 characters hex number and file name
                
    move_uploaded_file($_FILES["myfile"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name

    date_default_timezone_set("Asia/Kuala_Lumpur");
    $today = date("Y-m-d H:i:s");

    $trim_srcode = trim($SrCode);
    $trim_itemno = trim($ItemNumber);

    mysql_query("INSERT INTO tb_messages(srcode, itemnumber, myfile, description, datetime) VALUES('$trim_srcode','$trim_itemno', '$dst_db', '$Description', '$today')");

    header("location: viewer-found.php");
    exit;
?>