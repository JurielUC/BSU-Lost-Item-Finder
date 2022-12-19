<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
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
    margin-bottom: 900px;
    font-size: 28px;
    font-family: Berlin sans fb;
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
    height: 1000px;
    border: 1px solid #cccccc;
    margin-top: 260px;
    display: flex;
    align-items: center;
    justify-content: center;
}
input{
    border: 2px solid #ccc;
    width: 225px;
    padding: 7px;
    border-radius: 5px;
}
input:focus{
    background-color: #ddd;
}
select{
    border: 2px solid #ccc;
    width: 225px;
    padding: 7px;
    border-radius: 5px;
}
select:focus{
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
    margin-top: -100px;
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
    text-decoration: none;
    position: absolute;
    bottom: -540px;
    color: #ff0000;
}
.privacy{
    font-size: .9rem;
    text-decoration: none;
    position: absolute;
    bottom: -510px;
    color: #ff0000;
    cursor: pointer;
}
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  color: #000;
  position: relative;
  padding: 8px;
  margin-left: 10px;
  margin-top: 5px;
}

#message p {
  padding: 10px 35x;
  font-size: 12px;
}
#message h3{
    font-size: 12px;
}
/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -20px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -20px;
  content: "✖";
}

#checkme{
    margin-left: -100px;
    margin-top: 30px;
}
.checkbox{
    font-size: 14px;
    margin-left: -100px;
}

/*design for terms of use*/
.update-popup {
    display: none;
    position: fixed;
    top: 0;
    width: 100%;
    height: 100vh;
    z-index: 99999;
    background-color: rgba(0, 0, 0, 0.575);
}
.update-popup-close{
    position: absolute;
    top: 10px;
    left: -140px;
    width: 40px;
    height: 40px;
    font-size: 20px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.767);
    color: #ffffff;
}
.update-form{
    width: 400px;
    height: 100vh;
    background-color: #ffffff;
    margin: auto;
    display: flex;
    flex-direction: column;
    overflow: auto;
}
</style>
<body>
    <div class="bsu">
        <img src="./images/bsu.jpeg" width= "850px" height= "240px";/>
        <p class="lif">BSU Online Campus Lost-Item Finder System</p>              
    </div>
    <form action="code_create.php" method="POST">
        <p class="p">Create Account</p>
        <div class="log">
            <div class="username">
                <label>Full Name</label>
                <input type="text" name="fullname" placeholder="Full Name(ex. Juan Dela Cruz)" required/>
            </div>
            <div class="username">
                <label>Sr Code</label>
                <input type="text" name="srcode" placeholder="Sr Code(ex. 12-34567)" required/>
            </div>
            <div class="username">
                <label>Contact No.</label>
                <input type="text" name="contactno" placeholder="Contact No" required/>
            </div>
            <div class="username">
                <label>Program</label>
                <input type="text" name="program" placeholder="Program(ex. BSIT)" required/>
            </div>
            <div class="username">
                <label>Department</label>
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
            </div>
            <div class="username">
                <label>Campus</label>
                <select name="campus">
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
            </div>
            <div class="username">
                <label>Email<span style="color: #ff0000; font-size: 12px;"><b>(*Do not include Domain)</b></span></label>
                <input type="text" name="email" placeholder="Email(ex. juan.delacruz)" title="Use your Workspace(G Suite) account. 
Note: No need to enter the email domain(@g.batstate-u.edu.ph). 
It was already included." required/>
            </div> 
            <div class="password">          
                <label>Password</label>
                <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required/>
            </div>

            <div id="message">
                <h3 style="margin-left: -20px;">Must contain</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>

            <a class="privacy" onclick="openUpdate()">Terms of Use</a>
            <input type="checkbox" id="checkme"/>
            <label class="checkbox" for="checkme">I hereby certify that all infor- <br>mation above are true.</label><br>
            <button class="login" type="submit" disabled="disabled" id="sendNewSms" onClick="myfunction()">Submit</button>
            <a href="index.php">Go to login</a>
        </div>
    </form>
        <div class="update-popup" id="myUpdateForm">
            <div class="update-form">
                <button class="update-popup-close" onclick="closeUpdate()" title="Close">&times</button>
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
    //Password Validation
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.remove("invalid");
        letter.classList.add("valid");
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }
    
    // Validate length
    if(myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
    }

    //disable button
    var checker = document.getElementById('checkme');
    var sendbtn = document.getElementById('sendNewSms');

    sendbtn.style.opacity = .6;
    // when unchecked or checked, run the function
    checker.onchange = function(){
    if(this.checked){
        sendbtn.disabled = false;
        sendbtn.style.opacity = 1;
    } else {
        sendbtn.disabled = true;
        sendbtn.style.opacity = .6;
    }
    }
    function myfunction(){
        setInterval(function(){
            alert("Account Created Successfully! Thank you for signing up!");}, 2000)
    }

    // thses codes are for update form
    function openUpdate() {
        document.getElementById("myUpdateForm").style.display = "block";
    }
    function closeUpdate() {
        document.getElementById("myUpdateForm").style.display = "none";
    }
</script>
</html>