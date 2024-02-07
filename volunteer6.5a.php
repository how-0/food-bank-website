<?php
//from previous lesson
$id = empty($_POST["id"])?"":$_POST["id"];
$userName= (!empty($_POST["userName"]))?$_POST["userName"]:"";
$ssn = (!empty($_POST["ssn"]))?$_POST["ssn"]:"";
$phoneNo = (!empty($_POST["phoneNo"]))?$_POST["phoneNo"]:"";
$age = (!empty($_POST["age"]))?$_POST["age"]:"";
$email = (!empty($_POST["email"]))?$_POST["email"]:"";
$homeAddress = (!empty($_POST["homeAddress"]))?$_POST["homeAddress"]:"";


$cond = array(0,0,0,0,0,0);
if(isset($_POST["flyer"]))
	$cond[0] = 1;

if(isset($_POST["phone"]))
	$cond[1] = 1;

if(isset($_POST["data"]))
	$cond[2] = 1;

if(isset($_POST["relations"]))
	$cond[3] = 1;

if(isset($_POST["door"]))
	$cond[4] = 1;

if(isset($_POST["clerical"]))
	$cond[5] = 1;

$descr = (!empty($_POST["descr"]))?$_POST["descr"]:"";



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



$sql = "UPDATE tblvolunteer SET
$userName='$userName';
$ssn='$ssn';
$phoneNo='$phoneNo';
$email='$email';
$homeAddress = '$homeAddress';
$flyer=$cond[0];
$phone=$cond[1];
$data=$cond[2];
$relations = $cond[3];
$door = $cond[4];
$clerical = $cond[5];
$descr = '$descr'
WHERE id = $id;";



if (mysqli_query($conn, $sql)) {
  //echo "Record updated successfully";
  header("location:volunteer6.4.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>