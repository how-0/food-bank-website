<!------- nav bar ------->
<html>
<script src="https://kit.fontawesome.com/c9e4130094.js" crossorigin="anonymous"></script>
<head>
	<meta name="viewport" content="width=device-width , initial-scale=1.0;">
</head>
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



.form{
	padding:2px;
    margin: 10px;
}


.centerform{
justify-content: center;
margin: 40px 450px;
border: 1px solid black;
</style>

<body>
<nav class="navbar background">
 <a href="adminhomepage.php"> <img class="logo" src="pictures\Screenshot 2023-07-25 074837.png" width="200px" height="auto" />
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




<!------ php ------->
<?php
$key="";
if(isset($_POST['submit'])&& $_POST['submit']=="Go"){
	$key=$_POST['search'];
}
?>

<div class="centerform">
<div class="form">
<form name="fSearch" id="fSearch" action="rec1.4.php" method="POST">
Search: <input type="text" name="search" value="<?php echo $key;?>" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
<input type="submit" name="submit" value="Go" style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block; border:0px solid black;"><br><br>
<a href="admin_record.php" style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;">Add Record</a>
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
	$sql = "SELECT * FROM tblrecord;";
else
	$sql="select * FROM tblrecord WHERE name LIKE '%$key%'OR address LIKE '%$key%';";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row=mysqli_fetch_assoc($result)) {
?>


   <p> 
   <p style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"> 
   ID: 			<?php echo $row["id"]?> <br>
   Name: 		<?php echo $row["name"]?> <br>
   Address: 	<?php echo $row["address"]?> <br>
   Contact 1: 	<?php echo $row["contact1"]?> <br>
   Contact 2: 	<?php echo $row["contact2"]?> <br>
   Gmail: 		<?php echo $row["gmail"]?> <br>
   Map Link : <?php echo $row["map"]?> <br>
   Action:<br><a href="rec1.5.php?id=<?php echo $row["id"]?>" style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;">Edit</a> 
   <a href="rec1.6.php?id=<?php echo $row["id"]?>"  style="background-color: grey;color: white;padding: 10px 20px;text-align: center;text-decoration: none;display: inline-block;">Delete</a> <br>
<?php
 }
} else {
 echo "0 results";
}
mysqli_close($conn);
?>