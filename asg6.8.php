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


$sql = "INSERT INTO tblrequest (uname, phoneNum, eAddress, hAddress, datepu, ctime, descr) 
VALUES ('$uname','$phoneNum','$eAddress','$hAddress','$datepu','$ctime','$descr') VALUES 
(?,?,?,?,?,?,?);";


// prepare stmt
$insertStatement = mysqli_prepare($conn,$sql);

// bind stmt with param: s-string, i-integer, d-double, b-blob
mysqli_stmt_bind_param($insertStatement, "sssiiiiiisss", $uname,$phoneNum,$eAddress,$hAddress,$datepu,$ctime,$descr);

mysqli_stmt_execute($insertStatement);

echo "New records created successfully";





mysqli_close($conn);