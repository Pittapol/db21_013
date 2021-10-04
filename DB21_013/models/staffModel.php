<?php
class Staff
{
    public $staff_ID,$staff_name;

    public function __construct($staff_ID,$staff_name)
    {
        $this->staff_ID = $staff_ID;
        $this->staff_name = $staff_name;
    }

    public static function getAll()
    {
        $staffList = [];
        require("connection_connect.php");
        $sql = "select * from Staff";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $staff_ID = $my_row["staff_ID"];
            $staff_name = $my_row["staff_name"];
            $staffList[] = new Staff($staff_ID,$staff_name);
        }
        require("connection_close.php");
        return $staffList;
    }
}