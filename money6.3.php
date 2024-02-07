<?php
$name = (!empty($_POST["txtname"]))?$_POST["txtname"]:"";
$phonenum = (!empty($_POST["phonenum"]))?$_POST["phonenum"]:"";
$email = (!empty($_POST["email"]))?$_POST["email"]:"";
$amount = (!empty($_POST["amount"]))?$_POST["amount"]:"";



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

$sql = "INSERT INTO tblmoney (name, phonenum, email, amount) VALUES ('$name','$phonenum','$email','$amount');";
// echo $sql;







if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
<br>

