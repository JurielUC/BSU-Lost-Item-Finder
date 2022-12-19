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
                    <a href="admin_update.php" class="msg-nav-child --msg-active"><img src="./images/update-icon.png" width="18" height="18" style="margin-right: 3px;">Update</a>
                    <a href="admin_claimed.php" class="msg-nav-child"><img src="./images/claimed-icon.png" width="18" height="18" style="margin-right: 3px;">Claimed</a>
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
                        //echo" Connected to database ";

                        mysql_connect("localhost", "root", "");
                        //echo" Connected to localhost ";
                        //database
                        mysql_select_db("db_batstateu");
                        //Update data from tb_iteminfo

                        $id=$_GET['edit'];
                        $finder=$_GET['finder'];
                        $time=$_GET['time'];
                        $date=$_GET['date'];
                        $itemCategory=$_GET['category'];
                        $itemLoc=$_GET['location'];
                        $department=$_GET['department'];
                        $campus=$_GET['campus'];
                        $sql="SELECT * FROM 'tb_iteminfo' WHERE itemno=$id, findername=$finder, time=$time, date=$date, itemcategory=$itemCategory, itemlocation=$itemLoc, department=$department, campus=$campus";
                        $result=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_assoc($result);
                        
                        if(isset($_POST['Submit'])){
                            $Finder=$_POST['findername'];
                            $Time=$_POST['time'];
                            $Date=$_POST['date'];
                            $ItemNo=$_POST['itemno'];
                            $ItemCategory=$_POST['itemcategory'];
                            $ItemLoc=$_POST['itemlocation'];
                            $Department=$_POST['department'];
                            $Campus=$_POST['campus'];

                            mysql_query("UPDATE tb_iteminfo SET findername='$Finder', time='$Time', date='$Date', itemcategory='$ItemCategory', itemlocation='$ItemLoc', department='$Department', campus='$Campus' WHERE itemno='$ItemNo'") or die("Data Not Updated");

                            $result=mysql_query("SELECT * FROM tb_iteminfo Order By itemno DESC") or die("Error");

                            if($result){
                                $_SESSION['Submit'] = "Record Updated Successfully !";
                                header('Location: admin_update.php');
                                exit;
                            }else{
                                $_SESSION['Submit'] = "Something wrong...";
                                header('Location: admin_update.php');
                                exit;
                            }
                        }
                        ?>
                </div>
                    <!--form inputs-->
                    <form class='form' action="Update_form.php" method="POST" enctype="multipart/form-data">
                        <div class="first-three">
                            <input class="input big" type="text" value='<?php echo $finder; ?>' placeholder="Finder..." name="findername" required>
                            <input class="input small" type="text" value='<?php echo $time ; ?>' placeholder="Time..." name="time">
                            <input class="input small" type="text" value='<?php echo $date ; ?>' placeholder="Date..." name="date" >
                        </div>
                        <div class="second-three">
                            <input class="input small" style="background-color: #cccccc" type="text" value='<?php echo $id; ?>' placeholder="Item no..." name="itemno" readonly required>
                            <input class="input medium" type="text" value="<?php echo $itemCategory; ?>" placeholder="Item Category..." name="itemcategory" required>
                            <input class="input medium" type="text" value="<?php echo $itemLoc; ?>" placeholder="Item Location..." name="itemlocation" required>
                        </div>
                        <div class="third-three">
                            <select name="department" class="input big">
                                <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
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
                                <option value="<?php echo $campus; ?>"><?php echo $campus; ?></option>
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
                            <input class="input button-submit" type="submit" name="Submit" value="Update">
                        </div>
                    </form>
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

            function closeForm() {
                document.getElementById("btnClose").style.display = "none";
                }
        </script>
        </main>
    </body>
</html>