


<?php




session_start();
$conn=mysql_connect("localhost","root","");

$tot=0;

mysql_select_db("review_sys",$conn);
$uid=$_SESSION['uid'];
$sql="select * from prod_info as a, cart as b where b.uid='$uid' and a.pid = b.pid";
			

			$res=mysql_query($sql,$conn);
			
			if(mysql_num_rows($res)>0)
			{	
				while($row=mysql_fetch_assoc($res))
				{
				echo "<img src='uploads/".$row['image']."' height='450px' width='300px' style='margin-left:200px;'/>";
				echo "<div id='p_desc' name='p_desc' style='height:200px;float:right; margin-right:250px; margin-top:100px'>";
				
				echo "<input name='pid' type='hidden' value='".$row['pid']."'/>";
				echo "<br/><br/>Model : <label id='p_name' name='p_name'>".$row['p_name']."</label>";
				echo "<br/><br/>Description : ".$row['p_desc']."<br/><br/>";
				
				echo "Product type/Brand : ".$row['p_type']."/".$row['p_brand'];
				
				echo "<br/><br/>Cost : Rs.<label id='p_cost' name='p_cost'>".$row['p_cost']."</label>";
				echo "</div>";
		
			    echo "<br/>";
				
				echo "<form method='post' action='remove.php'>";
				echo "<input type='hidden' name='cid' value=".$row['cid'].">";
				echo "<input type='submit' value='Remove product' id='remove'>";
				
				echo"</form>";
				$tot=$tot+$row['p_cost'];				
				
				}
				echo " total cost is  ".$tot;
								
			}
			
echo "<a href='online_pay.php'>Proceed to payment</a>";

?>
