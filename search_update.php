<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Update</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="./images/bsu-logo.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <div class="header" id="header">
                <div class="logo-name">
                    <img src="./images/bsu-logo.png" width="40" height="40">
                    <h1>BSU Online Campus Lost-Item Finder System</h1>
                    <p>(Admin)</p>
                </div>
            </div>
            <div class="divider">
                <p>Batangas State University</p>
            </div>
        </header>
        <nav class="navigation" id="navigation">
                <div class="nav-links" id="myDIV">
                    <a href="admin_home.php" class="nav-link"><img src="./images/home-icon.png" width="18" height="18" style="margin-right: 3px;">Home</a>
                    <a href="admin_add.php" class="nav-link active"><img src="./images/add-icon.png" width="18" height="18" style="margin-right: 3px;">Item Records</a>
                    <a href="admin_messages.php" class="nav-link"><img src="./images/messages-icon.png" width="18" height="18" style="margin-right: 3px;">Messages</a>
                    <a href="admin_accounts.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Accounts</a>
                    <a href="admin_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <div class="message-nav-parent">
                <div class="message-nav">
                    <a href="admin_add.php" class="msg-nav-child"><img src="./images/add-icon.png" width="18" height="18" style="margin-right: 3px;">AddItem</a>
                    <a href="admin_update.php" class="msg-nav-child --msg-active"><img src="./images/update-icon.png" width="18" height="18" style="margin-right: 3px;">Update</a>
                    <a href="admin_claimed.php" class="msg-nav-child"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed</a>
                </div>
        </div>
        <div class="search-bar">
        <a class="search-back" title="Back" href='admin_update.php'><img src="./images/backsearch-icon.png" width="20" height="20"></a>
        </div>
        <main>
            <section class="forms-input" id="form-output">
                <div class="output-container">
                <?php
                    ini_set('display_errors',1);
                    //error_reporting(E_ALL & ~E_NOTICE);
                    Error_reporting(0);
                    //Make a MySQL Connection
                    //server           
                    //echo" Connected to database ";
                    mysql_connect("localhost", "root", "");
                    //echo" Connected to localhost ";
                    //database
                    mysql_select_db("db_batstateu");

                    if(isset($_POST['search']))
                    {
                        $Finder=$_POST['findername'];
                        $Time=$_POST['time'];
                        $Date=$_POST['date'];
                        $ItemNo=$_POST['itemno'];
                        $ItemCategory=$_POST['itemcategory'];
                        $ItemLoc=$_POST['itemlocation'];
                        $Department=$_POST['department'];
                        $Campus=$_POST['campus'];

                        $result=mysql_query("SELECT * FROM tb_iteminfo WHERE itemno='$ItemNo'") or die("Error");
                        if(mysql_num_rows($result)>0)
                        {

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
                                    <div class="output-five output">
                                        <a style="color:#990000; margin: 10px 50px;" href='Update_form.php?edit=<?php echo $row['itemno']; ?> & finder=<?php echo $row['findername']; ?> & time=<?php echo $row['time']; ?> & date=<?php echo $row['date']; ?> & category=<?php echo $row['itemcategory']; ?> & location=<?php echo $row['itemlocation']; ?> & department=<?php echo $row['department']; ?> & campus=<?php echo $row['campus']; ?>'>Edit</a>
                                        <input style="color:#990000; margin: 10px 50px; border:none; background-color: #cccccc; font-size: 1rem; text-decoration: underline; cursor: pointer;" type="button" onClick="deleteAcc(<?php echo $row['itemno']; ?>)" name= "Delete" value="Delete">
                                    </div>
                                </div>
                            <?php
                            }
                        }else{
                            echo "<div class='nodata'>
                                    <img src='./images/nodata.png' width='120px' height='120px'>
                                    <p>No Item Found</p>
                                  </div>";}
                            }
                        ?>
                </div>
            </section>
        </main>
        <!--Back to top button-->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="./images/backtop-icon.png" alt="" width="60" height="50"></button>
        <!--JavaScript Codes-->
        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");
            
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
            }
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            }
        </script>

        <!------Deleting Record---->
        <script language="Javascript">
            function deleteAcc(delid)
            {
                if(confirm("Do you want to delete this record?")){
                    window.location.href='delete_added_data.php?id=' +delid+'';
                    setInterval(function(){
                        alert("Deleted Successfully!");}, 3000)
                    return true;
                }
            }
        </script>
        </main>
    </body>
</html>