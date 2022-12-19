<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Found Item</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="icon" href="./images/bsu-logo.png" type="image/x-icon">
    </head>
    <?php include 'code_user_session.php'; ?>
    <body>
        <header>
            <div class="header" id="header">
                <div class="logo-name">
                    <img src="./images/bsu-logo.png" width="40" height="40">
                    <h1>BSU Online Campus Lost-Item Finder System</h1>
                    <p>(User)</p>
                    <div class="hamburger" onclick="myNav()">
                        <div class="burger"></div>
                        <div class="burger"></div>
                        <div class="burger"></div>
                    </div>
                </div>
            </div>
            <div class="divider">
                <p>Batangas State University</p>
            </div>
        </header>
        <nav class="navigation" id="navigation">
                <div class="hamburger-close" onclick="closeNav()">
                    <div class="burger --one"></div>
                    <div class="burger --two"></div>
                    <div class="burger --three"></div>
                </div>
                <h3><img src="./images/menu-logo.png" height="18" width="18">Menu</h3>
                <div class="nav-links">
                    <a href="viewer_home.php" class="nav-link"><img src="./images/home-icon.png" width="18" height="18" style="margin-right: 3px;">Home</a>
                    <a href="viewer-found.php" class="nav-link active"><img src="./images/found-img.png" width="18" height="18" style="margin-right: 3px;">Found Item</a>
                    <a href="viewer-claimed.php" class="nav-link"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed Item</a>
                    <a href="viewer_profile.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Profile</a>
                    <a href="viewer_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="viewer_logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <nav class="navigation">
                <h3><img src="./images/menu-logo.png" height="18" width="18">Menu</h3>
                <div class="nav-links">
                    <a href="viewer_home.php" class="nav-link"><img src="./images/home-icon.png" width="18" height="18" style="margin-right: 3px;">Home</a>
                    <a href="viewer-found.php" class="nav-link active"><img src="./images/found-img.png" width="18" height="18" style="margin-right: 3px;">Found Item</a>
                    <a href="viewer-claimed.php" class="nav-link"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed Item</a>
                    <a href="viewer_profile.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Profile</a>
                    <a href="viewer_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="viewer_logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <div class="search-bar">
            <a class="search-back" href='viewer-found.php'><img src="./images/backsearch-icon.png" width="20" height="20"></a>
        </div>
        <main>
            <section class="form-output" id="form-output">
                <div class="output-container">
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

                            $result=mysql_query("SELECT * FROM tb_iteminfo WHERE itemcategory='$ItemCategory' ORDER BY itemno DESC") or die("Error");

                            if(mysql_num_rows($result)>0){

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
        <!--back to top botton-->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="./images/backtop-icon.png" alt="" width="60" height="50"></button>
        <!--These codes are for message form-->
        <button class="open-button" onclick="openForm()" title="Send Proof"><img src="./images/infocontact-icon.png" alt="" width="60" height="50"></button>
        <div class="form-popup" id="myForm">
            <form action="code_message.php" class="form-container" method="POST" enctype="multipart/form-data">
                <div class="message-header">
                    <h3>Owner's Information(Proof of ownership)</h3>
                    <button type="button" class="btn-cancel" onclick="closeForm()">X</button>
                </div>
                <div class="msg-input">
                    <div>
                        <label for="name">Sr Code</label>
                        <input type="text" value="<?php $t_id = trim($loggedin_id); echo $t_id; ?>" name="srcode" required>
                    </div>
                    <div>
                        <label for="email">Item No.</label>
                        <input type="text" placeholder="Enter Item No." name="itemnumber" required>
                    </div>
                </div>
                <div class="msg-img">
                    <label for="myfile">Select Image</label>
                    <input type="file" id="myfile" name="myfile" accept="image/*" style="color: #ffffff;">
                </div>
                <div class="msg-submit">
                    <textarea name="description" style="font: .8rem 'Poppins', Helvetica, sans-serif;" id="description" cols="53" rows="3" placeholder="Write description..." maxlength="250"></textarea>
                    <button type="submit" class="btn" title="Send"><img src="./images/send-icon.png" alt="" width="30" height="30"></button>
                </div>
            </form>
        </div>
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
            // thses codes are for message form
            function openForm() {
                document.getElementById("myForm").style.display = "block";
                }
            function closeForm() {
                document.getElementById("myForm").style.display = "none";
                }
            //small devices navigation
            function myNav() {
                document.getElementById("navigation").style.display = "block";
                }
            function closeNav() {
                document.getElementById("navigation").style.display = "none";
                }
        </script>
    </body>
</html>