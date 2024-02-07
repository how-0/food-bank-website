<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<head><title>Web Form / Feed Me - POST/GET</title></head>
<style>
body{
  margin: 0; 
  padding: 0;
}

.navbar {
    display: flex;
    align-items: center;
    justify-content: center;
    top: 0px;
    cursor: pointer;
}

.nav-list {
    width: 50%;
    display: flex;
}

.nav-list li {
    list-style: none;
    padding: 26px 30px;
    font-size:25px;
}

.nav-list li a {
    text-decoration: none;
    color: white;
}

.nav-list li a:hover {
    color: black;
}

.rightNav {
    width: 50%;
    text-align: right;
}

#search {
    padding: 10px;
    font-size: 17px;
    border-radius: 9px;
    border-style: 5 px solid #fff;
	width:200px;
	margin-top:20px;
	border: 1px solid #ccc;
}

.background {
    background: grey;
    background-blend-mode: darken;
    background-size: cover;
}
.login{
            float:right;
            color:white;
            padding:20px;
            margin: 10px;
            height: 15px;
        }

.container{
    padding:2px;
    margin: 10px;
}

        
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=time], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=date], select {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=reset] {
  width: 100%;
  background-color: grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #D3D3D3;
}

input[type=reset]:hover {
  background-color: #D3D3D3;
}

.center-form{
justify-content: center;
display: flex;
margin: 40px 300px;
border: 3px solid black;
padding: 30px;
}



</style>
<body>
    <!--Navigation bar  -->
    <nav class="navbar background">
 <a href="homepage.php"><img class="logo" src="pictures\Screenshot 2023-07-25 074837.png" width="200px" height="auto" /></a>
            <ul class="nav-list">
                <li><a href="record.php">Records</a></li>
                <li><a href="feedme.php">Feed Me</a></li>
                <li><a href="dohomepage.php">Donate</a></li>
                <li><a href="volunteer.php">Volunteer</a></li>
            </ul>
            <div class="rightNav">
                <input type="text" name="search" id="search" />
        <a href="login.php" class = "login">
                <i class="fa-solid fa-user"></i>
        </a>
            </div>
        </nav>
    <!--End of Navigation bar  -->
 
<div class=container>     
<div class="center-form">
	<form id="patient" name="patient" action="asg6.3.php" method="POST">
<div class=center>
        <h3>Request for food donation colleciton / Feed Me<br></h3>
</div>
		<label for="txtName">User Name:</label>
		<input type="text" size="30" id="txtName" 
		name="txtName" maxlength="30" placeholder="eg. John"><br><br>
		<!--using disable or readonly attribute with value attribute-->
		<!--<input type="text" size="30" id="txtName" 
		name="txtName" maxlength="30" readonly value="Jibby"><br>-->
		
		<label for="phoneNum">Phone Number:</label>
		<input type="text" size="13" id="phoneNum" 
		name="phoneNum" maxlength="13" placeholder="eg. 012457852"><br><br>
		
		<label for="eAddress">Email Address:</label>
		<input type="text" size="30" id="eAddress" 
		name="eAddress" maxlength="50"><br><br>
		
		<label for="hAddress">Home Address:</label>
		<input type="text" size="70" id="hAddress" 
		name="hAddress" maxlength="100"><br><br>
		
        <label for="datepu">Date Pick Up:</label><br>
		<input type="date" name="datepu" id="datepu"  min="<?php echo date("Y-m-d")?>"><br><br>
		
		<label for="ctime">Collect time:</label><br>
        <input type="time" id="ctime" name="ctime" ><br><br>

		<label for="descr">Other Request:</label><br>
		<textarea placeholder="Describe here" rows="10" cols="50" id="descr" name="descr" style="width: 100%; padding: 12px 20px;margin: 8px 0;
  display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
		</textarea><br><br>
		
		<input type="submit" value="Send" id="submit" name="submit">
		<input type="reset" value="Clear" id="submit" name="submit">

	</form>
</div>
</div>
</body>
</html>
