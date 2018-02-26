<html>
<head>
<script src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="head_style.css"/>
<script>

$(document).ready(function(){
	$("#p_type").on("change",function(){
		$.ajax({
			type:"GET",
			url:"brand.php",
			data:{t_id:$("#p_type").val()}
		}).done(function( msg ){
		$("#brand").html(msg);
		});
	});
});

$(function(){
	$("#header").load("head.php");
});

</script>
</head>
<body style="background-color:rgba(0,0,255,0.2);">

<div id="header" name="header"></div><br/>
<form id="add_prod" name="add_prod" action="addProd_action.php" method="post" enctype="multipart/form-data">
	<hr>
	<div id="add" name="add">Add Product</div>
	<hr><br/>
	<div id="product" name="product">
	<table id="tprod" name="tprod" align="center">
		<tr>
			<td>Product name : </td>
			<td><input id="prod_nm" name="prod_nm" type="text"/></td>
		</tr>
		
		<tr>
			<td>Product type : </td>
			<td><select id="p_type" name="p_type">
					<option value=""></option>
					<option value="Camera">Camera</option>
					<option value="Moblie">Mobile</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Brand type : </td>
			<td><select id="p_brand" name="p_brand">
					<option value=""></option>
					<option value="Canon">Canon</option>
					<option value="Nikon">Nikon</option>
					<option value="lumix">Lumix</option>
					<option value="Sony">Sony</option>
					<option value="XOLO">XOLO</option>
					<option value="htc">HTC</option>
					<option value="Nokia">Nokia</option>
					<option value="Samsumg">Samsung</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Upload image : </td>
			<td><input type="file" id="img" name="img"/></td>
		</tr>
		<tr>
			<td>Product desc : </td>
			<td><input type="text" id="desc" name="desc"/></td>
		</tr>
		<tr>
			<td>Cost : </td>
			<td><input type="text" id="cost" name="cost"/></td>
		</tr>
		<tr>
			<td>Product ID : </td>
			<td><input type="text" id="pid" name="pid"/></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input id="sub" name="sub" type="submit" value="Add product"/></td>
		</tr>
	</table><br/><br/>
	
	</div>
	
</form>

</body>
</html>