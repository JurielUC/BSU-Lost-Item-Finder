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
                    //showing data from tb_messages
                    $result=mysql_query("SELECT * FROM tb_messages INNER JOIN tb_accounts ON tb_messages.srcode = tb_accounts.srcode ORDER BY msgid DESC") or die("Error");
                    //if table has no data
                    if (mysql_num_rows($result) == 0) {
                        echo "<div class='nodata'>
                                <img src='./images/nodata.png' width='120px' height='120px'>
                                <p>No Message</p>
                              </div>";
                        exit;
                    }
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
                                <p style="margin-left: 50px; color: #990000; font-weight: 700; font-size: 16px;"><u><a style="color:#990000;" onClick="verifyMsg()" name="move" href='move_to_verified.php?id="<?php echo $row['msgid']; ?>"'>Verify></a></u></p>
                            </div>
                        </div>
                        <div class="msg-caption" style="display: flex; margin-top: 10px;">
                            <p style="width: 60%; margin-left: 30px; color: #000000; font-weight: 500; font-size: 16px; text-align: justify;"><?php echo $row['description']; ?></p>
                            <div style="width: 40%; margin-left: 10px;margin-right: 30px; ">
                                <img style="margin: auto; border: 2px solid #000000; border-radius: 10px;" onclick="openImage()" class="output-img" src="<?php echo $row['myfile']; ?>" height="200"/>
                            </div>
                        </div>
                        <div class="msg-time" style="display: flex; align-items: center; margin-top: 10px; opacity: .9;">
                            <div style="width: 50%; display: flex; align-items: center;">
                                <p style="margin-left: 30px; color: #000000; font-weight: 400; font-size: 12px;"><?php echo $row['department']; ?> <?php echo $row['campus']; ?></p>
                            </div>
                            <div style="width: 50%; display: flex; align-items: center;">
                                <p style="margin-left: 180px; color: #000000; font-weight: 400; font-size: 12px;"><?php echo $row['datetime']; ?></p>
                                <p style="margin-left: 50px; color: #990000; font-weight: 600; font-size: 12px;"><a style="color: #990000;" onClick="deleteMsg()" href='move_to_archive.php?id="<?php echo $row['msgid']; ?>"'>Delete</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="update-popup" id="myImageForm">
                        <div class="image-popup-form">
                            <button class="update-popup-close" onclick="closeImage()" title="Close">&times</button>
                        </div>
                    </div>

                    <?php
                    }
                    ?>