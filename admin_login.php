<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BSU Online Campus Lost-Item Finder System</title>
    <link rel="icon" href="./images/bsu-logo.png" type="image/x-icon">
</head>
<style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', arial, sans-serif;
    align-items: center;
    display: flex;
    flex-direction: column;
}
.bsu{
    position: absolute;
    text-align: center;
}
.p{
    position: absolute;
    margin-bottom: 300px;
    font-size: 28px;
    font-family: Berlin sans fb;
    color: #990000;
}
.lif{
    position: absolute;
    top: 60px;
    left: 30px;
    font-family: Berlin sans fb;
    font-size: 30px;
    font-weight: normal;
}
form{
    width: 850px;
    height: 70vh;
    border: 1px solid #cccccc;
    margin-top: 260px;
    display: flex;
    align-items: center;
    justify-content: center;
}
input{
    border: 2px solid #ccc;
    width: 120%;
    padding: 7px;
    border-radius: 5px;
}
input:focus{
    background-color: #ddd;
}
label{
    color: #000000;
    font-size: .90rem;
}
.username{
    margin-bottom: 10px;
}
.log{
    margin-right: 40px;
}
button{
    background: #990000;
    padding: 10px 15px;
    color: #ffffff;
    font-family: berlin sans fb;
    border-radius: 5px;
    margin-left: 155px;
    border: none;
    cursor: pointer;
    position: absolute;
}
button:hover{
    opacity: .80;
}
.login{
    margin-top: 18px;
}
.error {
    color: #A94442;
    padding: 8px;
    width:  218px;
    border-radius: 5px;
    margin-bottom: 4px;
}
.username, .password{
    display: flex;
    flex-direction: column;
}
a{
    font-size: .9rem;
    position: absolute;
    bottom: -30px;
    color: #ff0000;
}
</style>
<body>
    <div class="bsu">
        <img src="./images/bsu.jpeg" width= "850px" height= "240px";/>
        <p class="lif">BSU Online Campus Lost-Item Finder System</p>              
    </div>
    <form action="code_login.php" method="POST">
        <p class="p">Authorized Person Only!</p>
        <div class="log">
            <?php if (isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error'];?></p> 
            <?php } ?>
            <div class="username">
                <label>Email</label>
                <input type="text" name="admin_email" placeholder="Email" required/>
            </div> 
            <div class="password">          
                <label>Password</label>
                <input type="password" name="admin_password" placeholder="Password" required/>
            </div>
                            
            <button class="login" type="submit">Log in</button>
        </div>
</body>
</html>