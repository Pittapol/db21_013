<form method="get" action="">
<label>รหัส <input type="text" name="Q_ID" 
        value="<?php echo $quotation->Q_ID;?>"/></label><br>
<label>วันที่ <input type="date" name="Q_DATE"
        value="<?php echo $quotation->Q_DATE;?>"/></label><br>

        <label>ชื่อลูกค้า <select name="CUS_Name">
    <?php foreach($customerList as $c) {
        echo "<option value = $c->id";
        if($c->id==$quotation->CUS_ID){echo " selected='selected'";}
         echo ">$c->name</option>";}
    ?>
    </select></label><br> 
    
<label>ชื่อพนักงาน <select name="EMP_Name">
    <?php foreach($employeeList as $e) {
        echo "<option value = $e->id";
        if($e->id==$quotation->EMP_ID){echo " selected='selected'";}
         echo ">$e->name</option>";}
    ?>
    </select></label><br>

<label>เงื่อนไขชำระ <input type="text" name="Q_CDT"
        value="<?php echo $quotation->Q_CDT;?>"/></label><br>

<label>%มัดจำ(เครดิตเป็น0) <input type="text" name="Q_deposit"
        value="<?php echo $quotation->Q_deposit;?>"/></label><br>

<input type="hidden"name="controller"value="quotation"/>
<input type="hidden" name="oldid" value="<?php echo $quotation->Q_ID; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>