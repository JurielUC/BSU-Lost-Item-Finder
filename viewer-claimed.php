<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Claimed Item</title>
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
                    <a href="viewer-found.php" class="nav-link"><img src="./images/found-img.png" width="18" height="18" style="margin-right: 3px;">Found Item</a>
                    <a href="viewer-claimed.php" class="nav-link active"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed Item</a>
                    <a href="viewer_profile.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Profile</a>
                    <a href="viewer_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="viewer_logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <nav class="navigation">
                <h3><img src="./images/menu-logo.png" height="18" width="18">Menu</h3>
                <div class="nav-links" id="myDIV">
                    <a href="viewer_home.php" class="nav-link"><img src="./images/home-icon.png" width="18" height="18" style="margin-right: 3px;">Home</a>
                    <a href="viewer-found.php" class="nav-link"><img src="./images/found-img.png" width="18" height="18" style="margin-right: 3px;">Found Item</a>
                    <a href="viewer-claimed.php" class="nav-link  active"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed Item</a>
                    <a href="viewer_profile.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Profile</a>
                    <a href="viewer_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="viewer_logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
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
                                <p class="p-one"><span style='color:#000000; font-weight:500; font-size:14px;'><i>*This item has already been claimed by </i></span>
                                <span style='color:#990000; font-weight:700; font-size:14px;'><?php echo $row['owner']; ?></span><span style='color:#000000; font-weight:500; font-size:12px;'><i>!</i></span></p>
                            </div>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </section>
        </main>
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