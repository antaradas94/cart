<?php

$prod_nm=$_POST['prod_nm'];
$p_type=$_POST['p_type'];
$p_brand=$_POST['p_brand'];
$desc=$_POST['desc'];
$cost=$_POST['cost'];
$pid=$_POST['pid'];

if($_FILES["img"]["error"]>0)
{
	echo "Error : ".$_FILES["img"]["error"]."<br/>";
}
else
{
	move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/".$_FILES["img"]["name"]);
}
	$conn=mysql_connect('localhost','root','');
	
		if(!$conn)
			die(mysql_error());
	
		if(!mysql_select_db('review_sys',$conn))
			die(mysql_error());

		$sql="INSERT into prod_info(p_name,p_type,p_brand,p_desc,p_cost,image,pid) values('$prod_nm','$p_type','$p_brand','$desc','$cost','".$_FILES['img']['name']."','$pid')";
		
		if(!mysql_query($sql,$conn))
			die(mysql_error());
		else
		{
			header("Location: add_product.php");
		    echo alert('Product Added Successfully');
		}
		mysql_close($conn);
?>