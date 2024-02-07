<?php
$id= isset($_GET["id"])?$_GET["id"]:"";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "whiteflagdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tblmoney WHERE id=$id;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	$id=$row["id"]; 
	$name=$row["name"];
	$phonenum=$row["phonenum"];
	$email=$row["email"];
	$amount = $row["amount"];
	
  }
} 
mysqli_close($conn);
?>








<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<head><title>Edit user money donation</title></head>
<style>
body{
  margin: 0;
  padding: 0;
  background-color: #EDEDED !important;
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
	border: 1px solid #ccc;
	width: 200px;
	margin-top:20px;
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


/* Centered text */
.centered {
  position: absolute;
  top: 50%;
  left: 70%;
  transform: translate(-50%, -50%);
  font-size:100px;
}


.footer {
    display: flex;
	justify-content:space-between;
    cursor: pointer;
	background: grey;
    background-blend-mode: darken;
    background-size: cover;
}

.col-1{
	width:33%;
	height:auto;
	margin:50px;
}

.col-1 a{
display:inline-block;
text-decoration:none;
color:#efefef;
margin-bottom:10px;
}

.col-1 a:hover{
color:red;
transition: 0.3s ease-out;
cursor:pointer;
}

.col-2{
width:33%;
height:auto;
margin:50px;
}

.col-2 a{
display:inline-block;
text-decoration:none;
color:#efefef;
margin-bottom:10px;
}

.col-2 a:hover{
color:red;
transition: 0.3s ease-out;
cursor:pointer;
}

.footer div{
	text-align:center;
}

.col-3{
	width:33%;
	height:auto;
	margin:50px;
}
.social-icons{
text-decoration:none;
margin-top:30px;
}

.social-icons i{
font-size:22px;
margin:10px;
cursor:pointer;
}

.facebook{
text-decoration:none;
color:white;
}
.twitter{
text-decoration:none;
color:white;
}
.instagram{
text-decoration:none;
color:white;
}
.pinterest{
text-decoration:none;
color:white;
}

.content{
text-align:center;
}

.button {
  background-color: grey;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
<nav class="navbar background">
 <a href="adminhomepage.php"> <img class="logo" src="pictures\Screenshot 2023-07-25 074837.png" width="200px" height="auto" />
            <ul class="nav-list">
                <li><a href="record.php">Records</a></li>
                <li><a href="asg6.4.php">Feed Me</a></li>
                <li><a href="food6.4.php">Food Donation</a></li>
                <li><a href="money6.4.php">Money Donation</a></li>
                <li><a href=".php">Volunteer</a></li>

            </ul>
            <div class="rightNav">
                <input type="text" name="search" id="search" />
		<a href="login.php" class = "login">
                <i class="fa-solid fa-user"></i>
        </a>
            </div>
</nav>


<div class=container>     
<div class="center-form">
	<form id="patient" name="patient" action="food6.5a.php" method="POST">
<div class=center>
        <h3>Money Donation<br></h3>
</div>


		ID
		<input type="text"  id="txtid" name="txtid" maxlength="30" readonly value="<?php echo $id?>"><br><br>
		
		<label for="txtname">Name:</label>
		<input type="text" size="30" id="txtname" 
		name="txtname" maxlength="30" value="<?php echo $name?>"><br><br>
		
		<label for="phonenum">Phone Number:</label>
		<input type="text" size="13" id="phonenum" 
		name="phonenum" maxlength="13" value="<?php echo $phonenum?>"><br><br>
		
		<label for="email">Email Address:</label>
		<input type="text" size="30" id="email" 
		name="email" maxlength="50" value="<?php echo $email?>"><br><br>
		
		<label for="amount">Donate Amount</label>
		<select name="amount" id="amount">
		
			<option value="10"<?php if($amount=="10"){?>selected<?php }?>>RM 10</option>
			
			<option value="20"<?php if($amount=="20"){?>selected<?php }?>>RM 20</option>
			
			<option value="30"<?php if($amount=="30"){?>selected<?php }?>>RM 30</option>
			
			<option value="50"<?php if($amount=="50"){?>selected<?php }?>>RM 50</option>
			
			<option value="100"<?php if($amount=="100"){?>selected<?php }?>>RM 100</option>
			
			<option value="200"<?php if($amount=="200"){?>selected<?php }?>>RM 200</option>
			
			</optgroup>
		</select><br> 
		
		
		
		
		<input type="submit" value="Send" id="submit" name="submit">
		<input type="reset" value="Clear" id="submit" name="submit">

	</form>
</div>
</div>


















<section>
<div class="footer">
	<div class = "col-1">
	<h3>Contact</h3>
	<i class="fa-solid fa-location-dot"></i>
	<a href = "#">No. 9 Jalan 7/118B,<br> Desa Tun Razak, Cheras,<br> ​56000 Kuala Lumpur MALAYSIA</p></a><br>
	<i class="fa-solid fa-phone"></i>
	<a>03-44559901</a><br><br>
	<i class="fa-solid fa-inbox"></i>
	<a href="www.google.com">info@whiteflagfoundation.org</a>
	</div>
	<div class = "col-2">
	<h3>Links</h3>
	<a href = "#">Food Drives/Food Banks</a><br>
	<a href = "#">Food Rescue</a><br>
	<a href = "login.php">Login</a><br>
	</div>
	<div class = "col-3">
	<h3>Follow Us</h3>
		<div class = "social-icons">
			<a href="https://www.facebook.com/" class = "facebook">
				<i class="fa-brands fa-facebook"></i>
			</a>
			<a href="https://twitter.com/" class = "twitter">
				<i class="fa-brands fa-twitter"></i>
			</a>
			<a href="https://instagram.com/" class = "instagram">
				<i class="fa-brands fa-instagram"></i>
			</a>
			<a href="https://pinterest.com/" class = "pinterest">
				<i class="fa-brands fa-pinterest"></i>
			</a>
	</div>
</div>
</section>
</body>
</html>