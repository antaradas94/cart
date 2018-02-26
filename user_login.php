<?php

$eid=$_POST["eid"];
$pwd=$_POST["pwd"];

$conn=mysql_connect("localhost","root","");

if(!$conn)
	die("Error : ".mysql_error());

if(!mysql_select_db("review_sys",$conn))
	die("Error : ".mysql_error());

$sql="select * from user_info where eid='$eid' and pwd='$pwd'";

$res=mysql_query($sql,$conn);

if(mysql_num_rows($res)>0)
{
	$row=mysql_fetch_assoc($res);
	session_start();
	$_SESSION['uid']=$row['uid'];
	
	header("Location: index.php");
}
else
	die("Error : ".mysql_error());
?>