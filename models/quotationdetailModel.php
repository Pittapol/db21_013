<?php 
class QuotationDetail
{
public $bill_ID;
public $Bd_ID;
public $price_ID;
public $cop_ID;
public $quantity_piece;
public $quantity_color;


public function __construct($bill_ID,$Bd_ID,$price_ID,$cop_ID,$quantity_piece,$quantity_color)
{	$this->bill_ID=$bill_ID;
	$this->Bd_ID=$Bd_ID;
	$this->price_ID=$price_ID;
	$this->cop_ID=$cop_ID;
	$this->quantity_piece=$quantity_piece;
	$this->quantity_color=$quantity_color; 
}

public static function getAll()
{	
	$quotationdetailList=[];
	require("connection_connect.php");
	$sql= "select * from Bill_Detail";
	$result= $conn->query($sql);
	while ($my_row = $result->fetch_assoc()) 
	{
           		$bill_ID = $my_row["bill_ID"];
            	$Bd_ID = $my_row["Bd_ID"];
            	$price_ID = $my_row["price_ID"];
            	$cop_ID = $my_row["cop_ID"];
            	$quantity_piece = $my_row["quantity_piece"];
            	$quantity_color = $my_row["quantity_color"];
            	$quotationdetailList[] = new QuotationDetail($bill_ID,$Bd_ID,$price_ID,$cop_ID,$quantity_piece,$quantity_color);
	}
    require("connection_close.php");
    return $quotationdetailList;
}
public static function search($key)
{
	$quotationdetailList=[];
	require("connection_connect.php");
	$sql= "select * from Bill_Detail where (bill_ID LIKE'%$key%' or Bd_ID LIKE'%$key%' or price_ID LIKE'%$key%' or cop_ID LIKE'%$key%' or quantity_piece LIKE'%$key%' or quantity_color LIKE'%$key%')";
	$result= $conn->query($sql);
	while ($my_row = $result->fetch_assoc())
	{
		$bill_ID = $my_row["bill_ID"];
	 	$Bd_ID = $my_row["Bd_ID"];
	 	$price_ID = $my_row["price_ID"];
	 	$cop_ID = $my_row["cop_ID"];
	 	$quantity_piece = $my_row["quantity_piece"];
	 	$quantity_color = $my_row["quantity_color"];
	 	$quotationdetailList[] = new QuotationDetail($bill_ID,$Bd_ID,$price_ID,$cop_ID,$quantity_piece,$quantity_color);
	}
	require("connection_close.php");
    return $quotationdetailList;
}
public static function update($bill_ID,$Bd_ID,$price_ID,$cop_ID,$quantity_piece,$quantity_color)
{
	require("connection_connect.php");
	$sql= "UPDATE Bill_Detail SET bill_ID='$bill_ID',Bd_ID='$Bd_ID',price_ID='$price_ID',cop_ID='$cop_ID',quantity_piece='$quantity_piece',quantity_color='$quantity_color'";
	$result= $conn->query($sql);
	require("connection_close.php");
    return "update success $result row";
}
}?>