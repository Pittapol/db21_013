Add Quotation <a href=?controller=newquotation&action=newquotation> Click </a><br>
<form method="get"action="">
		<input type="text"name="key">
		<input type="hidden"name="controller"value="quotation"/>
		<button type="submit"name="action"value="search">
	search</button>

<p> นาย ธนาธิป ถิ่นประชา 6120501681 </p>
</form>
<table border = 1>
<tr> 
<td>Bill_ID</td>
<td>Date</td>
<td>Customer</td>
<td>Staff</td>
<td>Address</td>
<td>Payment Condition</td>
<td>Update</td>
<td>Delete</td></tr>
<?php foreach($quotationList as $quo)
{	echo "<tr>
	<td>$quo->bill_ID</td>
	<td>$quo->date</td> 
	<td>$quo->customer_name</td>
	<td>$quo->staff_name</td> 
	<td>$quo->address</td>
	<td>$quo->payment_condition</td>
	<td>update</td>
	<td>delete</td> </tr>"; 
}
echo"</table>";
?>