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

$sql = "SELECT * FROM tblvolunteer WHERE id=$id;";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
	$id=$row["id"]; 
	$userName=$row["userName"];
	$ssn=$row["ssn"];
	$phoneNo=$row["phoneNo"];
	$email=$row["email"];
	$homeAddress = $row["homeAddress"];
	$cond=array($row["flyer"],$row["phone"],$row["data"], $row["relations"],$row["door"],$row["clerical"]);
	$descr = $row["descr"];
  }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="volunteerstyle.css">
<body>
    <!--Navigation bar  -->
    <nav class="navbar background">
 <a href="adminhomepage.php"><img class="logo" src="pictures\Screenshot 2023-07-25 074837.png" width="200px" height="auto" /></a>
            <ul class="nav-list">
                <li style="font-size:21px"><a href="rec1.4.php">Records</a></li>
                <li style="font-size:21px"><a href="asg6.4.php">Feed Me</a></li>
                <li style="font-size:21px"><a href="food6.4.php">Food Donation</a></li>
				<li style="font-size:21px"><a href="money6.4.php">Money Donation</a></li>
                <li style="font-size:21px"><a href="volunteer6.4.php">Volunteer</a></li>
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
	<form id="volunteer" name="volunteer" action="volunteer6.5a.php" method="POST">
<div class=center>
        <h3>Volunteer Now<br></h3>
</div>
		ID
		<input type="text"  id="txtid" name="txtid" maxlength="30" readonly value="<?php echo $id?>"><br>
		<label for="txtName">Name:</label>
		<input type="text" size="30" id="txtName" 
		name="txtName" maxlength="30" placeholder="eg. John" value="<?php echo $userName?>"><br><br>
		<!--using disable or readonly attribute with value attribute-->
		<!--<input type="text" size="30" id="txtName" 
		name="txtName" maxlength="30" readonly value="Jibby"><br>-->
		
		<label for="ssn">Identification Card No.</label>
		<input type="text" size="13" id="ssn" 
		name="ssn" maxlength="12" placeholder="eg. 040419049876" value="<?php echo $ssn?>"><br><br>
		
		<label for="phoneNum">Phone Number:</label>
		<input type="text" size="13" id="phoneNum" 
		name="phoneNum" maxlength="13" placeholder="eg. 012457852" value="<?php echo $phoneNo?>"><br><br>
		
		<label for="age">Age:</label>
		<input type="text" size="100" id="age" 
		name="phoneNum" maxlength="100" value="<?php echo $age?>"><br><br>
		
		<label for="eAddress">Email Address:</label>
		<input type="text" size="30" id="eAddress" 
		name="eAddress" maxlength="50" value="<?php echo $email?>"><br><br>
		
		<label for="hAddress">Home Address:</label>
		<input type="text" size="70" id="hAddress"
		name="hAddress" maxlength="100" value="<?php echo $homeAddress?>"><br><br>
		
		<fieldset>
		<legend>What can you do? Check all that apply</legend>
		<input type="checkbox" id="flyer" name="flyer" value="flyer"<?php 
			if($cond[0]==1){
			 echo "checked";
			}
			?>>
		<label for="flyer">Delivering Flyers</label><br>
		
		<input type="checkbox" id="phone" name="phone" value="phone"<?php 
			if($cond[1]==1){
			 echo "checked";
			}
			?>>
		<label for="phone">Taking Phone Calls</label><br>
		
		<input type="checkbox" id="data" name="data" value="data"<?php 
			if($cond[2]==1){
			 echo "checked";
			}
			?>>
		<label for="data">Entering Data</label><br>
			
		<input type="checkbox" id="relations" name="relations" value="relations"<?php 
			if($cond[3]==1){
			 echo "checked";
			}
			?>>
		<label for="relations">Public Relation</label><br>
			
		<input type="checkbox" id="door" name="door" value="door"<?php 
			if($cond[4]==1){
			 echo "checked";
			}
			?>>
		<label for="door">Door to Door Work</label><br>
			
		<input type="checkbox" id="clerical" name="clerical" value="clerical"<?php 
			if($cond[5]==1){
			 echo "checked";
			}
			?>>
		<label for="clerical">Clerical Work</label><br>
			
		</fieldset>

		<label for="descr">Why have you decided to join our campaign?</label><br>
		<textarea placeholder="Describe here" rows="10" cols="50" id="descr" name="descr" style="width: 100%; padding: 12px 20px;margin: 8px 0;
  display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"><?php echo $descr?>
		</textarea><br><br>
		
		<input type="submit" value="Send" id="submit" name="submit">
		<input type="reset" value="Clear" id="submit" name="submit">

	</form>
</div>
</div>
</body>
</html>