<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Messages</title>
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
                    <a href="admin_add.php" class="nav-link"><img src="./images/add-icon.png" width="18" height="18" style="margin-right: 3px;">Item Records</a>
                    <a href="admin_messages.php" class="nav-link active"><img src="./images/messages-icon.png" width="18" height="18" style="margin-right: 3px;">Messages</a>
                    <a href="admin_accounts.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Accounts</a>
                    <a href="admin_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <div class="message-nav-parent">
            <div class="message-nav">
                <a href="admin_messages.php" class="msg-nav-child --msg-active"><img src="./images/messages-icon.png" width="18" height="18" style="margin-right: 3px;">Messages</a>
                <a href="admin_verified.php" class="msg-nav-child"><img src="./images/verified.png" width="18" height="18" style="margin-right: 3px;">Verified</a>
                <a href="admin_archives.php" class="msg-nav-child"><img src="./images/archives-icon.png" width="18" height="18" style="margin-right: 3px;">Archives</a>
            </div>
        </div>
        <div class="search-bar">
        <button class="letter-button" onclick="openLetter()" title="Open Letter">Email Letter</button>
            <a class="search-back" title="Back" href='admin_messages.php'><img src="./images/backsearch-icon.png" width="20" height="20"></a>
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
                    mysql_connect("localhost", "root", "", "db_batstateu");
                    //echo" Connected to localhost ";
                    //database
                    mysql_select_db("db_batstateu");
                    //echo" Connected to database ";

                    if(isset($_POST['search']))
                        {
                            $Campus=$_POST['campus'];

                            $result=mysql_query("SELECT * FROM tb_messages INNER JOIN tb_accounts ON tb_messages.srcode = tb_accounts.srcode WHERE campus = '$Campus' ORDER BY msgid DESC") or die("Error");

                            if(mysql_num_rows($result)>0){

                                while($row=mysql_fetch_assoc($result))
                                {
                                ?>
                                    <div id='messages-container'>
                                        <div class="msg-name" style="display: flex; align-items: center;">
                                            <div style="width: 50%; display: flex; align-items: center;">
                                                <p style="margin-left: 20px; color: #990000; font-weight: 700; font-size: 20px;"><?php echo $row['fullname']; ?></p>
                                                <p style="margin-left: 10px; color: #000000; font-weight: 600; font-size: 12px;">#<u><?php echo $row['srcode']; ?></u></p>
                                            </div>
                                            <div style="width: 50%; display: flex; align-items: center;">
                                                <p style="margin-left: 20px; color: #000000; font-weight: 700; font-size: 14px;">Item No: <u style="font-size: 16px; color: #990000"><?php echo $row['itemnumber']; ?></u></p>
                                                <a style="text-decoration: none; margin-left: 50px; color: #990000; font-weight: 700;" href="mailto:<?php echo $row['email']; ?>"><u>Reply via Email</u></a>
                                                <p style="margin-left: 50px; color: #990000; font-weight: 700; font-size: 16px;"><u><a style="color:#990000;" name="move" href='move_to_verified.php?id="<?php echo $row['msgid']; ?>"'>Verify></a></u></p>
                                            </div>
                                        </div>
                                        <div class="msg-caption" style="display: flex; margin-top: 10px;">
                                            <p style="width: 60%; margin-left: 30px; color: #000000; font-weight: 500; font-size: 16px; text-align: justify;"><?php echo $row['description']; ?></p>
                                            <div style="width: 40%; margin-left: 10px;margin-right: 30px; ">
                                                <img style="margin: auto; border: 2px solid #000000; border-radius: 10px;" class="output-img" src="<?php echo $row['myfile']; ?>" height="200"/>
                                            </div>
                                        </div>
                                        <div class="msg-time" style="display: flex; align-items: center; margin-top: 10px; opacity: .9;">
                                            <div style="width: 50%; display: flex; align-items: center;">
                                                <p style="margin-left: 30px; color: #000000; font-weight: 400; font-size: 12px;"><?php echo $row['department']; ?> <?php echo $row['campus']; ?></p>
                                            </div>
                                            <div style="width: 50%; display: flex; align-items: center;">
                                                <p style="margin-left: 180px; color: #000000; font-weight: 400; font-size: 12px;"><?php echo $row['datetime']; ?></p>
                                                <p style="margin-left: 50px; color: #990000; font-weight: 600; font-size: 12px;"><a style="color: #990000;" href='move_to_archive.php?id="<?php echo $row['msgid']; ?>"'>Delete</a></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                }else{

                                    echo "<div class='nodata'>
                                    <img src='./images/nodata.png' width='120px' height='120px'>
                                    <p>No Campus Record Found</p>
                                  </div>";}
                                }
                                ?>
                </div>
            </section>
        </main>
        <!--Back to top button-->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="./images/backtop-icon.png" alt="" width="60" height="50"></button>
        <!--Open letter form code-->
        <div class="letter-popup" id="myLetterForm">
            <div class="letter-container">
                <div class="letter-cont-child">
                    <h1>Email Letters</h1>
                    <label>For Match</label>
                    <div class="match">
                        <input type="text" value="Dear Mr/Mrs. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, maxime architecto cupiditate harum provident asperiores quam, nesciunt molestias enim minus repellat? Nisi repellendus libero blanditiis excepturi quibusdam ratione dicta delectus?" id="matched">
                        <button onclick="myLetterOne()">Copy</button>
                    </div>
                </div>
                <div class="letter-cont-child">
                    <label>For Not Match</label>
                    <div class="not-match">
                        <input type="text" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, maxime architecto cupiditate harum provident asperiores quam, nesciunt molestias enim minus repellat? Nisi repellendus libero blanditiis excepturi quibusdam ratione dicta delectus?" id="notmatched">
                        <button onclick="myLetterTwo()">Copy</button>
                    </div>
                </div>
                <button class="letter-close" onclick="closeLetter()" title="Close">Close</button>
            </div>
        </div>
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
            function openLetter() {
            document.getElementById("myLetterForm").style.display = "block";
            }
            function closeLetter() {
            document.getElementById("myLetterForm").style.display = "none";
            }

            //copy to clipboard javascript code
            function myLetterOne() {
            /* Get the text field */
            var copyText = document.getElementById("matched");
            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);
            /* Alert the copied text */
            alert("Copied the text: to clipboard");
            }
            //copy to clipboard javascript code
            function myLetterTwo() {
            /* Get the text field */
            var copyText = document.getElementById("notmatched");
            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);
            /* Alert the copied text */
            alert("Copied the text: to clipboard");
            }
        </script>
    </body>
</html>