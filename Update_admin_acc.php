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
                <a href="admin_accounts.php" class="msg-nav-child"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">User</a>
                <a href="admin_admin-accounts.php" class="msg-nav-child --msg-active"><img src="./images/admin-ico.png" width="18" height="18" style="margin-right: 3px;">Admin</a>
            </div>
        </div>
        <main>
            <section class="forms-input">
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
                $id=$_GET['admin_id'];
                $fullname=$_GET['admin_name'];
                $email=$_GET['admin_email'];
                $password=$_GET['admin_password'];
                $department=$_GET['admin_department'];
                $campus=$_GET['admin_campus'];
                $sql="SELECT * FROM 'tb_admin' WHERE admin_name=$fullname, admin_email=$email, admin_password=$password, admin_department=$department, admin_campus=$campus, admin_id=$id";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);

                if(isset($_POST['Submit'])){
                    $id=$_POST['admin_id'];
                    $fullname=$_POST['admin_name'];
                    $email=$_POST['admin_email'];
                    $password=$_POST['admin_password'];
                    $program=$_POST['admin_program'];
                    $department=$_POST['admin_department'];
                    $campus=$_POST['admin_campus'];
                    
                    $t_id = trim($id);
                    $t_fullname = trim($fullname);
                    $t_email = trim($email);
                    $t_password = trim($password);
                    $t_program = trim($program);
                    $t_department = trim($department);
                    $t_campus = trim($campus);

                    mysql_query("UPDATE tb_admin SET admin_name='$t_fullname', admin_email='$t_email', admin_password='$t_password', admin_department='$t_department', admin_campus='$t_campus' WHERE admin_id='$t_id'") or die("Data Not Updated");

                    $result=mysql_query("SELECT * FROM tb_admin") or die("Error");

                    if($result){
                        $_SESSION['Submit'] = "Account Updated Successfully!";
                        header('Location: admin_admin-accounts.php');
                        exit;
                    }else{
                        $_SESSION['Submit'] = "Something wrong...";
                        header('Location: admin_admin-accounts.php');
                        exit;
                    }
                }
            ?>
                <!--form inputs-->
                <form class='form' action="Update_admin_acc.php" method="POST" enctype="multipart/form-data">
                        <div class="first-three">
                            <input class="input big" type="text" placeholder="Fullname..." name="admin_name" value='<?php echo $fullname;?>' required>
                            <input class="input big" type="text" placeholder="Email..." name="admin_email" value='<?php echo $email;?>' required>
                            <input class="input small" type="text" placeholder="Password..." name="admin_password" value='<?php echo $password;?>' required>
                        </div>
                        <div class="third-three">
                            <select name="admin_department" class="input big">
                                <option value='<?php echo $department;?>'><?php echo $department;?></option>
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
                            <select name="admin_campus" class="input big">
                                <option value='<?php echo $campus;?>'><?php echo $campus;?></option>
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
                            <input class="input small" type="text" style="background-color: #cccccc" readonly placeholder="ID..." name="admin_id" value='<?php echo $id;?>' required>
                        </div>
                        <input style="margin-left: 735px;" class="input button-submit" type="submit" name="Submit" value="Update">
                </form>
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
        </script>
    </body>
</html>