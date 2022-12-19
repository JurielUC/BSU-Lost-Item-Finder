<?php

ini_set('display_errors',1);
//error_reporting(E_ALL & ~E_NOTICE);
Error_reporting(0);
//Make a MySQL Connection
//server
mysql_connect("localhost", "root", "", "db_batstateu");
//echo" Connected to localhost ";
//database
mysql_select_db("db_batstateu");
//echo" Connected to database ";

$result=mysql_query("SELECT * FROM tb_iteminfo Order By itemno DESC") or die("Error");
$count=mysql_query("select count(1) FROM tb_iteminfo");
$rows = mysql_fetch_array($count);

$total = $rows[0];
echo "Number of Found Item: " . $total;
//if table has no data
if (mysql_num_rows($result) == 0) {
    echo "<div class='nodata'>
            <img src='./images/nodata.png' width='120px' height='120px'>
            <p>No Data</p>
          </div>";
}
while($row=mysql_fetch_assoc($result))
{
?>
    <div class='output-cont-child'>
        <div class="output-one output">
            <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Finder: </span><?php echo $row['findername']; ?></p>
            <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Item No: </span><?php echo $row['itemno']; ?></p>
        </div>
        <div class="output-two output">
            <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Time: </span><?php echo $row['time']; ?></p>
            <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Date: </span><?php echo $row['date']; ?></p>
        </div>
        <div class="output-three output">
            <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Item Category: </span><?php echo $row['itemcategory']; ?></p>
            <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Item Location: </span><?php echo $row['itemlocation']; ?></p>
        </div>
        <div class="output-four output">
            <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Department: </span><?php echo $row['department']; ?></p>
            <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Campus: </span><?php echo $row['campus']; ?></p>
        </div>
    </div>
    
<?php

}
?>