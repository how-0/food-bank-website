<html>
<link rel="stylesheet" href = "style.css">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<head>
	<meta name="viewport" content="width=device-width , initial-scale=1.0;">
</head>
<body>




<!-- navigation bar -->
<nav class="navbar background">
 <a href="homepage.php"><img class="logo" src="pictures\Screenshot 2023-07-25 074837.png" width="200px" height="auto" />
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

<br><br>
<!--record-->

<?php
$name 		= 	(!empty($_POST["txtName"]))?$_POST["txtName"]:"";
$address 	= 	(!empty($_POST["address"]))?$_POST["address"]:"";
$contact1 	= 	(!empty($_POST["contact1"]))?$_POST["contact1"]:"";
$contact2 	= 	(!empty($_POST["contact2"]))?$_POST["contact2"]:"";
$gmail 		= 	(!empty($_POST["gmail"]))?$_POST["gmail"]:"";
$map 		= 	(!empty($_POST["map"]))?$_POST["map"]:"";


$servername ="localhost";
$username = "root";
$password ="";
$dbname="whiteflagdb";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if($key=="")
	$sql = "SELECT * FROM tblrecord;";
else
	$sql="select * FROM tblrecord WHERE name LIKE '%$key%'OR address LIKE '%$key%';";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row=mysqli_fetch_assoc($result)) {
?>
	

   <div class = "fb"> <div class = "txt"> </div>
	
</div>

<div class = "content">
	<div class = "shape1">
		
		<div class = "txt"> 
		<h1> <?php echo $row["name"]?> </h1><br>
		<div class = "mapicon">
		<i class="fa-solid fa-location-dot"></i> Address
		</div>
		<p><?php echo $row["address"]?></p>
		<div class = "mapicon">
		<i class="fa-solid fa-message"></i> Contact
		</div>
		<p>
		<?php echo $row["contact1"]?><br><?php echo $row["contact2"]?><br><?php echo $row["gmail"]?></p>
		
		</div>
	
	</div>	<iframe src="<?php echo $row["map"]?>"
			width="50%" height="450" style="border:0; margin-right:150px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
<br><br><br>


<?php
 }
} else {
 echo "0 results";
}
mysqli_close($conn);
?>
	
	
<!--
   Action:<br><a href="rec1.0.php?id=<?php echo $row["id"]?>" style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;">Edit</a> 
   <a href="rec1.6.php?id=<?php echo $row["id"]?>"  style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;">Delete</a> <br>
-->



<!--
<div class = "fb"> <div class = "txt"> </div>
	
</div>

<div class = "content">
	<div class = "shape1">
		
		<div class = "txt"> 
		<h1> HungerHurts </h1><br>
		<div class = "mapicon">
		<i class="fa-solid fa-location-dot"></i> Address
		</div>
		<p>1-7-7. Jalan Tinju 13/50, Seksyen 13, Shah Alam, Selangor 40100, MY</p>
		<div class = "mapicon">
		<i class="fa-solid fa-message"></i> Contact
		</div>
		<p>
		+6012 9486 920<br>+603 3940 9302<br>hungerhurts@gmail.com</p>
		
		</div>
	
	</div>	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0875711244353!2d101.53908937575005!3d3.0712754536247893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4d76c04f6cc7%3A0xdd39d653934fb260!2s1%2C%20Jalan%20Tinju%2013%2F50%2C%20Seksyen%2013%2C%2040100%20Shah%20Alam%2C%20Selangor!5e0!3m2!1sen!2smy!4v1690465204836!5m2!1sen!2smy" 
			width="50%" height="450" style="border:0; margin-right:150px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<br><br><br>

<div class  = "content">
	<div class = "shape1">
	
		<div class = "txt"> 
		<h1> Food Aid Foundation </h1><br>
		<div class = "mapicon">
		<i class="fa-solid fa-location-dot"></i> Address
		</div>
		<p>9, Jalan 7/118b, Desa Tun Razak, 56000 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur</p>
		<div class = "mapicon">
		<i class="fa-solid fa-message"></i> Contact
		</div>
		<p>
		+603 9226 5500<br>+603 9226 5377<br>info@foodaidfoundation.org</p>
		</div>
	
	</div>		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.061619238562!2d101.71729867574996!3d3.0782234535829414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc359b6581d42f%3A0x86df1e4c44f5f7f5!2sFood%20Aid%20Foundation!5e0!3m2!1sen!2smy!4v1690517934537!5m2!1sen!2smy" 
				width="50%" height="450" style="border:0; margin-right:150px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>


<br><br><br>

<div class = "content">
	<div class = "shape1">
		
		<div class = "txt"> 
		<h1>Foodbank Digital exabytes</h1><br>
		<div class = "mapicon">
		<i class="fa-solid fa-location-dot"></i> Address
		</div>
		<p>1-18-8, Suntech @ Penang Cybercity, Lintang Mayang Pasir 3, 11950 Bayan Baru, Penang, Malaysia.</p>
		<div class = "mapicon">
		<i class="fa-solid fa-message"></i> Contact
		</div>
		<p>
		+604 609 7831<br>+604 609 7888<br>hello@foodbank.digital</p>
		
		</div>
	
	</div>	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.5939085380883!2d100.28416657575092!3d5.325858635919455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac06bb368359f%3A0x7f916742dec57e1f!2sExabytes%20Malaysia!5e0!3m2!1sen!2smy!4v1690519455052!5m2!1sen!2smy" 
			width="50%" height="450" style="border:0; margin-right:150px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<br><br><br>

<div class = "content">
	<div class = "shape1">
		
		<div class = "txt"> 
		<h1>PERTIWI</h1><br>
		<div class = "mapicon">
		<i class="fa-solid fa-location-dot"></i> Address
		</div>
		<p>No: 63 Jalan SS 3/53, Taman Subang, 47300 Petaling Jaya, Selangor Darul Ehsan, Malaysia</p>
		<div class = "mapicon">
		<i class="fa-solid fa-message"></i> Contact
		</div>
		<p>
		+603 7874 4203<br>+6012 236 3639<br>pertiwi.malaysia.gmail.com</p>
		
		</div>
	
	</div>	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9600224983215!2d101.60951437574995!3d3.105274153419173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c0694e7f489%3A0xa97822493e7f385!2s63%2C%20Jalan%20SS%203%2F53%2C%20Ss%203%2C%2047300%20Petaling%20Jaya%2C%20Selangor!5e0!3m2!1sen!2smy!4v1690521661325!5m2!1sen!2smy" 
			width="50%" height="450" style="border:0; margin-right:150px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>

<br><br><br>

<div class = "content">
	<div class = "shape1">
		
		<div class = "txt"> 
		<h1>Yayasan Food Bank Malaysia</h1><br>
		<div class = "mapicon">
		<i class="fa-solid fa-location-dot"></i> Address
		</div>
		<p>No.15, Jalan BA 2/1, Kawasan Perindustrian Bukit Angkat, 43000, Kajang, Selangor</p>
		<div class = "mapicon">
		<i class="fa-solid fa-message"></i> Contact
		</div>
		<p>
		+603 8736 0117<br>info@yfbm.org</p>
		
		</div>
	
	</div>	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9600224983215!2d101.60951437574995!3d3.105274153419173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c0694e7f489%3A0xa97822493e7f385!2s63%2C%20Jalan%20SS%203%2F53%2C%20Ss%203%2C%2047300%20Petaling%20Jaya%2C%20Selangor!5e0!3m2!1sen!2smy!4v1690521661325!5m2!1sen!2smy" 
			width="50%" height="450" style="border:0; margin-right:150px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
-->

</body>
</html>