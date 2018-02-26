<?php
session_start();
if($_POST["code"]==$_SESSION['vercode'])
{
	echo "Verification successful"."<br>";
	echo "thanks for shopping";
	echo '<a href="logout.php">LOG OUT</a>';
}
else
{
	echo "Invalid code";
}
?>