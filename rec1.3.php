<?php
$name 		= 	(!empty($_POST["txtName"]))?$_POST["txtName"]:"";
$address 	= 	(!empty($_POST["address"]))?$_POST["address"]:"";
$contact1 	= 	(!empty($_POST["contact1"]))?$_POST["contact1"]:"";
$contact2 	= 	(!empty($_POST["contact2"]))?$_POST["contact2"]:"";
$gmail 		= 	(!empty($_POST["gmail"]))?$_POST["gmail"]:"";
$map 		= 	(!empty($_POST["map"]))?$_POST["map"]:"";



//set-up
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


$sql = "INSERT INTO tblrecord (name, address , contact1 , contact2 , gmail, map) 
VALUES
('$name',
'$address',
'$contact1',
'$contact2', 
'$gmail', 
'$map');";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
<br>

<h3><a href="rec1.4.php">View</a></h3>
