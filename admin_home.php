<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Home</title>
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
                    <a href="admin_home.php" class="nav-link  active"><img src="./images/home-icon.png" width="18" height="18" style="margin-right: 3px;">Home</a>
                    <a href="admin_add.php" class="nav-link"><img src="./images/add-icon.png" width="18" height="18" style="margin-right: 3px;">Item Records</a>
                    <a href="admin_messages.php" class="nav-link"><img src="./images/messages-icon.png" width="18" height="18" style="margin-right: 3px;">Messages</a>
                    <a href="admin_accounts.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Accounts</a>
                    <a href="admin_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <main>
            <section class="forms-home">
                <div class="bsu-images">
                    <h3 style="color: #990000; margin-top: 10px; text-align: center;">BATSTATE-U CAMPUSES</h3>
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <img src="./images/campuses/main-one.jpg" style="width:100%;">
                            <div class="text">Pablo Borbon Main 1</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/main-two.jpg" style="width:100%;">
                            <div class="text">Alangilan</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/nasugbu.jpg" style="width:100%;">
                            <div class="text">Arasof Nagusbu</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/balayan.jpg" style="width:100%;">
                            <div class="text">Balayan</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/lemery.jpg" style="width:100%;">
                            <div class="text">Lemery</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/lipa.jpg" style="width:100%;">
                            <div class="text">Lipa</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/lobo.jpg" style="width:100%;">
                            <div class="text">Lobo</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/mabini.jpg" style="width:100%;">
                            <div class="text">Mabini</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/malvar.jpg" style="width:100%;">
                            <div class="text">JPLPC-Malvar</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/rosario.jpg" style="width:100%;">
                            <div class="text">Rosario</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./images/campuses/sanjuan.jpg" style="width:100%;">
                            <div class="text">San Juan</div>
                        </div>
                        <br>
                        <div style="text-align:center">
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span> 
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>

                    </div>
                </div>
                <div class="announcement">
                    <h3 style="text-align: center; font-weight: 600;">Announcement</h3>
                    <div class="announce-feed">
                        <div class="announce-form">
                            <form action="code_announce.php" method="POST" enctype="multipart/form-data">
                                <div class="a-form-one">
                                    <select name="department">
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
                                    <select name="campus">
                                        <option value="" selected>Select campus...</option>
                                        <option value="Alangilan Campus">Alangilan Campus</option>
                                        <option value="Arasof-Nasugbu Campus">Arasof-Nasugbu Campus</option>
                                        <option value="Balayan Campus">Balayan Campus</option>
                                        <option value="Lemery Campus">Lemery Campus</option>
                                        <option value="Lipa Campus">Lipa Campus</option>
                                        <option value=" Campus">Lobo Campus</option>
                                        <option value="Mabini Campus">Mabini Campus</option>
                                        <option value="Malvar Campus">Malvar Campus</option>
                                        <option value="PB Main 1 Campus">PB Main 1 Campus</option>
                                        <option value="Rosario Campus">Rosario Campus</option>
                                        <option value="San Juan Campus">San Juan Campus</option>
                                    </select>
                                </div>
                                <div class="a-form-two">
                                    <textarea name="caption" style="font: .8rem 'Poppins', Helvetica, sans-serif;" id="description" cols="53" rows="3" placeholder="Write Something..."></textarea>
                                </div>
                                <div class="a-form-three">
                                    <input class="post-button button-submit" type="submit" name="Submit" value="Post">
                                </div>
                            </form>
                        </div>
                        <!--Php code for announcement-->
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
                            //showing data from tb_iteminfo to the system
                            $result=mysql_query("SELECT * FROM tb_announcement Order By timedate DESC") or die("Error");
                            //if table has no data
                            if (mysql_num_rows($result) == 0) {
                                echo "<div class='nodata'>
                                        <img src='./images/nodata.png' width='120px' height='120px'>
                                        <p>No Post</p>
                                    </div>";
                            }
                            while($row=mysql_fetch_assoc($result))         
                            {
                        ?>
                        <div class='post-result'>
                            <div class="post-result-child">
                                <p class="post-one"><span style='color:#990000; font-size: 20px; font-weight:700; margin-right: 20px;'><?php echo $row['department']; ?> <?php echo $row['campus']; ?></span></p>
                                <p class="post-two"><span style='color:#000000; font-size: 16px; font-weight:500; margin-right: 20px;'><?php echo $row['caption']; ?></span></p>
                            </div>
                            <div class="post-result-child-two">
                                <p class="post-three"><span style='color:#000000; font-size: 12px; font-weight:500; margin-right: 20px;'><?php echo $row['timedate']; ?></span></p>
                                <a style="color:#990000; margin-top:4px; font-size:12px" href='delete_announcement.php?id="<?php echo $row['id']; ?>"'>Delete</a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="bsu-vmc">
                    <div class="vmc">
                        <h3>University Mission</h3>
                        <p>A university committed to producing leaders by providing a 21st century learning environment through innovations in education, multidisciplinary research, and community and industry partnerships in order to nurture the spirit of nationhood, propel the national economy, and engage the world for sustainable development.</p>
                    </div>
                    <div class="vmc">
                        <h3>University Vision</h3>
                        <p>A premier national university that develops leaders in the global knowledge economy.</p>
                    </div>
                    <div class="vmc">
                        <h3>Core Values</h3>
                        <p>• Patriotism • Service • Integrity • Resilience • Excellence • Faith</p>
                    </div>
                </div>
                <div class="socmed-links">
                    <h3 style="text-align: center; font-weight: 600;">Social Media and Website Links</h3>
                    <div id="batstate-links">
                        <div id="website">
                            <h4>BSU Websites</h4>
                            <ul>
                                <li><a href="https://batstate-u.edu.ph/" target="_blank">Batangas State University</a></li>
                                <li><a href="https://dione.batstate-u.edu.ph/student/#/" target="_blank">Student Portal</a></li>
                            </ul>
                        </div>
                        <div id="social-media">
                            <h4>SSC Facebook Page</h4>
                            <ul>
                                <li><a href="https://www.facebook.com/sscmain1" target="_blank">SSC Pablo Borbon Campus I (MAIN)</a></li>
                                <li><a href="https://www.facebook.com/sscalangilan" target="_blank">SSC Pablo Borbon Campus II (ALANGILAN)</a></li>
                                <li><a href="https://www.facebook.com/sscnasugbu/" target="_blank">SSC ARASOF-Nasugbu</a></li>
                                <li><a href="https://www.facebook.com/balayancampus/" target="_blank">SSC Balayan</a></li>
                                <li><a href="https://www.facebook.com/sscbatstateulem/" target="_blank">SSC Lemery</a></li>
                                <li><a href="https://www.facebook.com/SSC-BatStateu-Ros-348462122168526/" target="_blank">SSC Rosario</a></li>
                                <li><a href="https://www.facebook.com/SSCLipaCampus/" target="_blank">SSC Lipa</a></li>
                                <li><a href="https://www.facebook.com/sscsanjuancampus" target="_blank">SSC San Juan</a></li>
                                <li><a href="https://www.facebook.com/ssclobo" target="_blank">SSC Lobo</a></li>
                                <li><a href="https://www.facebook.com/sscmalvar/" target="_blank">SSC JPLPC-Malvar</a></li>
                            </ul>
                        </div>
                        <div id="social-media">
                            <h4>Student Organization Facebook Page</h4>
                            <ul>
                                <li><a href="https://www.facebook.com/focusbatcc" target="_blank">FOCUS BatStateU Camera Club</a></li>
                                <li><a href="https://www.facebook.com/kamaradevcombatsu" target="_blank">KAMARA – Kamera, Kamay at Kultura</a></li>
                                <li><a href="https://www.facebook.com/batstateuSONs" target="_blank">SONS- Seeds of the Nation</a></li>
                                <li><a href="https://www.facebook.com/CEAFASC" target="_blank">CEAFA Student Council</a></li>
                                <li><a href="https://www.facebook.com/JIECEPBatSU" target="_blank">JIECEP – Junior Institute of Electronics Engineers of the Philippines</a></li>
                                <li><a href="https://www.facebook.com/JIIEEBatStateUChapter" target="_blank">JIIEE – Junior Institute of Integrated Electrical Engineers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script>
            //small devices navigation
            function myNav() {
                document.getElementById("navigation").style.display = "block";
                }
            function closeNav() {
                document.getElementById("navigation").style.display = "none";
                }
            //for slideshow part
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        </script>
    </body>
</html>