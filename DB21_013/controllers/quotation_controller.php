<?php
class QuotationController
{
    public static function index()
    {
        $quotationList = Quotation::getAll();
        require_once('views/quotation/index_quotation.php');
    }
    public function newQuotation()
    {
        $staffList = Staff::getAll();
        $customerList = Customer::getAll();
        require_once('views/quotation/newQuotation.php');
    }

    public function search()
    {
        $key = $_GET['key'];
        $quotationList = Quotation::search($key);
        require_once('views/quotation/index_quotation.php');
    }
}
?>