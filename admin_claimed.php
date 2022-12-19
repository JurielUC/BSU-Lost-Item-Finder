<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Claim</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="./images/bsu-logo.png" type="image/x-icon">
    </head>
    <?php include 'code_session.php'; ?>
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
                <a href="admin_update.php" class="msg-nav-child"><img src="./images/update-icon.png" width="18" height="18" style="margin-right: 3px;">Update</a>
                <a href="admin_claimed.php" class="msg-nav-child --msg-active"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed</a>
            </div>
        </div>
        <main>
            <section class="forms-input">
                    <form class='form' action="code_claimed.php" method="POST" enctype="multipart/form-data">
                        <div class="first-three">
                            <input class="input big" type="text" placeholder="Owner..." name="owner" required>
                            <input class="input small" type="text" placeholder="Item No..." name="itemno" required>
                            <input class="input small" type="datetime-local" placeholder="Time/Date Recieved..." name="tdclaimed" >
                        </div>
                        <div class="second-three">
                            <input class="input button-claimed" type="submit" name="Submit" value="Submit">
                        </div>
                    </form>
            </section>
            <section class="form-output" id="form-output">
                <div class="output-container">
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
                    //selecting all data from tb_claimedrecord with tb_claimedowner
                    $result=mysql_query("SELECT * FROM tb_claimedrecord INNER JOIN tb_claimedowner ON tb_claimedrecord.clitemno = tb_claimedowner.itemno Order by tdclaimed DESC") or die("Error");
                    $count=mysql_query("select count(1) FROM tb_claimedrecord");
                    $rows = mysql_fetch_array($count);

                    $total = $rows[0];
                    echo "Number of Returned Item: " . $total;
                    //if table has no data
                    if (mysql_num_rows($result) == 0) {
                        echo "<div class='nodata'>
                                <img src='./images/nodata.png' width='120px' height='120px'>
                                <p>No Data</p>
                              </div>";
                        exit;
                    }
                    while($row=mysql_fetch_assoc($result))
                    {
                    ?>
                        <div class='output-cont-child'>
                            <div class="output-one output">
                                <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Finder: </span><?php echo $row['clfinder']; ?></p>
                                <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Item No: </span><?php echo $row['clitemno']; ?></p>
                             </div>
                            <div class="output-two output">
                                <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Time: </span><?php echo $row['cltime']; ?></p>
                                <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Date: </span><?php echo $row['cldate']; ?></p>
                            </div>
                            <div class="output-three output">
                                <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Item Category: </span><?php echo $row['clitemcategory']; ?></p>
                                <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Item Location: </span><?php echo $row['clitemlocation']; ?></p>
                            </div>
                            <div class="output-four output">
                                <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Department: </span><?php echo $row['cldepartment']; ?></p>
                                <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Campus: </span><?php echo $row['clcampus']; ?></p>
                            </div>
                            <div class="output-five output">
                                <p class="p-one"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Owner: </span><?php echo $row['owner']; ?></p>
                                <p class="p-two"><span style='color:#990000; font-weight:700; margin-right: 20px;'>Recieved at: </span><?php echo $row['tdclaimed']; ?></p>
                            </div>
                            <div class="output-delete">
                                <input style="color:#990000; margin: 10px 50px; border:none; background-color: #cccccc; font-size: 1rem; text-decoration: underline; cursor: pointer;" type="button" onClick="deleteAcc(<?php echo $row['clitemno']; ?>)" name= "Delete" value="Delete">
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </section>
        </main>
        <?php
            if(isset($_SESSION['Delete'])){
            ?>

            <div class="submit-btn" id="btnClose" style="border:1px solid #bbb; border-radius: 8px; padding:5px; margin:10px 0px; background:#eee; text-align:left; width: 84%"> 
            <?php echo $_SESSION['Delete']; ?>
            <button style="border:none; margin-left: 68%; padding: 2px; cursor: pointer; font-size: 20px" type="button" onclick="closeForm()">&times</button>
            </div>

            <?php
                unset($_SESSION['Delete']);
            }
        ?>
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
            //<!------Deleting Record---->
            function deleteAcc(delid)
            {
                if(confirm("Do you want to delete this record?")){
                    window.location.href='delete_claimed.php?id=' +delid+'';
                    return true;
                }
            }
            function closeForm() {
                document.getElementById("btnClose").style.display = "none";
                }
        </script>
        </script>
        </main>
    </body>
</html>