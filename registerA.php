<?php
//from previous lesson
$userName = (!empty($_POST["username"]))?$_POST["username"]:"";
$contact = (!empty($_POST["contact"]))?$_POST["contact"]:"";
$pwd = (!empty($_POST["password"]))?$_POST["password"]:"";
$gender = isset($_POST["sex"])?$_POST["sex"]:"";
$position = isset($_POST["position"])?$_POST["position"]:"";

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

$sql = "INSERT INTO tbluser (userName, contact, gender, pwd, 
position) VALUES(?,?,?,?,?);";

//prepare stmt
$insertStatement = mysqli_prepare($conn,$sql);

// bind stmt with param: s-string, i-integer, d-double, b-blob
mysqli_stmt_bind_param($insertStatement, 'sssss', $userName,$contact,$gender, $pwd, $position);

mysqli_stmt_execute($insertStatement);

// echo "New records created successfully";
      header('location: login.php');

mysqli_close($conn);

?>


