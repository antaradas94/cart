<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$addr=$_POST["addr"];
$mob=$_POST["mob"];
$dob=$_POST["dob"];
$eid=$_POST["eid"];
$pwd=$_POST["pwd"];
$uid=$_REQUEST["uid"];
$conn=mysql_connect("localhost","root","");

if(!$conn)
	die("Error : ".mysql_error());

if(!mysql_select_db("review_sys",$conn))
	die("Error : ".mysql_error());

$sql="insert into user_info values('$fname','$lname','$gender','$addr','$mob','$dob','$eid','$pwd','$uid')";

if(mysql_query($sql,$conn))
	echo "Thank you for registering..";
else
	die("Error : ".mysql_error());

mysql_close($conn);


?>