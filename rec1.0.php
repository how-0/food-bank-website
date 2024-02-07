<?php
$page=isset($_GET["action"])?$_GET["action"]:"";

if($page=="view"){
	header("location:rec1.4.php");
}else if($page=="add"){
	header("location:admin_record.php");
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
<form action="rec1.0.php" id="redirect" name="redirect" method="get">
	<input type="radio" name="action" id="view" 
	value="view" onclick="send()"> View Record
	<input type="radio" name="action" id="add" 
	value="add" onclick="send()"> Add Record
</form>
</body>
</html>

