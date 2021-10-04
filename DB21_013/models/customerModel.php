<?php
class Customer
{
    public $c_id,$c_name;

    public function __construct($c_id,$c_name)
    {
        $this->c_id = $c_id;
        $this->c_name = $c_name;
    }

    public static function getAll()
    {
        $customerList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Customer";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $c_id = $my_row["c_id"];
            $c_name = $my_row["c_name"];
            $customerList[] = new Customer($c_id,$c_name);
        }
        require("connection_close.php");
        return $customerList;
    }
}