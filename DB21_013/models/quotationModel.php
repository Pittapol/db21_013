<?php
class Quotation
{
    public $bill_ID, $date, $customer_name, $staff_name;
    public $customer_ID, $staff_ID, $payment_condition;
    public $address;

    public function __construct($bill_ID, $date, $customer_name, $staff_name, $address, $customer_ID, $staff_ID, $payment_condition)
    {
        $this->bill_ID = $bill_ID;
        $this->date = $date;
        $this->customer_name = $customer_name;
        $this->staff_name = $staff_name;
        $this->address = $address;
        $this->customer_ID = $customer_ID;
        $this->staff_ID = $staff_ID;
        $this->payment_condition = $payment_condition;
    }

    public static function getAll()
    {
        $quotationList = [];
        require("connection_connect.php");
        $sql = "select * from Bill natural join Customer natural join Staff order by bill_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $bill_ID = $my_row["bill_ID"];
            $date = $my_row["date"];
            $customer_name = $my_row["customer_name"];
            $staff_name = $my_row["staff_name"];
            $address = $my_row["address"];
            $customer_ID = $my_row["customer_ID"];
            $staff_ID = $my_row["staff_ID"];
            $payment_condition = $my_row["payment_condition"];

            $quotationList[] = new Quotation($bill_ID, $date, $customer_name, $staff_name, $address, $customer_ID, $staff_ID, $payment_condition);
        }
        require("connection_close.php");
        return $quotationList;
    }
    public static function search($key)
    {
        $quotationList = [];
        require("connection_connect.php");
        $sql = "select * from Bill natural join Staff natural join Customer where (bill_ID LIKE'%$key%' or date LIKE'%$key%' or customer_name LIKE'%$key%' or staff_name LIKE'%$key%' or address LIKE'%$key%' or customer_ID LIKE'%$key%' or staff_ID LIKE'%$key%' or payment_condition LIKE'%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $bill_ID = $my_row["bill_ID"];
            $date = $my_row["date"];
            $customer_name = $my_row["customer_name"];
            $staff_name = $my_row["staff_name"];
            $address = $my_row["address"];
            $customer_ID = $my_row["customer_ID"];
            $staff_ID = $my_row["staff_ID"];
            $payment_condition = $my_row["payment_condition"];
            $quotationList[] = new Quotation($bill_ID, $date, $customer_name, $staff_name, $address, $customer_ID, $staff_ID, $payment_condition);
        }
        require("connection_close.php");
        return $quotationList;

    }

}
