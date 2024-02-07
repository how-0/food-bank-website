<?php
$id = empty($_POST["txtid"])?"":$_POST["txtid"];
$name = (!empty($_POST["txtname"]))?$_POST["txtname"]:"";
$phonenum = (!empty($_POST["phonenum"]))?$_POST["phonenum"]:"";
$email = (!empty($_POST["email"]))?$_POST["email"]:"";
$quantity = (!empty($_POST["quantity"]))?$_POST["quantity"]:"";
$date = (!empty($_POST["date"]))?$_POST["date"]:"";
$time = (!empty($_POST["time"]))?$_POST["time"]:"";


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



$sql = "UPDATE tblmoney SET
name='$name',
phonenum='$phonenum',
eAddress='$email',
amount='$amount'
WHERE id=$id;";



if (mysqli_query($conn, $sql)) {
  //echo "Record updated successfully";
  header("location:money6.4.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>








