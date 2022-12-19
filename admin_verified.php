<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Verified</title>
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
                    <a href="admin_add.php" class="nav-link"><img src="./images/add-icon.png" width="18" height="18" style="margin-right: 3px;">Item Records</a>
                    <a href="admin_messages.php" class="nav-link active"><img src="./images/messages-icon.png" width="18" height="18" style="margin-right: 3px;">Messages</a>
                    <a href="admin_accounts.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Accounts</a>
                    <a href="admin_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <div class="message-nav-parent">
            <div class="message-nav">
                <a href="admin_messages.php" class="msg-nav-child"><img src="./images/messages-icon.png" width="18" height="18" style="margin-right: 3px;">Messages</a>
                <a href="admin_verified.php" class="msg-nav-child  --msg-active"><img src="./images/verified.png" width="18" height="18" style="margin-right: 3px;">Verified</a>
                <a href="admin_archives.php" class="msg-nav-child"><img src="./images/archives-icon.png" width="18" height="18" style="margin-right: 3px;">Archives</a>
            </div>
        </div>
        <main>
            <section class="forms-input">
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

                                    $result=mysql_query("SELECT * FROM tb_verifiedmsg INNER JOIN tb_accounts ON tb_verifiedmsg.archsrcode = tb_accounts.srcode ORDER BY archid DESC") or die("Error");
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
                                    <div class='output-cont-table'>
                                        <table style="width:100%">
                                            <tr>
                                                <th style="text-align: left; background-color: #cccccc"><h3>Owner's Information
                                                    <span style="color: #990000; font-weight:500;"> | <?php echo $row['campus']; ?> Campus</span></h3></th>
                                                <th style="text-align: right; background-color: #cccccc"><a style="color:#990000; margin: 10px;" href='delete_verified.php?id="<?php echo $row['archid']; ?>"'>Delete</a>
                                                    <a style="color:#03ac13; margin: 10px;" onClick="unverifiedMsg()" href='move_to_message.php?id="<?php echo $row['archid']; ?>"'>Verified</a></th>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p><span style="font-weight:700;">Name: </span><?php echo $row['fullname']; ?></p></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%"><p><span style="font-weight:700;">Item No: </span><?php echo $row['architemnumber']; ?></p></td>
                                                <td style="width:50%"><p><span style="font-weight:700;">Email: </span><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></p></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%"><p><span style="font-weight:700;">Program: </span><?php echo $row['program']; ?></p></td>
                                                <td style="width:50%"><p><span style="font-weight:700;">Section: </span><?php echo $row['srcode']; ?></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p><span style="font-weight:700;">Description: </span><?php echo $row['archdescription']; ?></p></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p><span style="font-weight:700;">Image: </span></p><img class="output-img" src="<?php echo $row['archmyfile']; ?>" height="200"/></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php
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

            function unverifiedMsg()
            {
                setInterval(function(){
                    alert("You have been unverified this information.");}, 5000)
            }
        </script>
    </body>
</html>