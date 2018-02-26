<?php
session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("review_sys",$conn);
$uid=$_SESSION['uid'];
$cid=$_REQUEST['cid'];

$conn=mysql_connect("localhost","root","");

	echo $sql="delete from cart where cid='$cid'";
			

			$res=mysql_query($sql,$conn);
			//if(mysql_num_rows($res)>0)
header("Location: mycart.php");


?>


