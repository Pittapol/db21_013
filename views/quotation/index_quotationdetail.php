คลิกเพื่อเพิ่ม <a href=?controller=newquotationdetail&action=newquotationdetail> click </a><br>
<form method="get"action="">
		<input type="text"name="key">
		<input type="hidden"name="controller"value="quotationdetail"/>
		<button type="submit"name="action"value="search">
	search</button>
</form>
<table border = 1>
<tr> 
<td>bill_ID</td>
<td>Bd_ID</td>
<td>price_ID</td>
<td>cop_ID</td>
<td>quantity_piece</td>
<td>quantity_color</td>
</tr>  
<?php 
foreach($quotationdetailList as $quo)
{	echo "<tr>
	<td>$quo->bill_ID</td>
	<td>$quo->Bd_ID</td> 
	<td>$quo->price_ID</td>
	<td>$quo->cop_ID</td> 
	<td>$quo->quantity_piece</td>
	<td>$quo->quantity_color</td>
	<td>update</td>
	<td>delete</td> </tr>"; 
}
echo"</table>";
?>