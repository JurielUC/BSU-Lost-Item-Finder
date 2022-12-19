<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Profile</title>
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
                    <a href="viewer-claimed.php" class="nav-link"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed Item</a>
                    <a href="viewer_profile.php" class="nav-link active"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Profile</a>
                    <a href="viewer_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="viewer_logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <nav class="navigation">
                <h3><img src="./images/menu-logo.png" height="18" width="18">Menu</h3>
                <div class="nav-links" id="myDIV">
                    <a href="viewer_home.php" class="nav-link"><img src="./images/home-icon.png" width="18" height="18" style="margin-right: 3px;">Home</a>
                    <a href="viewer-found.php" class="nav-link"><img src="./images/found-img.png" width="18" height="18" style="margin-right: 3px;">Found Item</a>
                    <a href="viewer-claimed.php" class="nav-link"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed Item</a>
                    <a href="viewer_profile.php" class="nav-link active"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Profile</a>
                    <a href="viewer_help.php" class="nav-link"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="viewer_logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <main>
            <section class="profile-form">
                <div class="profile-cont">
                    <div class="profile">
                    <?php
                        $sql=mysqli_query($conn, "SELECT * FROM tb_accounts where srcode='$loggedin_id'");
                        $row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
                        $fullname=$row['fullname'];
                        $contactno=$row['contactno'];
                        $program=$row['program'];
                        $password=$row['password'];
                        $department=$row['department'];
                        $campus=$row['campus'];
                    ?>
                        <table width="100%" style="border: none;">
                            <tr>
                                <th colspan="2" style="border: none;"><h1 style="text-align: center; margin: 20px; color: #ffffff;">My Profile</h1></th>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"><p style="text-align: right; margin-top: 5px; margin-bottom: 5px; margin-right: 20px; font-weight: 700; color: #ffffff;">Name:</p></td>
                                <td style="width: 70%; border: none;"><p style="text-align: left; margin-top: 5px; margin-bottom: 5px; margin-left: 20px; color: #ffffff;"><?php echo $fullname; ?></p></td>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"><p style="text-align: right; margin-top: 5px; margin-bottom: 5px; margin-right: 20px; font-weight: 700; color: #ffffff;">SR-Code:</p></td>
                                <td style="width: 70%; border: none;"><p style="text-align: left; margin-top: 5px; margin-bottom: 5px; margin-left: 20px; color: #ffffff;"><?php echo $loggedin_id; ?></p></td>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"><p style="text-align: right; margin-top: 5px; margin-bottom: 5px; margin-right: 20px; font-weight: 700; color: #ffffff;">Contact No.:</p></td>
                                <td style="width: 70%; border: none;"><p style="text-align: left; margin-top: 5px; margin-bottom: 5px; margin-left: 20px; color: #ffffff;"><?php echo $contactno; ?></p></td>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"><p style="text-align: right; margin-top: 5px; margin-bottom: 5px; margin-right: 20px; font-weight: 700; color: #ffffff;">Email:</p></td>
                                <td style="width: 70%; border: none;"><p style="text-align: left; margin-top: 5px; margin-bottom: 5px; margin-left: 20px; color: #ffffff;"><?php echo $loggedin_session; ?></p></td>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"><p style="text-align: right; margin-top: 5px; margin-bottom: 5px; margin-right: 20px; font-weight: 700; color: #ffffff;">Password:</p></td>
                                <td style="width: 70%; border: none;"><p style="text-align: left; margin-top: 5px; margin-bottom: 5px; margin-left: 20px; color: #ffffff;"><?php echo $password; ?></p></td>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"><p style="text-align: right; margin-top: 5px; margin-bottom: 5px; margin-right: 20px; font-weight: 700; color: #ffffff;">Program:</p></td>
                                <td style="width: 70%; border: none;"><p style="text-align: left; margin-top: 5px; margin-bottom: 5px; margin-left: 20px; color: #ffffff;"><?php echo $program; ?></p></td>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"><p style="text-align: right; margin-top: 5px; margin-bottom: 5px; margin-right: 20px; font-weight: 700; color: #ffffff;">Department:</p></td>
                                <td style="width: 70%; border: none;"><p style="text-align: left; margin-top: 5px; margin-bottom: 5px; margin-left: 20px; color: #ffffff;"><?php echo $department; ?></p></td>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"><p style="text-align: right; margin-top: 5px; margin-bottom: 5px; margin-right: 20px; font-weight: 700; color: #ffffff;">Campus:</p></td>
                                <td style="width: 70%; border: none;"><p style="text-align: left; margin-top: 5px; margin-bottom: 5px; margin-left: 20px; color: #ffffff;"><?php echo $campus; ?></p></td>
                            </tr>
                            <tr>
                                <td style="width: 30%; border: none;"></td>
                                <td style="width: 70%; border: none;"><button onclick="openUpdate()" title="Update My Profile" style="cursor: pointer; width: 80%; height: 25px; font-weight: 700; margin-top: 5px; margin-bottom: 5px; margin-left: 20px;">Update</button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </main>
        <!--Open update form code-->
        <div class="update-popup" id="myUpdateForm">
            <div class="update-form">
                <button class="update-popup-close" onclick="closeUpdate()" title="Close">&times</button>
                <form action="update_profile.php" method="POST">
                    <p class="p">Update Profile</p>
                    <div class="log">
                        <div class="div-for-update">
                            <label>Full Name</label>
                            <input type="text" name="fullname" placeholder="Full Name(ex. Juan Dela Cruz)" value="<?php echo $fullname; ?>" required/>
                        </div>
                        <div class="div-for-update">
                            <label>Sr Code</label>
                            <input type="text" name="srcode" placeholder="Sr Code(ex. 12-34567)" readonly value="<?php echo $loggedin_id; ?>" required/>
                        </div>
                        <div class="div-for-update">
                            <label>Contact No.</label>
                            <input type="text" name="contactno" placeholder="Contact No" value="<?php echo $contactno; ?>" required/>
                        </div>
                        <div class="div-for-update">
                            <label>Program</label>
                            <input type="text" name="program" placeholder="Program(ex. BSIT)" value="<?php echo $program; ?>" required/>
                        </div>
                        <div class="div-for-update">
                            <label>Department</label>
                            <select name="department">
                                <option value="<?php echo $department; ?>" selected><?php echo $department; ?></option>
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
                        </div>
                        <div class="div-for-update">
                            <label>Campus</label>
                            <select name="campus">
                                <option value="<?php echo $campus; ?>" selected><?php echo $campus; ?></option>
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
                        </div>
                        <div class="div-for-update">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Email(ex. juan.delacruz)"b value="<?php echo $loggedin_session; ?>" readonly required/>
                        </div> 
                        <div class="div-for-update">          
                            <label>Password</label>
                            <input type="password" id="psw" name="password" value="<?php echo $password; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required/>
                        </div>
                        <button class="update-form-submit" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
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

            // thses codes are for update form
            function openUpdate() {
                document.getElementById("myUpdateForm").style.display = "block";
                }
            function closeUpdate() {
                document.getElementById("myUpdateForm").style.display = "none";
                }
        </script>
    </body>
</html>