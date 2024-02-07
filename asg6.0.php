<?php

$page=isset($_GET["action"])?$_GET["action"]:"";



if($page=="view"){

	header("location:asg6.4.php");

}else if($page=="add"){

	header("location:asg6.2.php");

}

?>

<!DOCTYPE html>

<head>

<title>Home Page</title>

<script>

 function send(){

	 if(document.getElementById("view").checked==true)

		document.getElementById("redirect").submit();

	 if(document.getElementById("add").checked==true)

		document.getElementById("redirect").submit();

 }

</script>

</head>

<body>

<form action="asg6.0.php" id="redirect" name="redirect" method="get">

	<input type="radio" name="action" id="view" 

	value="view" onclick="send()"> View User

	<input type="radio" name="action" id="add" 

	value="add" onclick="send()"> Add User

</form>

</body>

</html>