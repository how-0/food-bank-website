<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="volunteerstyle1.css">

<body>
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
</body>
</html>



<?php
$key="";
if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
	$key=$_POST['search'];
}
?>


<div class="centerform">
<div class="form">
<form name="fSearch" id="fSearch" action="volunteer6.4.php" method="POST">
Search: <input type="text" name="search" value="<?php echo $key;?>" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
<input type="submit" name="submit" value="Go" style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block; border:0px solid black;"><br><br>
<a href="volunteer.php" style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;">Add volunteer</a>
</form>

<?php
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





if($key=="")

	$sql = "SELECT * FROM tblvolunteer;";

else

	$sql="select * FROM tblvolunteer WHERE userName LIKE '%$key%'OR phoneNo LIKE '%$key%';";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row=mysqli_fetch_assoc($result)) {
?>



   <p style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"> 
   ID: <?php echo $row["id"]?> <br>
   Name: <?php echo $row["userName"]?> <br>
   ssn: <?php echo $row["ssn"]?> <br>
   Phone Number: <?php echo $row["phoneNo"]?> <br>
   Email Address: <?php echo $row["email"]?> <br>
   Home Address: <?php echo $row["homeAddress"]?> <br><br>
   Jobs applied (1 for true and 0 for false)<br>
   Delivering Flyers: <?php echo $row["flyer"]?> <br>
   Taking Phone Calls: <?php echo $row["phone"]?> <br>
   Entering Data: <?php echo $row["data"]?> <br>
   Public Relation: <?php echo $row["relations"]?> <br>
   Door to Door Work: <?php echo $row["door"]?> <br>
   Clerical Work: <?php echo $row["clerical"]?> <br><br>
   Reason: <?php echo $row["descr"]?> <br><br>
   Action:<br><a href="volunteer6.5.php?id=<?php echo $row["id"]?>" style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;">Edit</a> 
   <a href="volunteer6.6.php?id=<?php echo $row["id"]?>"  style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;">Delete</a> <br>
<?php
 }
} else {
 echo "0 results";
}
mysqli_close($conn);
?>



</div>
</div>