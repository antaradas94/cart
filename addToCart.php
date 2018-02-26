<?php
session_start();

	// $cost=$_REQUEST['cost'];
 	$pid=$_REQUEST['pid'];
// $name=$_REQUEST['prod_nm'];
 $uid=$_SESSION['uid'];
if(!isset($_SESSION['uid']))
{
	header("Location: login.php");
}
else
{
	$conn=mysql_connect("localhost","root","");

	if(!$conn)
	{die("Error : ".mysql_error());}

	if(!mysql_select_db("review_sys",$conn))
	{die("Error : ".mysql_error());}

	$sql="insert into cart values ('','$pid','$uid')";
	
	if(!mysql_query($sql,$conn))
		die("Error : ".mysql_error());
	header("location:mycart.php");
	
}
?>