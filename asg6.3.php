<?php
$uname= (!empty($_POST["txtName"]))?$_POST["txtName"]:"";
$phoneNum = (!empty($_POST["phoneNum"]))?$_POST["phoneNum"]:"";
$eAddress = (!empty($_POST["eAddress"]))?$_POST["eAddress"]:"";
$hAddress = (!empty($_POST["hAddress"]))?$_POST["hAddress"]:"";
$datepu = (!empty($_POST["datepu"]))?$_POST["datepu"]:"";
$ctime = (!empty($_POST["ctime"]))?$_POST["ctime"]:"";
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

$sql = "INSERT INTO tblrequest (uname, phoneNum, eAddress, hAddress, datepu, ctime, descr) VALUES ('$uname','$phoneNum','$eAddress','$hAddress','$datepu','$ctime','$descr');";








if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

<br>

