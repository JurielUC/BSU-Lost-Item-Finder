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
                    $fullname=$_POST['fullname'];
                    $srcode=$_POST['srcode'];
                    $contactno=$_POST['contactno'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $program=$_POST['program'];
                    $department=$_POST['department'];
                    $campus=$_POST['campus'];

                    $t_fullname = trim($fullname);
                    $t_srcode = trim($srcode);
                    $t_contactno = trim($contactno);
                    $t_email = trim($email);
                    $t_password = trim($password);
                    $t_program = trim($program);
                    $t_department = trim($department);
                    $t_campus = trim($campus);

                    mysql_query("UPDATE tb_accounts SET fullname='$t_fullname', contactno='$t_contactno', email='$t_email', password='$t_password', program='$t_program', department='$t_department', campus='$t_campus' WHERE srcode='$t_srcode'") or die("Data Not Updated");

                    header("Location: viewer_profile.php");
                    exit;
            ?>