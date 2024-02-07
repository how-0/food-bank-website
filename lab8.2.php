<?php

session_start();

echo "Num of hits: " . $_SESSION["visit"];

$_SESSION["test"]= "Chua Chua";

<br>

<a href="lab8.1.php">Previous</a> | 

<a href="lab8.3.php">Next</a>
?>