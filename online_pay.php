<?php
echo '<form method="post" action="submit.php">';
echo'	Card type:	<select><option value="debit">DEBIT </option><option value="credit">CREDIT</option><option value="cod">CASH ON DELIVERY </option> </select>  <br/>

		CArd no. :<input type="number" id="cno" name="cno" placeholder="Card no."/><br/>
		CVV :<input type="password" id="cvv" name="cvv" ><br/>
		Expiry date :<input type="date" id="ed" name="ed"><br/>
		Cardholder Name :<input type="text" id="cname" name="cname" placeholder="tera naam "/><br/>
		Enter code: <img src="captcha.php"><input class="textbox" type="text" name="code">
     <input type="submit" value="submit" value="PAY NOW">
		';
echo "</form>";
?>

