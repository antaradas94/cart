<html>
<head>
<link rel="stylesheet" type="text/css" href="head_style.css"/>
<style type="text/css">
</style>
<script type="text/javascript" src="jquery.js">
</script>

</head>
<body id="home" name="home" style="background-color:rgba(0,0,255,0.2);" onload="show_prod()">
	<div id="header"></div>
	<form id="index" name="index">
	
		<div id="display" name="display">
		<?php

$conn=mysql_connect("localhost","root","");

if(!$conn)
{
	die("Error : ".mysql_error())."<br/>";
}


if(!mysql_select_db("review_sys",$conn))
{
	die("Error : ".mysql_error())."<br/>";
}

$sql="select * from prod_info";

$result=mysql_query($sql,$conn);

if(mysql_num_rows($result)>0)
{
	
	while($row=mysql_fetch_assoc($result))
	{	
		echo"<div style='border:1px solid black;' id='p1' name='p1' class='img_dis'>";
		echo "<a href='desc.php?pid=".$row['pid']."'><img src='uploads/".$row['image']."' margin='20px' height='200' width='200'/>";
		echo "<br/><label id='l1' name='l1' style='color:blue;'>".$row['p_name']."</label></a>";
		echo "</div>";
	}
	
}
else
	mysql_error();

mysql_close($conn);

?>
		</div>
	</form>

<script>
$(function head(){
	$("#header").load("head.php");
});

</script>
</body>
</html>