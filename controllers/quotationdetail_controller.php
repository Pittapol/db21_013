<?php
class QuotationDetailController
{
    public static function index()
    {
        $quotationdetailList = QuotationDetail::getAll();
        require_once('views/quotationdetail/index_quotationdetail.php');
    }

    public function newQuotation()
    {
        $staffList = Staff::getAll();
        $customerList = Customer::getAll();
        require_once("./views/quotation/newQuotation.php");
    }

    public function search()
    {
        $key = $_GET['key'];
        $quotationdetailList = QuotationDetail::search($key);
        require_once('views/quotationdetail/index_quotationdetail.php');
    }

}
?>