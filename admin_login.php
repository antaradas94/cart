<?php
$name=$_POST['aname'];
$pwd=$_POST['apwd'];

$conn=mysql_connect("localhost","root","");

if(!$conn)
{
	die("Error : ".mysql_error())."<br/>";
}

if(!mysql_select_db("review_sys",$conn))
{
	die("Error : ".mysql_error())."<br/>";
}

$sql="select * from admin_info where a_name='$name' and a_pwd='$pwd'";

$result=mysql_query($sql,$conn);

if(mysql_num_rows($result)>0)
	header("Location: add_product.php");
else
	echo "No such admin name and password combination exists";

mysql_close($conn);

?>