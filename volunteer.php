<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="volunteerstyle.css">
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
 
<div class = "descr">
<h3>Want to be a part of White Flag Foundations?</h3>
<p>We receive and redistribute rescued surplus food manufacturers, distributors, wholesalers, retailers and food
 service provider. This includes product that is out of specification, close to date code, has incorrect labelling
 or damaged packaging as well as excess stock and stock recall.<br><br>
Other than receiving food supplies from industrial source, we distribute non-perishable food and grocery donations
 from the public who would like to make donations in form of cash or non-perishable food.<br><br>

As a non-profit non-governmental organisation, we work on skeleton crew and Volunteers plays
 an important role in our operations.<br><br>

Do contact us to find out how you can contribute as a volunteer.</p>
</div>
<div class=container>     
<div class="center-form">
	<form id="volunteer" name="volunteer" action="volunteer1.php" method="POST">
<div class=center>
        <h3>Volunteer Now<br></h3>
</div>
		<label for="txtName">Name:</label>
		<input type="text" size="30" id="txtName" 
		name="txtName" maxlength="30" placeholder="eg. John"><br><br>
		<!--using disable or readonly attribute with value attribute-->
		<!--<input type="text" size="30" id="txtName" 
		name="txtName" maxlength="30" readonly value="Jibby"><br>-->
		
		<label for="ssn">Identification Card No.</label>
		<input type="text" size="13" id="ssn" 
		name="ssn" maxlength="12" placeholder="eg. 040419049876"><br><br>
		
		<label for="phoneNum">Phone Number:</label>
		<input type="text" size="13" id="phoneNum" 
		name="phoneNum" maxlength="13" placeholder="eg. 012457852"><br><br>
		
		<label for="age">Age:</label>
		<input type="text" size="100" id="age" 
		name="phoneNum" maxlength="100"><br><br>
		
		<label for="eAddress">Email Address:</label>
		<input type="text" size="30" id="eAddress" 
		name="eAddress" maxlength="50"><br><br>
		
		<label for="hAddress">Home Address:</label>
		<input type="text" size="70" id="hAddress"
		name="hAddress" maxlength="100"><br><br>
		
		<fieldset>
		<legend>What can you do? Check all that apply</legend>
		<input type="checkbox" id="flyer" name="flyer" value="flyer">
		<label for="flyer">Delivering Flyers</label><br>
		<input type="checkbox" id="phone" name="phone" value="phone">
		<label for="phone">Taking Phone Calls</label><br>
		<input type="checkbox" id="data" name="data" value="data">
		<label for="data">Entering Data</label><br> 
		<input type="checkbox" id="relations" name="relations" value="relations">
		<label for="relations">Public Relation</label><br> 
		<input type="checkbox" id="door" name="door" value="door">
		<label for="door">Door to Door Work</label><br>
		<input type="checkbox" id="clerical" name="clerical" value="clerical">
		<label for="clerical">Clerical Work</label><br> 
		</fieldset>

		<label for="descr">Why have you decided to join our campaign?</label><br>
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