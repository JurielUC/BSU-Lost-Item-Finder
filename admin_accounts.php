<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Accounts</title>
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
        <!--Navigation-->
        <nav class="navigation" id="navigation">
                <div class="nav-links" id="myDIV">
                    <a href="admin_home.php" class="nav-link"><img src="./images/home-icon.png" width="18" height="18" style="margin-right: 3px;">Home</a>
                    <a href="admin_add.php" class="nav-link"><img src="./images/add-icon.png" width="18" height="18" style="margin-right: 3px;">Item Records</a>
                    <a href="admin_messages.php" class="nav-link"><img src="./images/messages-icon.png" width="18" height="18" style="margin-right: 3px;">Messages</a>
                    <a href="admin_accounts.php" class="nav-link active"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Accounts</a>
                    <a href="admin_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <div class="message-nav-parent">
            <div class="message-nav">
                <a href="admin_accounts.php" class="msg-nav-child --msg-active"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">User</a>
                <a href="admin_admin-accounts.php" class="msg-nav-child"><img src="./images/admin-ico.png" width="18" height="18" style="margin-right: 3px;">Admin</a>
            </div>
        </div>
        <div class="search-bar">
        <form class="search-box" action="search_account.php" method=POST>
                <input class="search" type="text" name="fullname" size='20' placeholder="Search name...." required>
                <button class="search-btn" title="Search" type="submit" name= "search"><img src="./images/search-icon.png" width="15" height="15"></button>
            </form>
        </div>
        <main>
            <section class="forms-input">
                <!--form inputs-->
                <form class='form' action="code_account.php" method="POST" enctype="multipart/form-data">
                        <div class="first-three">
                            <input class="input big" type="text" placeholder="Fullname..." name="fullname" required>
                            <input class="input small" type="text" placeholder="Sr-code" name="srcode">
                            <input class="input small" type="text" placeholder="Contactno..." name="contactno" >
                        </div>
                        <div class="second-three">
                            <input class="input big" type="text" placeholder="Email..." name="email" required>
                            <input class="input small" type="text" placeholder="Password..." name="password" required>
                            <input class="input small" type="text" placeholder="Program..." name="program" required>
                        </div>
                        <div class="third-three">
                            <select name="department" class="input big">
                                <option value="" selected>Select department...</option>
                                <option value="CICS">CICS</option>
                                <option value="CEAFA">CEAFA</option>
                                <option value="CIT">CIT</option>
                                <option value="CABEIHM">CABEIHM</option>
                                <option value="CAS">CAS</option>
                                <option value="College of Law">College of Law</option>
                                <option value="CNAHS">CNAHS</option>
                                <option value="CTE">CTE</option>
                                <option value="CECS">CECS</option>
                                <option value="CABE">CABE</option>
                                <option value="CoE">CoE</option>
                                <option value="CAF">CAF</option>
                            </select>
                            <select name="campus" class="input big">
                                <option value="" selected>Select campus...</option>
                                <option value="Alangilan">Alangilan</option>
                                <option value="Arasof-Nasugbu">Arasof-Nasugbu</option>
                                <option value="Balayan">Balayan</option>
                                <option value="Lemery">Lemery</option>
                                <option value="Lipa">Lipa</option>
                                <option value="Lobo">Lobo</option>
                                <option value="Mabini">Mabini</option>
                                <option value="Malvar">Malvar</option>
                                <option value="Pablo Borbon">Pablo Borbon</option>
                                <option value="Rosario">Rosario</option>
                                <option value="San Juan">San Juan</option>
                            </select>
                            <input class="input button-submit" type="submit" name="Submit" value="Submit">
                        </div>
                </form>
                <div class="submit-bar">
                    <?php
                    if(isset($_SESSION['Submit'])){
                        ?>
                        <div class="submit-btn" id="btnClose" style="border:1px solid #bbb; border-radius: 8px; padding:5px; margin:10px 0px; background:#eee; text-align:left; width: 84%"> 
                            <?php echo $_SESSION['Submit']; ?>
                            <button style="border:none; margin-left: 68%; padding: 2px; cursor: pointer; font-size: 20px" type="button" onclick="closeForm()">&times</button>
                        </div>

                        <?php
                        unset($_SESSION['Submit']);
                    }
                    ?>
                </div>
            </section>
            
            <!--database connection and display section-->
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
                    //showing data from tb_accounts to the system
                    $result=mysql_query("SELECT * FROM tb_accounts") or die("Error");
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
                        <!--division for data display-->
                        <div class='output-cont-table'>
                                        <table style="width:100%">
                                            <tr>
                                                <th style="text-align: left; background-color: #cccccc; color: #990000"><h3>User Info</h3></th>
                                                <th style="text-align: right; background-color: #cccccc; color: #990000"><a style="color:#990000; margin: 10px;" href='Update_account.php?srcode=<?php echo $row['srcode']; ?> & fullname=<?php echo $row['fullname']; ?> & contactno=<?php echo $row['contactno']; ?> & email=<?php echo $row['email']; ?> & password=<?php echo $row['password']; ?> & program=<?php echo $row['program']; ?> & department=<?php echo $row['department']; ?> & campus=<?php echo $row['campus']; ?>'>Edit</a>
                                                <a style="color:#990000; margin: 10px;" href='delete_user_acc.php?id="<?php echo $row['srcode']; ?>"'>Delete</a></th>
                                            </tr>
                                            <tr>
                                                <td style="width:50%"><p><span style="font-weight:700;">Name: </span><?php echo $row['fullname']; ?></p></td>
                                                <td style="width:50%"><p><span style="font-weight:700;">SR-Code: </span><?php echo $row['srcode']; ?></p></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%"><p><span style="font-weight:700;">Contact No: </span><?php echo $row['contactno']; ?></p></td>
                                                <td style="width:50%"><p><span style="font-weight:700;">Email: </span><?php echo $row['email']; ?></p></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%"><p><span style="font-weight:700;">Password: </span><?php echo $row['password']; ?></p></td>
                                                <td style="width:50%"><p><span style="font-weight:700;">Program: </span><?php echo $row['program']; ?></p></td>
                                            </tr>
                                            <tr>
                                                <td style="width:50%;"><p><span style="font-weight:700;">Department: </span><?php echo $row['department']; ?></p></td>
                                                <td style="width:50%;"><p><span style="font-weight:700;">Campus: </span><?php echo $row['campus']; ?></p></td>
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

            function closeForm() {
                document.getElementById("btnClose").style.display = "none";
                }
        </script>
    </body>
</html>