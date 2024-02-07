<?php
//from previous lesson
$id = empty($_POST["txtid"])?"":$_POST["txtid"];
$uname= (!empty($_POST["txtName"]))?$_POST["txtName"]:"";
$phonenum = (!empty($_POST["phoneNum"]))?$_POST["phoneNum"]:"";
$eaddress = (!empty($_POST["eAddress"]))?$_POST["eAddress"]:"";
$haddress = (!empty($_POST["hAddress"]))?$_POST["hAddress"]:"";
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



$sql = "UPDATE tblrequest SET
uname='$uname',
phonenum='$phonenum',
eAddress='$eaddress',
hAddress='$haddress',
descr='$descr',
datepu ='$datepu',
ctime ='$ctime'
WHERE id=$id;";





if (mysqli_query($conn, $sql)) {
  //echo "Record updated successfully";
  header("location:asg6.4.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>








