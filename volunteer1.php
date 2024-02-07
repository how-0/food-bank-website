<?php
$userName= (!empty($_POST["txtName"]))?$_POST["txtName"]:"";
$ssn = (!empty($_POST["ssn"]))?$_POST["ssn"]:"";
$phoneNo = (!empty($_POST["phoneNum"]))?$_POST["phoneNum"]:"";
$age = (!empty($_POST["age"]))?$_POST["age"]:"";
$email = (!empty($_POST["eAddress"]))?$_POST["eAddress"]:"";
$homeAddress = (!empty($_POST["hAddress"]))?$_POST["hAddress"]:"";


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

$sql = "INSERT INTO `tblvolunteer` (`userName`, `ssn`, `phoneNo`, `age`, `email`, `homeAddress`,
 `flyer`, `phone`, `data`, `relations`, `door`, `clerical`, `descr`) VALUES
('$userName', '$ssn', '$phoneNo','$age', '$email','$homeAddress',$cond[0],
$cond[1], $cond[2],$cond[3], $cond[4],$cond[5], '$descr');";

 // echo $sql;







if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
<br>

