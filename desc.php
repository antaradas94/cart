<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="head_style.css"/>
<script>

$(function(){
	$("#header").load("head.php");
});
 
</script>
</head>
<body style="background-color:rgba(0,0,255,0.2);">
	<div id="header" name="header"></div><br/>
   <form method="post" action="addToCart.php">
	<div id="desc" name="desc">
		<?php


			$conn=mysql_connect("localhost","root","");

			if(!$conn)
			{	die("Error : ".mysql_error());}

			if(!mysql_select_db("review_sys",$conn))
			{	die("Error : ".mysql_error());}
			
			$pid=$_REQUEST['pid'];
			
		
			$sql="select * from prod_info where pid='$pid'";
			

			$res=mysql_query($sql,$conn);
			
			if(mysql_num_rows($res)>0)
			{	
				$row=mysql_fetch_assoc($res);
				echo "<img src='uploads/".$row['image']."' height='450px' width='300px' style='margin-left:200px;'/>";
				echo "<div id='p_desc' name='p_desc' style='height:200px;float:right; margin-right:250px; margin-top:100px'>";
				
				echo "<input name='pid' type='hidden' value='".$row['pid']."'/>";
				echo "<br/><br/>Model : <label id='p_name' name='p_name'>".$row['p_name']."</label>";
				echo "<br/><br/>Description : ".$row['p_desc']."<br/><br/>";
				
				echo "Product type/Brand : ".$row['p_type']."/".$row['p_brand'];
				
				echo "<br/><br/>Cost : Rs.<label id='p_cost' name='p_cost'>".$row['p_cost']."</label>";
				echo "</div>";
		
			    echo "<br/>";
			}
			
		?>
		<input type='submit' id='addToCart' name='addToCart' style='float:left; width:100px; height:50px; margin-left:500px; margin-top:10px;' value='addToCart' />
	</div><br/><br><br/><br/>
	<br/>
	</form>
	
</body>
</html>