<?php echo "<br> คุณแน่ใจนะว่าคุณจะลบใบเสนอราคา? <br>
            <br> $quotation->Q_ID $quotation->CUS_NAME <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="quotation" />
    <input type="hidden" name="Q_ID" value="<?php echo $quotation->Q_ID; ?>" />
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    

</form>