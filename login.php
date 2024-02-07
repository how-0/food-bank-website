<?php

$host="localhost";
$user="root";
$password="";
$db="whiteflagdb";

SESSION_START();




$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$userName=$_POST["userName"];
	$password=$_POST["password"];

	if(isset($_POST['save'])&& $_POST['save']==="Login"){
	$_SESSION["userName"] = $userName;
}

	$sql="select * from tbluser where userName='".$userName."' AND pwd='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["position"]=="admin")
	{
		header("location:adminhomepage.php");
	}

	elseif($row["position"]=="user")
	{
		header("location:homepage.php");
	}

	else
	{
		echo '<p style="color: red">username or password incorrect</p>';
		
	}

}

?>


<html>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="loginstyles.css">
<body>
    <div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name = "userName" id = "userName" required>
          <span></span>
          <label>UserName</label>
        </div>
        <div class="txt_field">
          <input type="password" name = "password" id = "password	" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass"><a href="forget.php" style = "text-decoration:none">Forgot Password?</a></div>
        <input type="submit" name = "save" value="Login">
        <div class="signup_link">
          Not a member? <a href="register.php">Register</a>
        </div>
		<div class="signup_link">
          <a href="logout.php">Log out</a>
        </div>
      </form>
    </div>
</body>
</html>