<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSU Lost-Item Finder | Help</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="./images/bsu-logo.png" type="image/x-icon">
    </head>
    <?php include 'code_session.php';?>
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
                    <a href="admin_messages.php" class="nav-link"><img src="./images/messages-icon.png" width="18" height="18" style="margin-right: 3px;">Messages</a>
                    <a href="admin_accounts.php" class="nav-link"><img src="./images/user-icon.png" width="18" height="18" style="margin-right: 3px;">Accounts</a>
                    <a href="admin_help.php" class="nav-link active"><img src="./images/help-icon.png" width="18" height="18" style="margin-right: 3px;">Help</a>
                    <a href="logout.php" class="nav-link"><img src="./images/logout-icon.png" width="18" height="18" style="margin-right: 3px;">Logout</a>
                </div>
        </nav>
        <div class="message-nav-parent">
            <div class="message-nav">
                <a style="cursor: pointer;" onclick="openTou()" class="msg-nav-child">Terms_of_Use</a>
            </div>
        </div>
        <main>
            <section class="forms-input">
                <div class="output-container">
                    <div class='output-cont-table' id='table'>
                        <table style="width:100%">

                            <caption style="background-color: grey; color: var(--color-red)"><h3> Message us on </h3></caption>
                            <tr>
                                <th style="background-color: #cccccc"> </th>    
                                <th style="text-align: left; background-color: #cccccc; color: #990000; text-align: center"><h4>Email</h4></th>
                            </tr>
                            <tr style="text-align: center">
                                <td> Alangilan </td>
                                <td> alangilan@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Arasof-Nasugbu </td>
                                <td> arasof-nasugbo@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Balayan </td>
                                <td> balayan@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Lemery </td>
                                <td> lemery@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Lipa </td>
                                <td> lipa@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Lobo </td>
                                <td> lobo@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Mabini </td>
                                <td> mabini@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Malvar </td>
                                <td> malvar@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Pablo Borbon </td>
                                <td> pabloborbon@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Rosario </td>
                                <td> rosario@g.batstate-u.edu.ph </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> San Juan </td>
                                <td> sanjuan@g.batstate-u.edu.ph </td>
                            </tr>
                        </table>
                    </div>

                    <div class='output-cont-table' id='table'>
                        <table style="width:100%">

                            <caption style="background-color: grey; color: var(--color-red)"><h3> Contact Services </h3></caption>
                            <tr>
                                <th style="background-color: #cccccc"> </th>
                                <th style="text-align: left; background-color: #cccccc; color: #990000; text-align: center"><h4>Mobile</h4></th>
                                <th style="text-align: left; background-color: #cccccc; color: #990000; text-align: center"><h4>Telephone</h4></th>
                            </tr>
                            <tr style="text-align: center">
                                <td> Alangilan </td>
                                <td> +63912-390-4836 </td>
                                <td> (043)-779-8400 </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Arasof-Nasugbu </td>
                                <td> +63909-382-7483 </td>
                                <td> (043)-416-0350 </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Balayan </td>
                                <td> 
                                    <p> +63993-827-4027 </p>
                                    <p> +63902-127-0937 </p>
                                </td>
                                <td>  </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Lemery </td>
                                <td> +63993-847-3647 </td>
                                <td>  </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Lipa </td>
                                <td> +63984-729-4037 </td>
                                <td>  </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Lobo </td>
                                <td> +63982-920-3927 </td>
                                <td>  </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Mabini </td>
                                <td> +63909-127-3829 </td>
                                <td>  </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Malvar </td>
                                <td> +63919-203-8362 </td>
                                <td>  </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Pablo Borbon </td>
                                <td> +63909-173-8293 </td>
                                <td> (043)-779-8405 </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> Rosario </td>
                                <td> +63998-372-8395 </td>
                                <td>  </td>
                            </tr>
                            <tr style="text-align: center">
                                <td> San Juan </td>
                                <td> +63909-382-7349 </td>
                                <td>  </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </main>
        <div class="update-popup" id="myUpdateForm">
            <div class="tou-form">
                <button class="update-popup-close" onclick="closeTou()" title="Close">&times</button>
                <h1 style="text-align: center; margin-top: 30px;">Terms of Use</h1>
                <ol type="a" style="margin-left: 35px;">
                    <li>You must be a student of Batangas State University.</li>
                    <li>You must be a human. Accounts registered by 'bots' or other automated methods are not permitted.</li>
                    <li>You must provide your name, University email address, and any other information requested in order to complete the signup process. Entering false information carries appropriate penalties.</li>
                    <li>You allow the sytem admin to view all your stored information.</li>
                    <li>If ever you've lost an item and found it posted in the system, you only have 60 days to claim it.</li>
                    <li>You agree that the university or administrator has the right to make a decision for the item if it's not claimed in 60 days.</li>
                    <li>You agree that the admin may use your information as necessary.</li>
                    <li>You have the right to complain to superiors when you feel mistreated by the system administrator.</li>
                </ol>
            </div>
        </div>
    </body>
    <script>
        // thses codes are for terms of use form
        function openTou() {
            document.getElementById("myUpdateForm").style.display = "block";
        }
        function closeTou() {
            document.getElementById("myUpdateForm").style.display = "none";
        }
    </script>
</html>