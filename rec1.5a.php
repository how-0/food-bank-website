<?php
//from previous lesson
$id 		= 	empty($_POST["txtid"])?"":$_POST["txtid"];
$name 		= 	(!empty($_POST["txtName"]))?$_POST["txtName"]:"";
$address 	= 	(!empty($_POST["address"]))?$_POST["address"]:"";
$contact1 	= 	(!empty($_POST["contact1"]))?$_POST["contact1"]:"";
$contact2 	= 	(!empty($_POST["contact2"]))?$_POST["contact2"]:"";
$gmail 		= 	(!empty($_POST["gmail"]))?$_POST["gmail"]:"";
$map 		= 	(!empty($_POST["map"]))?$_POST["map"]:"";


// set-up
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

$sql = "UPDATE tblrecord SET
name		='$name',
address		='$address',
contact1	='$contact1',
contact2	='$contact2',
gmail		='$gmail',
map			='$map'
WHERE id	=$id;";


//echo $sql;	

if (mysqli_query($conn, $sql)) {
  //echo "Record updated successfully";
  header("location:rec1.4.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

