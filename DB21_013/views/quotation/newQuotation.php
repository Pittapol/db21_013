<form method="get" action="">
<label> BILL ID <input type="text" name="bill_ID"/></label><br>
<label> Date <input type="date" name="date"/></label><br>
<label> Customer Name <select name="customer_name">
<?php foreach($customerList as $customer) {echo "<option value = $customer->id>$customer->name</option>";}?>
</select></label><br>
<label>Staff Name <select name="staff_name">
<?php foreach($staffList as $staff) {echo "<option value = $staff->id>$staff->name</option>";}?>
</select></label><br>
<label>Condition(credit/deposit)<input type="text" name="payment_condition"/></label><br>
<input type="hidden"name="controller"value="quotation"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addQuotation">Save</button>
</form>