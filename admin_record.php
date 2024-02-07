<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<head><title>Web Form / Admin Record - POST/GET</title></head>
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
padding: 50px;
}



</style>
<body>
    <!--Navigation bar  -->
    <nav class="navbar background">
 <a href="adminhomepage.php"><img class="logo" src="pictures\Screenshot 2023-07-25 074837.png" width="200px" height="auto" /></a>
            <ul class="nav-list">
                <li><a href="admin_record.php">Records</a></li>
                <li><a href="asg6.4.php">Feed Me</a></li>
				<li><a href="food6.4.php">Food Donation</a></li>
                <li><a href="money6.4.php">Money Donation</a></li>
				<li><a href="volunteer6.4.php">Volunteer</a></li>
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
	<form id="foodbank" name="foodbank" action="rec1.3.php" method="POST">
<div class=center>
        <h3>Create New Food Bank <br></h3>
</div>
	
	

		<label for="txtName">Name:</label>
		<input type="text" size="30" id="txtName" 
		name="txtName" maxlength="100" placeholder="eg. Food Aid" value="<?php echo $name?>"><br><br>

		
		<label for="address">Address:</label>
		<input type="text" size="100" id="address" 
		name="address" maxlength="150" value="<?php echo $address?>"><br><br>
		
		
		<label for="contact1">Contact 1:</label>
		<input type="text" size="30" id="contact1" 
		name="contact1" maxlength="15" value="<?php echo $contact1?>"><br><br>
		
		
		<label for="contact2">Contact 2:</label>
		<input type="text" size="30" id="contact2" 
		name="contact2" maxlength="15" value="<?php echo $contact2?>"><br><br>
		
		
		<label for="gmail">Gmail:</label>
		<input type="text" size="70" id="gmail" 
		name="gmail" maxlength="320" value="<?php echo $gmail?>"><br><br>
		
		<label for="map">Map Link:</label>
		<input type="text" size="70" id="map" 
		name="map" maxlength="320" value="<?php echo $map?>"><br><br>
		
		
		<input type="submit" value="SEND" id="submit" name="submit">
		<input type="reset" value="CLEAR" id="reset" name="reset">
		
		
	</form>
	
	
	
</div>
</div>
</body>
</html>
